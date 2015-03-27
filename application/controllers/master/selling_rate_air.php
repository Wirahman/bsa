<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selling_rate_air extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Sr_air', 'sr_air' );
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Sr_air_master', 'sr_air_master' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
		date_default_timezone_set('Asia/Jakarta');
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
			if( in_array( 'read_selling_rate_air', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'selling_rate_air', '' );
				$this->load->view('master/selling_rate_air/index', $data);
			}else{
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
	
	public function db_selling_rate_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sr_air = $this->search->search_sr_air( $_POST[ 'key' ] );
				echo serialize( $sr_air );
			}
		}
	}
	
	
	public function db_jadwal()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] )
				&& isset( $_POST[ 'cond1' ] )
				&& ! empty( $_POST[ 'cond1' ] )
			){
				$sr_air = $this->search->search_sr_air( $_POST[ 'key' ], $_POST[ 'cond1' ] );
				echo serialize( $sr_air );
			}
		}
	}
	
	public function db_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mcharges = $this->search->search_chra( $_POST['key'],true );
				echo serialize( $mcharges );
			}
		}
	}
	
	
	public function load_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mcharges', 'mcharges' );
				$mcharges = $this->mcharges->read( $_POST['id'] );
				echo serialize( $mcharges);
			}
		}
	}
	
	public function db_airport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mairport = $this->search->search_airport( $_POST['key'],true );
				echo serialize( $mairport );
			}
		}
	}

	public function load_airport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mairport', 'mairport' );
				$mairport = $this->mairport->read( $_POST['id'] );
				echo serialize( $mairport);
			}
		}
	}
	
	public function db_sr_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sr_air = $this->search->search_sr_air( $_POST['key'],true );
				echo serialize( $sr_air );
			}
		}
	}

	public function load_sr_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'sr_air', 'sr_air' );
				$sr_air = $this->sr_air->read( $_POST['id'] );
				echo serialize( $sr_air);
			}
		}
	}
	public function db_unit()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$munit = $this->search->search_unit( $_POST['key'],true );
				echo serialize( $munit );
			}
		}
	}

	public function load_unit()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Munit', 'munit' );
				$munit = $this->munit->read( $_POST['id'] );
				echo serialize( $munit );
			}
		}
	}
	
	public function db_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mcurrency = $this->search->search_cur( $_POST['key'],true );
				echo serialize( $mcurrency );
			}
		}
	}

	public function load_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mcurrency', 'mcurrency' );
				$mcurrency = $this->mcurrency->read( $_POST['id'] );
				echo serialize( $mcurrency );
			}
		}
	}
	
	public function load_buying_rate()
	{
		if($this->tank_auth->is_logged_in()){
			if( isset( $_POST ['cus_id'] ) ){
				$this->load->model( 'Sr_air_master', 'sr_air_master' );
				$sr_air_master = $this->sr_air_master->load_buying_rate( $_POST['cus_id'], $_POST['tgl_from'], $_POST['tgl_until'], $_POST['charges'], $_POST['portawal'], $_POST['portakhir']);
				//echo serialize ($sr_air_master);
				echo json_encode( $sr_air_master );
			}
		}
	}		
			
	
	public function db_read_kepala_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcustomer->read( $_POST['id'], 'shipper' );
				if (!empty($hasil)){
					echo $hasil['name'];
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
				$mcustomer = $this->search->search_customer( $_POST['key'],true );
				echo serialize( $mcustomer );
			}
		}
	}

	public function load_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mcustomer', 'mcustomer' );
				$mcustomer = $this->mcustomer->read( $_POST['id'] );
				echo serialize( $mcustomer );
			}
		}
	}
	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				echo $this->sr_air->lastid( $_POST['id'] );
			}
		}
	}
	
	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_selling_rate_air', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['cus_id'] )
					&& isset( $_POST['company_name'] )
				){
				//$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Customer ID<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['company_name'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Company Name<strong> REQUIRED</strong>.';
					}else{
						$sr_air_master = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-selling-rate-air' ]; $i++ ){
							if( isset( $_POST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] )
								&& ! empty( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )
								&& ! empty( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] )
							){
							if(empty($_POST[ 'selling_rate_air' ][ $i ][ 'date_from' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'cus_id' => $_POST['cus_id']
									, 'date_from' => $this->emkl-> change_format ($_POST [ 'selling_rate_air' ][ $i ][ 'date_from' ])
									// , 'date_from' => $this->emkl-> formattanggal ($_POST [ 'selling_rate_air' ][ $i ][ 'date_from' ])
									, 'date_until' =>$this->emkl-> change_format ( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ])
									// , 'date_until' =>$this->emkl-> formattanggal ( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ])
									, 'charges_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ]
									, 'code_awal' => $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ]
									, 'unit_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ]
									, 'currency_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ]
									, 'currency_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ]
									, 'buying_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] ) )
									, 'base_margin' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] ) )
									, 'base_rate' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] ) )
									, 'additional_margin' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] ) )
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] ) )
								);
								$sr_air_master[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong> REQUIRED</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'selling_rate_air', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['cus_id'] = $_POST['cus_id'];
					$data['company_name'] = $_POST['company_name'];
					$hasil=$this->sr_air->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->sr_air_master->clean( $_POST['cus_id']);
						if (isset($sr_air_master) && !empty($sr_air_master)){
							if (!$this->sr_air_master->create( $sr_air_master )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->sr_air->delete( $_POST['cus_id']);
							$this->sr_air_master->clean( $_POST['cus_id']);
						}
						}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Header Could Not be Saved. There is a Data Error or Server';
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
		$this->xlog->record( 'create', 'selling_rate_air', $resulttrnx );
		
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['cus_id'] )
				&& ! empty( $_POST['cus_id'] )
			){
				$sr_air = $this->sr_air->read( $_POST['cus_id']);
				if( ! empty( $sr_air ) ){
					$sr_air['jadwal'] = $this->sr_air_master->load( $_POST['cus_id']);
					if( ! empty( $sr_air['jadwal'] ) ){
						echo serialize( $sr_air );
					}
				}
			}
		}
	}
	
	
	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_selling_rate_air', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['cus_id'] )
					&& isset( $_POST['company_name'] )
				){
				//$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Vendor ID <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['company_name'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Name <strong> REQUIRED</strong>.';
					}else{
						$sr_air_master = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-selling-rate-air' ]; $i++ ){
							if( isset( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )
								&& isset( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] )
								&& isset( $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] )
								&& ! empty( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )
								&& ! empty( $_REQUEST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] )
								&& ! empty( $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] )
							){
							
							if(empty($_POST[ 'selling_rate_air' ][ $i ][ 'date_from' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'selling_rate_air' ][ $i ][ 'date_from' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'cus_id' => $_POST['cus_id']
									, 'date_from' => $this->emkl-> change_format ($_POST [ 'selling_rate_air' ][ $i ][ 'date_from' ])
									// , 'date_from' => $this->emkl-> formattanggal ($_POST [ 'selling_rate_air' ][ $i ][ 'date_from' ])
									, 'date_until' =>$this->emkl-> change_format ( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ])
									// , 'date_until' =>$this->emkl-> formattanggal ( $_POST[ 'selling_rate_air' ][ $i ][ 'date_until' ])
									, 'charges_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'charges_description' ]
									, 'code_awal' => $_POST[ 'selling_rate_air' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'selling_rate_air' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'selling_rate_air' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'selling_rate_air' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'unit_code' ]
									, 'unit_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'unit_description' ]
									, 'currency_code' => $_POST[ 'selling_rate_air' ][ $i ][ 'currency_code' ]
									, 'currency_description' => $_POST[ 'selling_rate_air' ][ $i ][ 'currency_description' ]
									, 'buying_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'buying_rate' ] ) )
									, 'base_margin' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'base_margin' ] ) )
									, 'base_rate' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'base_rate' ] ) )
									, 'additional_margin' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'additional_margin' ] ) )
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'selling_rate_air' ][ $i ][ 'selling_rate' ] ) )
								);
								$sr_air_master[] = $jadwal;
							}
						}
					}
					
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong> REQUIRED</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'selling_rate_air', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['cus_id'] = $_POST['cus_id'];
					$data['company_name'] = $_POST['company_name'];
					$hasil=$this->sr_air->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->sr_air_master->clean( $_POST['cus_id'] );
						if (isset($sr_air_master) && !empty($sr_air_master)){
							if (!$this->sr_air_master->create( $sr_air_master )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->sr_air_master->clean( $_POST['cus_id'] );
						}
						}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Header Could Not be Update. There is a Data Error or Server.';
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
		$this->xlog->record( 'update', 'selling_rate_air', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'delete_selling_rate_air', unserialize( $this->tank_auth->get_capabilities() ) )){
	if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['cus_id'] )
				&& !empty( $_POST['cus_id'] )
			){
			if ($this->sr_air->delete( $_POST['cus_id'])){
				$this->sr_air_master->clean( $_POST['cus_id']);
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Data Failed To Be removed. There Is a Data Error or Server.';
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
		$resulttrnx['isi']=$_POST;
		$this->xlog->record( 'delete', 'selling_rate_air', $resulttrnx );
		echo serialize($resulttrn);
	}
	//public function kepala
	public function kepala($baris,$no,$pdf,$kode,$hal)
	{
	if ((($no-1) % $baris===0) || ($no===1)){
		$pdf->AddPage(); 
		$pdf->SetAutoPageBreak(false, 0);
		$pdf->SetFont( 'Arial','B',12 );
		$pdf->Cell( 325, 6, 'Selling Rate (Air)', '', 1, 'C' );	
		$pdf->SetFont( 'Arial','B',9 );
		$pdf->Cell( 25, 6, 'Vendor ID', 'TLRB', 0, 'C' );
		$pdf->Cell( 35, 6, 'Charges', 'TLRB', 0, 'C' );
		$pdf->Cell( 60, 6, 'Port Of Loading', 'TRB', 0, 'C' );
		$pdf->Cell( 60, 6, 'Port Destination', 'TRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Unit', 'TLRB', 0, 'C' );
		$pdf->Cell( 35, 6, 'Currency', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Buying Rate', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Base Margin', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Base Rate', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Add.Margin', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Selling Rate', 'TRB', 1, 'C' );
		

	}
	}
	
	//public function pdf
	public function pdf()
	{
	// echo($_GET['cus_id']);
	// exit;
		if ($this->tank_auth->is_logged_in()) {

			
				$sr_air['jadwal'] = $this->sr_air_master->all();
			$kode="";
			if (!empty( $sr_air['jadwal'] ) ){
				$this->load->library('fpdf17/fpdf');

				$baris=11;$no=1;$hal=1;$line=1;
				$pdf = new FPDF( 'L', 'mm', 'Legal'  );
				$pdf->SetDisplayMode('fullwidth');
				$pdf->AliasNbPages();
				$tmpkode="";
				for( $i = 0; $i < sizeof( $sr_air['jadwal'] ); $i++ ){
				if ((($no-1) % $baris===0)){
					$this->kepala($baris,$no,$pdf,$kode,$hal);
					$line++;
					$line++;
					$line++;
					$line++;
					if ($no !==1){
					$line++;
					}
					$hal++;
				}
				
				if($tmpkode!= $sr_air['jadwal'][$i]['cus_id'])
					{
						$tmpkode= $sr_air['jadwal'][$i]['cus_id'];
						$pdf->Cell( 25, 6, $tmpkode, 'LRB', 0, 'C' );		
					}else{
					$pdf->Cell( 25, 6,'', 'LRB', 0, 'C' );
					}
					
				$pdf->SetFont( 'Arial','',8 );

				$pdf->Cell( 35, 6, $sr_air['jadwal'][$i]['charges_description'], 'LRB', 0, 'C' );
				$pdf->Cell( 60, 6, $sr_air['jadwal'][$i]['port_awal'], 'LRB', 0, 'C' );
				$pdf->Cell( 60, 6, $sr_air['jadwal'][$i]['port_akhir'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['unit_description'], 'LRB', 0, 'C' );
				$pdf->Cell( 35, 6, $sr_air['jadwal'][$i]['currency_description'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['buying_rate'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['base_margin'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['base_rate'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['additional_margin'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $sr_air['jadwal'][$i]['selling_rate'], 'RB', 1, 'C' );
				$line++;
				$no++;
				
				}
				$pdf->Output();
			}
		

		}
	}	
}