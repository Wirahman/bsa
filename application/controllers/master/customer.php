<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
    private $controller = 'master/customer';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcustomer', 'mcustomer' );
		$this->load->model( 'Mcountry', 'mcountry' );
		$this->load->model( 'Mcity', 'mcity' );
		$this->load->model( 'Mcompany', 'mcompany' );
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
			if( in_array( 'read_customer', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mcustomer', '' );
				$this->load->view('master/customer/index', $data);
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
	
	public function db_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcustomer = $this->search->search_customer( $_POST['key']);
				echo serialize( $mcustomer );
			}
		}
	}
	
	
	public function db_create()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_customer', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['cus_id'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['npwp'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['address_tax'] )
				&& isset( $_POST['address_tax1'] )
				&& isset( $_POST['address_tax2'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['region_code'] )
				&& isset( $_POST['city_code'] )
				&& isset( $_POST['zip'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['fax'] )
				&& isset( $_POST['email'] )
				&& isset( $_POST['website'] )
				&& isset( $_POST['contack_person'] )
				&& isset( $_POST['dept'] )
				&& isset( $_POST['credit_term'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['cus_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Customer ID <strong> REQUIRED</strong>.';
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
				}elseif (empty($_POST['address_tax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address Tax<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['city_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='City Code <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['zip'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ZIP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['fax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Fax <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['email'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Email <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['website'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Website<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['dept'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Dept <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['credit_term'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Credit Term <strong> REQUIRED</strong>.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mcustomer', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['cus_id'] = $_POST['cus_id'];
				$data['type'] = $_POST['type'];
				$data['name'] = $_POST['name'];
				$data['npwp'] = $_POST['npwp'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['address_tax'] = $_POST['address_tax'];
				$data['address_tax1'] = $_POST['address_tax1'];
				$data['address_tax2'] = $_POST['address_tax2'];
				$data['country_code'] = $_POST['country_code'];
				$data['region_code'] = $_POST['region_code'];
				$data['city_code'] = $_POST['city_code'];
				$data['zip'] = $_POST['zip'];
				$data['phone'] = $_POST['phone'];
				$data['fax'] = $_POST['fax'];
				$data['email'] = $_POST['email'];
				$data['website'] = $_POST['website'];
				$data['contack_person'] = $_POST['contack_person'];
				$data['dept'] = $_POST['dept'];
				$data['credit_term'] = $_POST['credit_term'];
				if(isset( $_POST['classification1'] ))
				{
					$data['shipper'] = 1;	
				}
				else
				{
					$data['shipper'] = 0;	
				}
				if(isset( $_POST['classification2'] ))
				{
					$data['consignee'] = 1;	
				}
				else
				{
					$data['consignee'] = 0;	
				}
				if(isset( $_POST['classification3'] ))
				{
					$data['agent'] = 1;	
				}
				else
				{
					$data['agent'] = 0;	
				}
				if(isset( $_POST['classification4'] ))
				{
					$data['shippingline'] = 1;	
				}
				else
				{
					$data['shippingline'] = 0;	
				}
				if(isset( $_POST['classification5'] ))
				{
					$data['airline'] = 1;	
				}
				else
				{
					$data['airline'] = 0;	
				}
				if(isset( $_POST['classification6'] ))
				{
					$data['coloader'] = 1;	
				}
				else
				{
					$data['coloader'] = 0;	
				}
				
				$hasil=$this->mcustomer->create( $data );
				
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
		$this->xlog->record( 'create', 'mcustomer', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mcustomer', $_POST['id'] );
				$mcustomer = $this->mcustomer->read( $_POST['id'] );
				if( !empty( $mcustomer ) ){
					echo serialize( $mcustomer );
				}
			}
		}
	}
	
	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_customer', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['cus_id'] )
				&& isset( $_POST['type'] )
				&& isset( $_POST['name'] )
				&& isset( $_POST['npwp'] )
				&& isset( $_POST['address'] )
				&& isset( $_POST['address1'] )
				&& isset( $_POST['address2'] )
				&& isset( $_POST['address_tax'] )
				&& isset( $_POST['address_tax1'] )
				&& isset( $_POST['address_tax2'] )
				&& isset( $_POST['country_code'] )
				&& isset( $_POST['region_code'] )
				&& isset( $_POST['city_code'] )
				&& isset( $_POST['zip'] )
				&& isset( $_POST['phone'] )
				&& isset( $_POST['fax'] )
				&& isset( $_POST['email'] )
				&& isset( $_POST['website'] )
				&& isset( $_POST['contack_person'] )
				&& isset( $_POST['dept'] )
				&& isset( $_POST['credit_term'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['cus_id'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ID Customer <strong> REQUIRED</strong>.';
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
				}elseif (empty($_POST['address_tax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Address Tax<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['country_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Country Code<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['region_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Region <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['city_code'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='City Code<strong> REQUIRED</strong>.';
				}elseif (empty($_POST['zip'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='ZIP <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['phone'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Phone <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['fax'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Fax <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['email'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Email <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['website'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Website <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['contack_person'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Contack Person <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['dept'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Dept <strong> REQUIRED</strong>.';
				}elseif (empty($_POST['credit_term'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Credit Term <strong> REQUIRED</strong>.';
				}
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mcustomer', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['cus_id'] = $_POST['cus_id'];
				$data['type'] = $_POST['type'];
				$data['name'] = $_POST['name'];
				$data['npwp'] = $_POST['npwp'];
				$data['address'] = $_POST['address'];
				$data['address1'] = $_POST['address1'];
				$data['address2'] = $_POST['address2'];
				$data['address_tax'] = $_POST['address_tax'];
				$data['address_tax1'] = $_POST['address_tax1'];
				$data['address_tax2'] = $_POST['address_tax2'];
				$data['country_code'] = $_POST['country_code'];
				$data['region_code'] = $_POST['region_code'];
				$data['city_code'] = $_POST['city_code'];
				$data['zip'] = $_POST['zip'];
				$data['phone'] = $_POST['phone'];
				$data['fax'] = $_POST['fax'];
				$data['email'] = $_POST['email'];
				$data['website'] = $_POST['website'];
				$data['contack_person'] = $_POST['contack_person'];
				$data['dept'] = $_POST['dept'];
				$data['credit_term'] = $_POST['credit_term'];
				if(isset( $_POST['classification1'] ))
				{
					$data['shipper'] = 1;	
				}
				else
				{
					$data['shipper'] = 0;	
				}
				if(isset( $_POST['classification2'] ))
				{
					$data['consignee'] = 1;	
				}
				else
				{
					$data['consignee'] = 0;	
				}
				if(isset( $_POST['classification3'] ))
				{
					$data['agent'] = 1;	
				}
				else
				{
					$data['agent'] = 0;	
				}
				if(isset( $_POST['classification4'] ))
				{
					$data['shippingline'] = 1;	
				}
				else
				{
					$data['shippingline'] = 0;	
				}
				if(isset( $_POST['classification5'] ))
				{
					$data['airline'] = 1;	
				}
				else
				{
					$data['airline'] = 0;	
				}
				if(isset( $_POST['classification6'] ))
				{
					$data['coloader'] = 1;	
				}
				else
				{
					$data['coloader'] = 0;	
				}
				$hasil=$this->mcustomer->update( $data );
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
		$this->xlog->record( 'update', 'mcustomer', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_customer', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mcustomer->delete( $_POST['id'] );
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
		$this->xlog->record( 'delete', 'mcustomer', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function cetak()
	{
	if(!in_array( 'read_customer', unserialize( $this->tank_auth->get_capabilities() ) )){		
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mcustomer', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){

			$pdf = new FPDF( 'L', 'mm', 'Legal' );
			$pdf->SetLeftMargin(2);
			$pdf->AliasNbPages();
			$pdf->AddPage();
			
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 300, 5, 'Master Customer', 0, 1, 'C' );
			
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );
			
			
			$pdf->Cell( 50, 5, 'Customer Type', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Customer Name', 1, 0, 'C' );
			$pdf->Cell( 50, 5, 'Classification', 1, 0, 'C' );
			$pdf->Cell( 150, 5, 'Address', 1, 1, 'C' );
			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}

			$mcustomer = $this->mcustomer->allcountry();
			$mcustomer = $this->mcustomer->allcity();
			if( ! empty( $mcustomer ) ){
				foreach( $mcustomer as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 50, 5, $acc['type'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['name'], 1, 0, 'C' );
					$klasifikasi="";
					if($acc['shipper']==1)
					{
						$klasifikasi.="Shipper,";
					}
					elseif($acc['consignee']==1)
					{
						$klasifikasi.="Consignee,";
					}
					elseif($acc['agent']==1)
					{
						$klasifikasi.="Agent,";
					}
					elseif($acc['shippingline']==1)
					{
						$klasifikasi.="Shippingline,";
					}
					elseif($acc['airline']==1)
					{
						$klasifikasi.="Airline,";
					}
					if($acc['coloader']==1)
					{
						$klasifikasi.="Coloader,";
					}
					$pdf->Cell( 50, 5, rtrim($klasifikasi, ","), 1, 0, 'C' );
					$pdf->Cell( 100, 5, $acc['address'], 1, 0, 'C' );
					$pdf->Cell( 50, 5, $acc['address1'], 1, 1, 'C' );

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

/* End of file customer.php */
/* Location: ./application/controllers/customer.php */
