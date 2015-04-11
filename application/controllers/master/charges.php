<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class charges extends CI_Controller {
    private $controller = 'master/charges';

	function  __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcharges', 'mcharges' );
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
			if( in_array( 'read_charges', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcharges', '' );
				$this->load->view('master/charges/index', $data);
			} else {
				$this->load->view('unauthorized', $data);
			}
			$this->load->view('footer');
		}
	}
	
	public function  cari()
	{
		$args = $this->uri->uri_to_assoc(4);
		cari($this, $this->controller, $args);
	}
	public function  db_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcharges = $this->search->search_chra( $_POST['key']);
				echo serialize( $mcharges );
			}
		}
	}
	
	public function  db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcharges->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['description'];
				}else{
					echo '';
				}
			}
		}
	}
	public function  db_create()
	{
	
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
		if( in_array( 'create_charges', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['charges_code'] )
				&& isset( $_POST['description'] )
				&& isset( $_POST['gl_code'] )
				&& isset( $_POST['traffic_lane'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['lintas'] )
				&& isset( $_POST['ket2'] )
				&& isset( $_POST['gl_description'] )
				
				)
				{
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['charges_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['gl_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='GL Code<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['gl_description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='GL Description<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Type<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['traffic_lane'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Traffic Lane<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['ket2'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Status<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['lintas'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Exim<strong>REQUIRED</strong> .';
				}
							
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'charges', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['charges_code'] 		= $_POST['charges_code'];
				$data['description'] 		= $_POST['description'];
				$data['gl_code'] 			= $_POST['gl_code'];
				$data['traffic_lane'] 		= $_POST['traffic_lane'];
				$data['gl_description'] 	= $_POST['gl_description'];
				$data['type'] 				= $_POST['type'];
				$data['lintas'] 			= $_POST['lintas'];

				$data['ket2'] 				= $_POST['ket2'];
										
				$hasil=$this->mcharges->create( $data );
				
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
		$this->xlog->record( 'create', 'mcharges', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function  db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'charges', $_POST['id'] );
				$mcharges = $this->mcharges->read( $_POST['id'] );
				
				if( !empty( $mcharges ) ){
					echo serialize( $mcharges );
				}
			}
		}
	}
	public function  db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_charges', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['charges_code'] )
				&& isset( $_POST['description'] )
				&& isset( $_POST['gl_code'] )
				&& isset( $_POST['traffic_lane'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['lintas'] )
				&& isset( $_POST['ket2'] )
				&& isset( $_POST['gl_description'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['charges_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Description <strong>REQUIRED</strong> .';
				}elseif (empty($_POST['gl_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='GL Code<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['gl_description'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='GL Description<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Type<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['traffic_lane'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Traffic Lane<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['ket2'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Status<strong>REQUIRED</strong> .';
				}elseif (empty($_POST['lintas'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Exim<strong>REQUIRED</strong> .';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcharges', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['charges_code'] 			= $_POST['charges_code'];
				$data['description'] 			= $_POST['description'];
				$data['traffic_lane'] 			= $_POST['traffic_lane'];
				$data['gl_code'] 				= $_POST['gl_code'];
				$data['gl_description'] 		= $_POST['gl_description'];
				$data['type'] 					= $_POST['type'];
				$data['lintas'] 				= $_POST['lintas'];
				$data['ket2'] 					= $_POST['ket2'];
				$hasil=$this->mcharges->update( $data );
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
		$this->xlog->record( 'update', 'mcharges', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function  db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_charges', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcharges->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Code Already Exist';
					//skip
				}elseif ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data Not Found';
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='The Data Failed To Be Removed. There Is a Data Error or Server.';
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
		$this->xlog->record( 'delete', 'mcharges', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function  cetak()
	{
	if(!in_array( 'read_charges', unserialize( $this->tank_auth->get_capabilities() ) )){//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcharges', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
            
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){
				
			$pdf = new FPDF( 'L', 'mm', 'A3' );
			$pdf->AliasNbPages();
			$pdf->AddPage();
	//lanjut disini
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			//$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );
			
			$pdf->Cell( 370, 5, 'Master Charges', 1, 1, 'C' );          
            $pdf->Cell( 20, 5, 'Code', 1, 0, 'C' );
			$pdf->Cell( 100, 5, 'Description', 1, 0, 'C' );
			$pdf->Cell( 20, 5, 'Traffic Lane', 1, 0, 'C' );
			$pdf->Cell( 20, 5, 'Exim', 1, 0, 'C' );
			
			$pdf->Cell( 20, 5, 'Type', 1, 0, 'C' );
			$pdf->Cell( 40, 5, 'Freight', 1, 0, 'C' );
			$pdf->Cell( 25, 5, 'GL Code', 1, 0, 'C' );
			$pdf->Cell( 125, 5, 'GL Description', 1, 1, 'C' );
            }
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}
			$mcharges = $this->mcharges->all();
			if( ! empty( $mcharges ) ){
				foreach( $mcharges as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 20, 5, $acc['charges_code'], 1, 0, 'C' );
					$pdf->Cell( 100, 5, $acc['description'], 1, 0, 'C' );
					$pdf->Cell( 20, 5, $acc['traffic_lane'], 1, 0, 'C' );
					$pdf->Cell( 20, 5, $acc['lintas'], 1, 0, 'C' );
					$pdf->Cell( 20, 5, $acc['type'], 1, 0, 'C' );
					$pdf->Cell( 40, 5, $acc['ket2'], 1, 0, 'C' );
					$pdf->Cell( 25, 5, $acc['gl_code'], 1, 0, 'C' );
					$pdf->Cell( 125, 5, $acc['gl_description'], 1, 1, 'C' );
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
