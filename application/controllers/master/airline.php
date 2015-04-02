<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Airline extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mairline', 'mairline');
		$this->load->model('Mcompany', 'mcompany');
	}

	public function index()
	{
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		}else{
			$data['user_id']		= $this->tank_auth->get_user_id();
			$data['username']		= $this->tank_auth->get_username();
			$data['capabilities'] 	= $this->tank_auth->get_capabilities();
			$data['role']			= $this->tank_auth->get_role();

			$this->load->view('header');
			$this->load->view('menu', $data);
			if( in_array('read_airline', unserialize( $this->tank_auth->get_capabilities()))){
				$this->xlog->record( 'open', 'mairline', '');
				$this->load->view('master/airline/index', $data);
			}else{
				$this->load->view('unauthorized', $data);
			}
			$this->load->view('footer');
		}
	}

	public function cari()
	{
		$this->load->view('header');
		$this->load->view('menu_pop');
		if (!$this->tank_auth->is_logged_in()){
			$this->load->view('unauthorized');
		}else{
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('cari/index');
		}
		$this->load->view('footer');
	}

	public function db_airline()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mairline = $this->search->search_airline( $_POST['key']);
				echo serialize( $mairline );
			}
		}
	}

	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->mairline->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['airline_name'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_create()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_airline', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['airline_id'] )
				&& isset( $_POST['airline_name'] )
				&& isset( $_POST['flight_no'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['airline_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Airline ID <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['airline_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Airline Name <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['flight_no'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Flight No. <strong> REQUIRED</strong>..';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mairline', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['airline_id'] = $_POST['airline_id'];
				$data['airline_name'] = $_POST['airline_name'];
				$data['flight_no'] = $_POST['flight_no'];
				$hasil=$this->mairline->create( $data );
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Code Already Exists.';
				}elseif ($hasil=='1'){
				}else {
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Could Not be Saved. There is a Data Error or Server.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Error Procedure, Application Changes, Please Refresh Your Browser.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='You are not Logged In or Have Logged Out.';
		}
	}else{
		$resulttrn['status']='Error';
		$resulttrn['ket']='You do not Have Access to The Data Store.';
	}
	//lanjut disini
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'create', 'mairline', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){	
				$this->xlog->record( 'read', 'mairline', $_POST['id'] );
				$mairline = $this->mairline->read( $_POST['id'] );
				if( !empty( $mairline ) ){
					echo serialize( $mairline );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_airline', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['airline_id'] )
				&& isset( $_POST['airline_name'] )
				&& isset( $_POST['flight_no'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['airline_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Airline ID <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['airline_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Airline Name <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['flight_no'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Flight No. <strong> REQUIRED</strong>..';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mairline', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['airline_id'] = $_POST['airline_id'];
				$data['airline_name'] = $_POST['airline_name'];
				$data['flight_no'] = $_POST['flight_no'];
				$hasil=$this->mairline->update( $data );
				//skip
				if ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Not Found.';
				}elseif ($hasil=='1'){
				}else {
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Has Failed. There Is A Data Error or Server.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Error Procedure, Application Changes, Please Refresh Your Browser.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='You are not Logged In or Have Logged Out.';
		}
	}else{
		$resulttrn['status']='Error';
		$resulttrn['ket']='You do not Have Access to The Data Store.';
	}
	//lanjut disini
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'mairline', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_airline', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mairline->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Code Already Exists.';
					//skip
				}elseif ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Not Found.';
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='The Data Failed To Be removed. There Is a Data Error or Server.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Error Procedure, Application Changes, Please Refresh Your Browser.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='You are not Logged In or Have Logged Out.';
		}
	}else{
		$resulttrn['status']='Error';
		$resulttrn['ket']='You do not Have Access to The Data Store.';
	}
	//lanjut disini
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'delete', 'mairline', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function cetak()
	{
	if(!in_array( 'read_vessel', unserialize( $this->tank_auth->get_capabilities() ) )){	//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mregion', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){

			$pdf = new FPDF( 'P', 'mm', 'A4' );
			$pdf->AliasNbPages();
			$pdf->AddPage();
//lanjut disini
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 195, 5, 'Master Vessel', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 25, 5, 'Airline ID', 1, 0, 'C' );
			$pdf->Cell( 85, 5, 'Airline Name', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Flight No.', 1, 0, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mairline = $this->mairline->all();
			if( ! empty( $mairline ) ){
				foreach( $mairline as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['airline_id'], 1, 0, 'C' );
					$pdf->Cell( 85, 5, $acc['airline_name'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['flight_no'], 1, 0, 'C' );
				}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$pdf->Output();
		} else {
			$this->load->view('header');
			$this->load->view('menu_pop');
			$this->load->view('error');
			$this->load->view('footer');
		}
	}
	}
}
	
	