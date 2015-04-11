<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest_book extends CI_Controller {
    private $controller = 'master/guest_book';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mguest_book', 'mguest_book' );
		$this->load->model( 'Mcompany', 'mcompany' );
                $this->load->library( 'Emkl', 'emkl');
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
			if( in_array( 'read_customer', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mguest_book', '' );
				$this->load->view('master/guest_book/index', $data);
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

	public function db_guest_book()
	{
		if ($this->tank_auth->is_logged_in()){
			if ( isset( $_POST['key']) ){
				$this->load->model( 'Search', 'search' );
				$mguest_book = $this->search -> search_guest_book( $_POST['key']);
				echo serialize( $mguest_book);
			}
		}
	}
	// Create $data
	public function db_create()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_guest_book', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['date'] )
				&& isset( $_POST['nama'] )
				&& isset( $_POST['alamat'] )
				&& isset( $_POST['contack_person'] )
				&& isset( $_POST['company_name'] )
				&& isset( $_POST['tujuan'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['date'])|| !$this->emkl->cek_format_tanggal( $_POST[ 'date' ] )){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Tanggal Perjanjian<strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['nama'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama<strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['alamat'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Alamat anda<strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person anda <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['company_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Asal Perusahaan anda<strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['tujuan'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Tujuan anda datang kemari<strong> HARUS</strong> diisi.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mguest_book', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['date'] 				= $this->emkl-> change_format ( $_POST['date'] );
				$data['nama'] 				= $_POST['nama'];
				$data['alamat']				= $_POST['alamat'];
				$data['contack_person'] 	= $_POST['contack_person'];
				$data['company_name']		= $_POST['company_name'];
				$data['tujuan'] 			= $_POST['tujuan'];
				$hasil=$this->mguest_book->create( $data );
				
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'create', 'mguest_book', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	//Membaca $data
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
			
				$this->xlog->record( 'read', 'mguest_book', $_POST['id'] );
				$mguest_book = $this->mguest_book->read( $this->emkl-> change_format ($_POST [ 'id' ]));
				
				if( !empty( $mguest_book ) ){
					echo serialize( $mguest_book );
				}
			}
		}
	}
	
	//Update $data
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_guest_book', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['date'] )
				&& isset( $_POST['nama'] )
				&& isset( $_POST['alamat'] )
				&& isset( $_POST['company_name'] )
				&& isset( $_POST['tujuan'] )
				&& isset( $_POST['contack_person'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['date'])|| !$this->emkl->cek_format_tanggal( $_POST[ 'date' ] )){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Tanggal Perjanjian <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['nama'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama Anda <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['alamat'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Alamat Anda <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person anda <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['company_name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Perusahaan asal Anda <strong> HARUS</strong> diisi.';
				}elseif (empty($_POST['tujuan'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Tujuan Anda <strong> HARUS</strong> diisi.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mguest_book', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['date'] 			     = $this->emkl-> change_format ( $_POST['date'] );
				$data['nama']				 = $_POST['nama'];
				$data['alamat'] 			 = $_POST['alamat'];
				$data['contack_person']		 = $_POST['contack_person'];
				$data['company_name']        = $_POST['company_name'];
				$data['tujuan']   			 = $_POST['tujuan'];
				$hasil=$this->mguest_book->update( $data );
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'mguest_book', $resulttrnx );
		echo serialize($resulttrn);
	
	}
	//Delete Data
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_guest_book', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mguest_book->delete(  $this->emkl-> change_format ($_POST['id']) );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data With The Same Code Already Exists.';
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'delete', 'mguest_book', $resulttrnx );
		echo serialize($resulttrn);
	}
	//Cetak Guest_Book
	public function cetak()
	{
	if(!in_array( 'read_guest_book', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mguest_book', '' );
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
			$pdf->Cell( 195, 5, 'Daftar Tamu', 0, 1, 'C' );
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 35, 5, 'Date', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Nama', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Asal Perusahaan', 1, 0, 'C' );
			$pdf->Cell( 55, 5, 'Tujuan', 1, 1, 'C' );
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}
			//disini panggil fungsi all yang di mguest_book
			$originalDate = "2010-03-21";
			$newDate = date("d-m-Y", strtotime($originalDate));
			$mguest_book = $this->mguest_book->all();
			if( ! empty( $mguest_book ) ){
				foreach( $mguest_book as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 35, 5, date("d-m-Y", strtotime($acc['date'])), 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['nama'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['company_name'], 1, 0, 'C' );
					$pdf->Cell( 55, 5, $acc['tujuan'], 1, 1, 'C' );
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
