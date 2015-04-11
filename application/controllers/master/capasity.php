<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capasity extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcapasity', 'mcapasity' );
	}
	public function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['capabilities']	= $this->tank_auth->get_capabilities();
			$data['role']	= $this->tank_auth->get_role();

			$this->load->view('header');
			$this->load->view('menu', $data);
			if( in_array( 'read_capasity', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcapasity', '' );
				$this->load->view('master/capasity/index', $data);
			} else {
				$this->load->view('unauthorized', $data);
			}
			$this->load->view('footer');
		}
	}
	public function cari()
	{
		$this->load->view('header');
		$this->load->view('menu_pop');
		if (!$this->tank_auth->is_logged_in()) {
			$this->load->view('unauthorized');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('cari/index');
		}
		$this->load->view('footer');
	}
	public function db_capasity()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcapasity = $this->search->search_capasity( $_POST['key']);
				echo serialize( $mcapasity );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcapasity->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['description'];
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
	if( in_array( 'create_capasity', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['capasity_code'] )
				&& isset( $_POST['description'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['capasity_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Capasity Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Capasity Name<strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mcapasity', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['capasity_code'] = $_POST['capasity_code'];
				$data['description'] = $_POST['description'];
				$hasil=$this->mcapasity->create( $data );
				
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Code Already Exists.';
				}elseif ($hasil=='1'){
				//skip
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
		$this->xlog->record( 'create', 'mcapasity', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
			
				$this->xlog->record( 'read', 'mcapasity', $_POST['id'] );
				$mcapasity = $this->mcapasity->read( $_POST['id'] );
				
				if( !empty( $mcapasity ) ){
					echo serialize( $mcapasity );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_capasity', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['capasity_code'] )
				&& isset( $_POST['description'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['capasity_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Capasity Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Capasity Name <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcapasity', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['capasity_code'] = $_POST['capasity_code'];
				$data['description'] = $_POST['description'];
				$hasil=$this->mcapasity->update( $data );
				//skip
				if ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data tidak ada.';
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
		$this->xlog->record( 'update', 'mcapasity', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_capasity', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcapasity->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'mcapasity', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_capasity', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcapasity', '' );
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
			$pdf->Cell( 195, 5, 'Master Capasity', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 50, 5, 'Capasity Code', 1, 0, 'C' );
			$pdf->Cell( 145, 5, 'Capasity Name', 1, 1, 'C' );
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mcapasity = $this->mcapasity->all();
			if( ! empty( $mcapasity ) ){
				foreach( $mcapasity as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 50, 5, $acc['capasity_code'], 1, 0, 'C' );
					$pdf->Cell( 145, 5, $acc['description'], 1, 1, 'C' );
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