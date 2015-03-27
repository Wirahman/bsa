<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commodity extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcommodity', 'mcommodity' );
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
			if( in_array( 'read_commodity', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcommodity', '' );
				$this->load->view('master/commodity/index', $data);
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
	public function db_commodity()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcommodity = $this->search->search_comm( $_POST['key']);
				echo serialize( $mcommodity );
			}
		}
	}
	
	public function db_commodity_class()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcommodity_class = $this->search->search_commodity_class( $_POST['key'], FALSE );
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
	if( in_array( 'create_commodity', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['code'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['desc'] )
				&& isset( $_POST['commodity_class'] )
				&& isset( $_POST['nama_kepala'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Code<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Name <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['desc'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['commodity_class']) || empty($_POST['nama_kepala'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Class <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mcommodity', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['code'] = $_POST['code'];
				$data['name'] = $_POST['name'];
				$data['desc'] = $_POST['desc'];
				$data['commodity_class'] = $_POST['commodity_class'];
				$hasil=$this->mcommodity->create( $data );
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
		$this->xlog->record( 'create', 'mcommodity', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mcommodity', $_POST['id'] );
				$mcommodity = $this->mcommodity->read( $_POST['id'] );
				if( !empty( $mcommodity ) ){
					echo serialize( $mcommodity );
				}
			}
		}
	}

	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_commodity', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['code'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['desc'] )
				&& isset( $_POST['commodity_class'] )
				&& isset( $_POST['nama_kepala'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Name <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['commodity_class']) || empty($_POST['nama_kepala'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Commodity Class <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcommodity', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['code'] = $_POST['code'];
				$data['name'] = $_POST['name'];
				$data['desc'] = $_POST['desc'];
				$data['commodity_class'] = $_POST['commodity_class'];
				$hasil=$this->mcommodity->update( $data );
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
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'mcommodity', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_commodity', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcommodity->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'mcommodity', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function cetak()
	{
	if(!in_array( 'read_commodity', unserialize( $this->tank_auth->get_capabilities() ) )){		
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcommodity', '' );
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
			$pdf->Cell( 195, 5, 'Master Commodity', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 30, 5, 'Commodity Code', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Commodity Name', 1, 0, 'C' );
			$pdf->Cell( 85, 5, 'Description', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Commodity Class', 1, 1, 'C' );
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mcommodity = $this->mcommodity->all();
			if( ! empty( $mcommodity ) ){
				foreach( $mcommodity as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 30, 5, $acc['code'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['name'], 1, 0, 'C' );
					$pdf->Cell( 85, 5, $acc['desc'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['nama_kepala'], 1, 1, 'C' );
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