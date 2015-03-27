<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sales_bon extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Msales_bon', 'msales_bon' );
		$this->load->library( 'Emkl', 'emkl' );
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
			if( in_array( 'read_sales_bon', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'msales_bon', '' );
				$this->load->view('master/sales_bon/index', $data);
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
	public function db_sales_bon()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$msales_bon = $this->search->search_sal_bon( $this->emkl-> change_format ($_POST [ 'key' ]));
				echo serialize( $msales_bon );
			}
		}
	}
	
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->msales_bon->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['date'];
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
	if( in_array( 'create_sales_bon', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			    if( isset( $_POST['date'] )
				&& isset( $_POST['min_target'] )
				&& isset( $_POST['percentage_bonus'] )
				&& isset( $_POST['target'] )
				
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['date'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Date<strong>REQUIRED</strong>.';
				}elseif (empty($_POST['min_target'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Minimal Target<strong>REQUIRED</strong>.';
				}elseif (empty($_POST['percentage_bonus'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Percentage Bonus<strong>REQUIRED</strong>.';
				}elseif (empty($_POST['target'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Target <strong>REQUIRED</strong>.';
				
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'msales_bon', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['date'] = $this->emkl->change_format( $_POST['date'] );
				$data['target'] = $_POST['target'];
				$data['min_target'] = $_POST['min_target'];
				$data['percentage_bonus'] = $_POST['percentage_bonus'];
				
				
				$hasil=$this->msales_bon->create( $data );
				
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Date Already Exist.';
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
		$this->xlog->record( 'create', 'msales_bon', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				
				$this->xlog->record( 'read', 'msales_bon', $_POST['id'] );
				$msales_bon = $this->msales_bon->read( $this->emkl-> change_format ($_POST [ 'id' ]));
				if( !empty( $msales_bon ) ){
					echo serialize( $msales_bon );
				}
			}
		}
	}
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_sales_bon', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['date'] )
				&& isset( $_POST['target'] )
				&& isset( $_POST['min_target'] )
				&& isset( $_POST['percentage_bonus'] )
				){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['date'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Date<strong>REQUIRED</strong>.';
				}elseif (empty($_POST['target'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Target <strong>REQUIRED</strong>.';
				}elseif (empty($_POST['min_target'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Minimal Target <strong>REQUIRED</strong>.';
				}elseif (empty($_POST['percentage_bonus'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Percentage Bonus<strong>REQUIRED</strong>.';
				}
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'msales_bon', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['date']		= $this->emkl->change_format( $_POST['date'] );
				// $data['date']		= $this->emkl->formattanggal( $_POST['date'] );
				$data['target'] = $_POST['target'];
				$data['min_target'] = $_POST['min_target'];
				$data['percentage_bonus'] = $_POST['percentage_bonus'];
				$hasil=$this->msales_bon->update( $data );
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
		$this->xlog->record( 'update', 'msales_bon', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_sales_bon', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->msales_bon->delete(  $this->emkl-> change_format ($_POST['id']) );
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
		$this->xlog->record( 'delete', 'msales_bon', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_sales_bon', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'msales_bon', '' );
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
			$pdf->Cell( 195, 5, 'Master Sales Bon', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			$pdf->Cell( 75, 5, 'Date', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Target', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Min target', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Percentage Bonus', 1, 1, 'C' );
			
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}
			

			$msales_bon = $this->msales_bon->all();
			if( ! empty( $msales_bon ) ){
				foreach( $msales_bon as $acc ){
					$pdf->SetFont( 'Times','',10 );
                	$pdf->Cell( 75, 5, $acc['date'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['target'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['min_target'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['percentage_bonus'], 1, 1, 'C' );
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