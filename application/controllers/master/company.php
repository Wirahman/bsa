<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
    private $controller = 'master/company';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcountry', 'mcountry' );
		$this->load->model( 'Mcity', 'mcity' );
		$this->load->model( 'Mregion', 'mregion' );
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
			if( in_array( 'read_company', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcompany', '' );
				$this->load->view('master/company/index', $data);
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

	public function db_company()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcompany = $this->search->search_comcount( $_POST['key']);
				$mcompany = $this->search->search_comcity( $_POST['key']);
				echo serialize( $mcompany );
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
	
	public function db_city()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcity = $this->search->search_city( $_POST['key'], FALSE );
				echo serialize( $mcity );
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
	
	public function db_read_kepala_city()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcity->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['city_name'];
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
	if( in_array( 'create_company', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['com_id'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['npwp'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['region_code'] )
				&& isset( $_POST['zip'] )
				&& isset( $_POST['fax'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['email'] )
				&& isset( $_POST['website'] )
				&& isset( $_POST['contack_person'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['city_code'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['com_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Company ID <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Type <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Name <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['npwp'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='NPWP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address1'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address2'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['zip'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ZIP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['fax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Fax <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['email'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Email <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['website'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Website<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['city_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='City Code <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mcompany', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['com_id'] = $_POST['com_id'];
				$data['type'] = $_POST['type'];
				$data['name'] = $_POST['name'];
				$data['npwp'] = $_POST['npwp'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['region_code'] = $_POST['region_code'];
				$data['zip'] = $_POST['zip'];
				$data['fax'] = $_POST['fax'];
				$data['phone'] = $_POST['phone'];
				$data['email'] = $_POST['email'];
				$data['website'] = $_POST['website'];
				$data['contack_person'] = $_POST['contack_person'];
				
				$data['country_code'] = $_POST['country_code'];
				$data['city_code'] = $_POST['city_code'];
				$hasil=$this->mcompany->create( $data );
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
		$this->xlog->record( 'create', 'mcompany', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mcompany', $_POST['id'] );
				$mcompany = $this->mcompany->read( $_POST['id'] );
				if( !empty( $mcompany ) ){
					echo serialize( $mcompany );
				}
			}
		}
	}
	
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_company', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['com_id'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['npwp'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['region_code'] )
				&& isset( $_POST['zip'] )
				&& isset( $_POST['fax'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['email'] )
				&& isset( $_POST['website'] )
				&& isset( $_POST['contack_person'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['city_code'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['com_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ID Company <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['type'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Type <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['name'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['npwp'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='NPWP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address1'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['address2'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['zip'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ZIP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['fax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Fax <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['email'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Email <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['website'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Website <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['city_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='City Code<strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcompany', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['com_id'] = $_POST['com_id'];
				$data['type'] = $_POST['type'];
				$data['name'] = $_POST['name'];
				$data['npwp'] = $_POST['npwp'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['region_code'] = $_POST['region_code'];
				$data['zip'] = $_POST['zip'];
				$data['fax'] = $_POST['fax'];
				$data['phone'] = $_POST['phone'];
				$data['email'] = $_POST['email'];
				$data['website'] = $_POST['website'];
				$data['contack_person'] = $_POST['contack_person'];
				$data['country_code'] = $_POST['country_code'];
				$data['city_code'] = $_POST['city_code'];
				$hasil=$this->mcompany->update( $data );
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
		$this->xlog->record( 'update', 'mcompany', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_company', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcompany->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'mcompany', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_company', unserialize( $this->tank_auth->get_capabilities() ) )){		
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcompany', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $acc ){
			$pdf = new FPDF( 'L', 'mm', 'Legal' );
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 300, 5, 'Master Company', 0, 1, 'C' );
			$pdf->Cell( 50, 5, $acc['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $acc['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $acc['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $acc['address2'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, 'Company Name', 1, 0, 'C' );
			$pdf->Cell( 200, 5, 'Address', 1, 1, 'C' );

			
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 100, 5, $acc['name'], 1, 0, 'C' );
					$pdf->Cell( 100, 5, $acc['address'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['address1'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['address2'], 1, 1, 'C' );

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

/* End of file company.php */
/* Location: ./application/controllers/company.php */

