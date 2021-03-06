<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Airport extends CI_Controller {
    private $controller = 'master/airport';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mairport', 'mairport' );
		$this->load->model( 'Mcountry', 'mcountry' );
		$this->load->model( 'Mregion', 'mregion' );
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
			if( in_array( 'read_airport', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mairport', '' );
				$this->load->view('master/airport/index', $data);
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
	public function db_airport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mairport = $this->search->search_aircount( $_POST['key']);
				$mairport = $this->search->search_airreg( $_POST['key']);
				echo serialize( $mairport );
			}
		}
	}
	
	public function db_country()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcountry = $this->search->search_count( $_POST['key'], FALSE );
				echo serialize( $mcountry );
			}
		}
	}
	
	public function db_region()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mregion = $this->search->search_reg( $_POST['key'], FALSE );
				echo serialize( $mregion );
			}
		}
	}
	public function db_read_kepala_country()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcountry->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['country_name'];
				}else{
					echo '';
				}
			}
		}
	}
	public function db_read_kepala_region()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mregion->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['region_name'];
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
	if( in_array( 'create_airport', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['port_kode'] )
				&& isset( $_POST['port_name'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['region_code'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['port_kode'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Port Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['port_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Port Name <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region Code <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mairport', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['port_kode'] = $_POST['port_kode'];
				$data['port_name'] = $_POST['port_name'];
				$data['country_code'] = $_POST['country_code'];
				$data['region_code'] = $_POST['region_code'];
				$hasil=$this->mairport->create( $data );
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Already Exists.';
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'create', 'mairport', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mairport', $_POST['id'] );
				$mairport = $this->mairport->read( $_POST['id'] );
				if( !empty( $mairport ) ){
					echo serialize( $mairport );
				}
			}
		}
	}
	
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_airport', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['port_kode'] )
				&& isset( $_POST['port_name'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['region_code'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['port_kode'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Port Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['port_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Port Name <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region Code <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mairport', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['port_kode'] = $_POST['port_kode'];
				$data['port_name'] = $_POST['port_name'];
				$data['country_code'] = $_POST['country_code'];
				$data['region_code'] = $_POST['region_code'];
				$hasil=$this->mairport->update( $data );
				if ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Not Found.';
				}elseif ($hasil=='1'){
				}else {
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Has Failed To Update. There Is A Data Error or Server.';
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'mairport', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_airport', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mairport->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Code Already Exists.';
				}elseif ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Not Found.';
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Failed To Be Removed. There Is a Data Error or Server.';
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'delete', 'mairport', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_airport', unserialize( $this->tank_auth->get_capabilities() ) )){		
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mairport', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){

			$pdf = new FPDF( 'P', 'mm', 'A4' );
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 195, 5, 'Master Airport', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );			

			$pdf->Cell( 25, 5, 'Port Code', 1, 0, 'C' );
			$pdf->Cell( 70, 5, 'Port Name', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Country', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Region', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mairport = $this->mairport->allcountry();
			$mairport = $this->mairport->allregion();
			if( ! empty( $mairport ) ){
				foreach( $mairport as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['port_kode'], 1, 0, 'C' );
					$pdf->Cell( 70, 5, $acc['port_name'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['country_code'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['region_code'], 1, 1, 'C' );
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

/* End of file account.php */
/* Location: ./application/controllers/account.php */


