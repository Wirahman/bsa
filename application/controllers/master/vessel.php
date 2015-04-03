<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vessel extends CI_Controller {
    private $controller = 'master/vessel';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mvessel', 'mvessel' );
		$this->load->model( 'Mcompany', 'mcompany' );
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
			if( in_array( 'read_vessel', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mvessel', '' );
				$this->load->view('master/vessel/index', $data);
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
	public function db_vessel()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mvessel = $this->search->search_ves( $_POST['key']);
				echo serialize( $mvessel );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mvessel->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['vessel_name'];
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
	if( in_array( 'create_vessel', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['vessel_code'] )
				&& isset( $_POST['vessel_name'] )
				&& isset( $_POST['vessel_type'] )
				&& isset( $_POST['flag'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['vessel_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kode Vessel <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['vessel_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['vessel_type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Type Vessel <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['flag'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Flag <strong> REQUIRED</strong>..';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mvessel', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['vessel_code'] = $_POST['vessel_code'];
				$data['vessel_name'] = $_POST['vessel_name'];
				$data['vessel_type'] = $_POST['vessel_type'];
				$data['flag'] = $_POST['flag'];
				$hasil=$this->mvessel->create( $data );
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
		$this->xlog->record( 'create', 'mvessel', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){	
				$this->xlog->record( 'read', 'mvessel', $_POST['id'] );
				$mvessel = $this->mvessel->read( $_POST['id'] );
				if( !empty( $mvessel ) ){
					echo serialize( $mvessel );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_vessel', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['vessel_code'] )
				&& isset( $_POST['vessel_name'] )
				&& isset( $_POST['vessel_type'] )
				&& isset( $_POST['flag'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['vessel_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Vessel Code <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['vessel_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Vessel Name <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['vessel_type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Vessel Type <strong> REQUIRED</strong>..';
				}elseif (empty($_POST['flag'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Flag <strong> REQUIRED</strong>..';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mvessel', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['vessel_code'] = $_POST['vessel_code'];
				$data['vessel_name'] = $_POST['vessel_name'];
				$data['vessel_type'] = $_POST['vessel_type'];
				$data['flag'] = $_POST['flag'];
				$hasil=$this->mvessel->update( $data );
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
		$this->xlog->record( 'update', 'mvessel', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_vessel', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mvessel->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'mvessel', $resulttrnx );
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

			$pdf->Cell( 25, 5, 'Vessel Code', 1, 0, 'C' );
			$pdf->Cell( 85, 5, 'Vessel Name', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Vessel Type', 1, 0, 'C' );
			$pdf->Cell( 45, 5, 'Flag', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mvessel = $this->mvessel->all();
			if( ! empty( $mvessel ) ){
				foreach( $mvessel as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['vessel_code'], 1, 0, 'C' );
					$pdf->Cell( 85, 5, $acc['vessel_name'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['vessel_type'], 1, 0, 'C' );
					$pdf->Cell( 45, 5, $acc['flag'], 1, 1, 'C' );
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
	
	
