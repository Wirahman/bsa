<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commodity_class extends CI_Controller {
    private $controller = 'master/commodity_class';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcommodity_class', 'mcommodity_class' );
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
			if( in_array( 'read_commodity_class', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcommodity_class', '' );
				$this->load->view('master/commodity_class/index', $data);
			} else {
				$this->load->view('unauthorized', $data);
			}
			$this->load->view('footer');
		}
	}
	public function cari()
	{
		$args = $this->uri->uri_to_assoc(4);
		cari($this, $this->controller, $args);
	}
	public function db_commodity_class()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcommodity_class = $this->search->search_commodity_class( $_POST['key']);
				echo serialize( $mcommodity_class );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcommodity_class->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['comdesc'];
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
	if( in_array( 'create_commodity_class', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['comclass'] )
				&& isset( $_POST['comdesc'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['comclass'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Class <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['comdesc'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description<strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mcommodity_class', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['comclass'] = $_POST['comclass'];
				$data['comdesc'] = $_POST['comdesc'];
				$hasil=$this->mcommodity_class->create( $data );
				
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Class Already Exists.';
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
		$this->xlog->record( 'create', 'mcommodity_class', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
			
				$this->xlog->record( 'read', 'mcommodity_class', $_POST['id'] );
				$mcommodity_class = $this->mcommodity_class->read( $_POST['id'] );
				
				if( !empty( $mcommodity_class ) ){
					echo serialize( $mcommodity_class );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_commodity_class', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['comclass'] )
				&& isset( $_POST['comdesc'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['comclass'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Class <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['comdesc'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcommodity_class', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['comclass'] = $_POST['comclass'];
				$data['comdesc'] = $_POST['comdesc'];
				$hasil=$this->mcommodity_class->update( $data );
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
		$this->xlog->record( 'update', 'mcommodity_class', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_commodity_class', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcommodity_class->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Class Already Exist.';
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
		$this->xlog->record( 'delete', 'mcommodity_class', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_commodity_class', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcommodity_class', '' );
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
			$pdf->Cell( 195, 5, 'Master Commodity_class', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 45, 5, 'Commodity Class', 1, 0, 'C' );
			$pdf->Cell( 150, 5, 'Description', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mcommodity_class = $this->mcommodity_class->all();
			if( ! empty( $mcommodity_class ) ){
				foreach( $mcommodity_class as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 45, 5, $acc['comclass'], 1, 0, 'C' );
					$pdf->Cell( 150, 5, $acc['comdesc'], 1, 1, 'C' );
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
