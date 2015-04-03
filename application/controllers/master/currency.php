<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class currency extends CI_Controller {
    private $controller = 'master/currency';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcurrency', 'mcurrency' );
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
			if( in_array( 'read_currency', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcurrency', '' );
				$this->load->view('master/currency/index', $data);
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
	public function db_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcurrency = $this->search->search_cur( $_POST['key']);
				echo serialize( $mcurrency );
			}
		}
	}
	
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcurrency->read( $_POST['id'] );
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
		if( in_array( 'create_currency', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['currency_code'] )
				&& isset( $_POST['description'] )
				&& isset( $_POST['symbol'] )
				&& isset( $_POST['function'] )
				
				)
				{
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['currency_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong>.';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description<strong>REQUIRED</strong>.';
				}elseif (empty($_POST['symbol'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Symbol<strong>REQUIRED</strong>.';
				}
							
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'currency', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['currency_code'] 		= $_POST['currency_code'];
				$data['description'] 		= $_POST['description'];
				$data['symbol'] 			= $_POST['symbol'];
				$data['function'] 			= $_POST['function'];
				$hasil=$this->mcurrency->create( $data );
				
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
		$this->xlog->record( 'create', 'mcurrency', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'currency', $_POST['id'] );
				$mcurrency = $this->mcurrency->read( $_POST['id'] );
				
				if( !empty( $mcurrency ) ){
					echo serialize( $mcurrency );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_currency', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['currency_code'] )
				&& isset( $_POST['description'] )
				&& isset( $_POST['symbol'] )
				&& isset( $_POST['function'] )
				
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['currency_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['symbol'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Symbol<strong>REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcurrency', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['currency_code'] = $_POST['currency_code'];
				$data['description'] = $_POST['description'];
				$data['function'] = $_POST['function'];
				$data['symbol'] = $_POST['symbol'];
				$hasil=$this->mcurrency->update( $data );
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
		$this->xlog->record( 'update', 'mcurrency', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_currency', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcurrency->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code Already Exist.';
					//skip
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
	//lanjut disini
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'delete', 'mcurrency', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_currency', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcurrency', '' );
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
			$pdf->Cell( 195, 5, 'Master Currency', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 25, 5, 'Code', 1, 0, 'C' );
			$pdf->Cell( 145, 5, 'Description', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'Symbol', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mcurrency = $this->mcurrency->all();
			if( ! empty( $mcurrency ) ){
				foreach( $mcurrency as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['currency_code'], 1, 0, 'C' );
					$pdf->Cell( 145, 5, $acc['description'], 1, 0, 'L' );
					$pdf->Cell( 25, 5, $acc['symbol'], 1, 1, 'C' );
					
				}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'Tidak ada data', 1, 1, 'C' );
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
