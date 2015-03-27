<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sales extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Msales', 'msales' );
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
			if( in_array( 'read_sales', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'msales', '' );
				$this->load->view('master/sales/index', $data);
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
	public function db_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$msales = $this->search->search_sal( $_POST['key']);
				echo serialize( $msales );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->msales->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['nama_sales'];
				}else{
					echo '';
				}
			}
		}
	}
	
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'msales', $_POST['id'] );
				$msales = $this->msales->read( $_POST['id'] );
				
				if( !empty( $msales ) ){
					echo serialize( $msales );
				}
			}
		}
	}
	
	public function db_create()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_sales', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['sales_code'] )
				&& isset( $_POST['nama_sales'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['title'] )
				&& isset( $_POST['team'] )
				&& isset( $_POST['no_ktp'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['sales_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['nama_sales'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Name<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['address'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['title'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Title<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['team'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Team<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['no_ktp'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Identify<strong>REQUIRED</strong> .';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'msales', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['sales_code'] = $_POST['sales_code'];
				$data['nama_sales'] = $_POST['nama_sales'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['phone'] = $_POST['phone'];
				$data['no_ktp'] = $_POST['no_ktp'];
				$data['title'] = $_POST['title'];
				$data['team'] = $_POST['team'];
				$hasil=$this->msales->create( $data );
				
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Already Exist.';
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
		$this->xlog->record( 'create', 'msales', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_sales', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['sales_code'] )
				&& isset( $_POST['nama_sales'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['title'] )
				&& isset( $_POST['team'] )
				&& isset( $_POST['no_ktp'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['sales_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['nama_sales'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Name <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['address'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['title'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Title<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['team'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Team<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['no_ktp'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Identify<strong>REQUIRED</strong> .';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'msales', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['sales_code'] = $_POST['sales_code'];
				$data['nama_sales'] = $_POST['nama_sales'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['phone'] = $_POST['phone'];
				$data['no_ktp'] = $_POST['no_ktp'];
				$data['title'] = $_POST['title'];
				$data['team'] = $_POST['team'];
				$hasil=$this->msales->update( $data );
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
		$this->xlog->record( 'update', 'msales', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_sales', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->msales->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'msales', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_sales', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'msales', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){

			$pdf = new FPDF( 'L', 'mm', 'Legal' );
			$pdf->AliasNbPages();
			$pdf->AddPage();
	//lanjut disini
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 300, 5, 'Master Sales', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 25, 5, 'Code', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'Name', 1, 0, 'C' );
			$pdf->Cell( 100, 5, 'Address', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'City', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Phone', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'Identity', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'Title', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'Team', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$msales = $this->msales->all();
			if( ! empty( $msales ) ){
				foreach( $msales as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['sales_code'], 1, 0, 'C' );
					$pdf->Cell( 25, 5, $acc['nama_sales'], 1, 0, 'L' );
					$pdf->Cell( 100, 5, $acc['address'], 1, 0, 'L' );
					$pdf->Cell( 25, 5, $acc['address1'], 1, 0, 'L' );
					$pdf->Cell( 50, 5, $acc['phone'], 1, 0, 'L' );
					$pdf->Cell( 25, 5, $acc['no_ktp'], 1, 0, 'L' );
					$pdf->Cell( 25, 5, $acc['title'], 1, 0, 'L' );
					$pdf->Cell( 25, 5, $acc['team'], 1, 1, 'L' );
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