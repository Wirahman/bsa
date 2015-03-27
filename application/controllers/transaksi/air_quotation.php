<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class air_quotation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'air_quot', 'air_quot' );
		$this->load->model( 'search', 'search' );
		$this->load->model( 'searchtrn', 'searchtrn' );
		$this->load->model( 'air_quot_transaksi', 'air_quot_transaksi' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
		$this->load->model( 'Mcommodity_class', 'mcommodity_class' );
		$this->load->model( 'Mfreight_term', 'mfreight_term' );
		$this->load->model( 'Msales', 'msales' );
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
			if( in_array( 'read_air_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'air_quotation', '' );
				$this->load->view('transaksi/air_quotation/index', $data);
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
	
	public function db_air_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$air_quot = $this->search->search_air_quot( $_POST[ 'key' ] );
				echo serialize( $air_quot );
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
				$air_quot = $this->search->search_air_quot( $_POST[ 'key' ], $_POST[ 'cond1' ] );
				echo serialize( $air_quot );
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
		
	public function db_read_kepala_commodity_class()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcommodity_class->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['comclass'];
				}else{
					echo '';
				}
			}
		}
	}
	
	public function db_commodity_class()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mcommodity_class = $this->search->search_commodity_class( $_POST['key'],true );
				echo serialize( $mcommodity_class );
			}
		}
	}

	public function load_commodity_class()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mcommodity_class', 'mcommodity_class' );
				$mcommodity_class = $this->mcommodity_class->read( $_POST['id'] );
				echo serialize( $mcommodity_class );
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
	public function db_read_kepala_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcustomer->read( $_POST['id'] );
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
				$mcustomer = $this->search->search_customer( $_POST['key'], 'airline' );
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
	
	public function db_read_kepala_freight_term()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mfreight_term->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['description'];
				}else{
					echo '';
				}
			}
		}
	}
	public function db_freight_term()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mfreight_term = $this->search->search_freight_term( $_POST['key'],true );
				echo serialize( $mfreight_term );
			}
		}
	}

	public function load_freight_term()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mfreight_term', 'mfreight_term' );
				$mfreight_term = $this->mfreight_term->read( $_POST['id'] );
				echo serialize( $mfreight_term );
			}
		}
	}
	
	public function db_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$msales = $this->search->search_sal( $_POST['key'],true );
				echo serialize( $msales );
			}
		}
	}

	public function load_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Msales', 'msales' );
				$msales = $this->msales->read( $_POST['id'] );
				echo serialize( $msales);
			}
		}
	}
	public function db_read_kepala_sales()
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
	
	public function db_br_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$br_air = $this->search->search_br_air( $_POST['key'],true );
				echo serialize( $br_air );
			}
		}
	}

	public function load_br_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Br_air', 'br_air' );
				$br_air = $this->br_air->read( $_POST['id'] );
				echo serialize( $br_air );
			}
		}
	}
	
	public function load_br_air_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Br_air_master', 'br_air_master' );
				$br_air_master = $this->br_air_master->read( $_POST['id'] );
				echo serialize( $br_air_master );
			}
		}
	}
	
	public function db_air_quot()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$air_quot = $this->search->search_air_quot( $_POST['key'],true );
				echo serialize( $air_quot );
			}
		}
	}

	public function load_air_quot()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'air_quot', 'air_quot' );
				$air_quot = $this->air_quot->read( $_POST['id'] );
				echo serialize( $air_quot);
			}
		}
	}
	
	//vendor_id, tgl_from , tgl_until , charges, portawal, portakhir
	public function load_selling_rate()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'vendor_id' ] ) ){
				$this->load->model( 'Air_quot_transaksi', 'air_quot_transaksi' );
				$air_quot_transaksi = $this->air_quot_transaksi->load_selling_rate( $_POST['vendor_id'], $_POST['tgl_from'], $_POST['tgl_until'], $_POST['charges'], $_POST['portawal'], $_POST['portakhir'] );
	////////////////////////////echo serialize ($air_quot_transaksi );
				echo json_encode( $air_quot_transaksi );
			}
		}
	}		
		// public function load_selling_rate()
	// {
		// if ($this->tank_auth->is_logged_in()) {
			// if( isset( $_POST[ 'tglawal' ] )
				// && isset( $_POST['tglakhir'])
				// && isset( $_POST['vendorid'])
				// && isset( $_POST['charges_code'])
				// && isset( $_POST['port_awal'])
				// && isset( $_POST['port_akhir'])
				// ){
				// $this->load->model( 'Air_quot_transaksi', 'air_quot_transaksi' );
				// $air_quot_transaksi = $this->air_quot_transaksi->load( $_POST['tglawal'], $_POST['tglakhir'], $_POST['vendorid'],$_POST['charges_code'],$_POST['port_awal'],$_POST['port_akhir']);
				//////////////////////////////echo serialize ($air_quot_transaksi );
				// echo json_encode( $air_quot_transaksi );
			// }
		// }
	// }
	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ] ) ){
				echo $this->air_quot->lastid( $_POST['tanggal'] );
			}
		}
	}
	
	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_air_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['quot_id'] )
					&& isset( $_POST['date'] )
					&& isset( $_POST['cus_id'])
					&& isset( $_POST['service'])
					&& isset( $_POST['attn'] )
					&& isset( $_POST['route'])
					&& isset( $_POST['re'] )
					&& isset( $_POST['commodity'])
					&& isset( $_POST['regards'] )
					&& isset( $_POST['freight'] )
					&& isset( $_POST['valid_from'] )
					&& isset( $_POST['sales_code'] )
					&& isset( $_POST['term_note'] )
					&& isset( $_POST['sales_note'] )
					&& isset( $_POST['manager_note'] )
					&& isset( $_POST['director_note'] )
				){
				
				$baris=1;
					if (empty($_POST['quot_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Quotation NO<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['date']) || !$this->emkl->cek_format_tanggal( $_POST['date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Customer ID<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['service'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Service Type<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['attn'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Attn<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['route'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Route Type<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['re'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Re<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['commodity'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Commodity Type <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['regards'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Regards<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['freight'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Freight<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['valid_from']) || !$this->emkl->cek_format_tanggal( $_POST['valid_from'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Valid Until must filled with format dd-MM-yyyy.';
					}elseif (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sales Code<strong>REQUIRED</strong>.';
					}else{
						$air_quot_transaksi = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-air-quotation' ]; $i++ ){
							if( isset( $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ] )
							){
							
							if(empty($_POST[ 'air_quotation' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'quot_id' => $_POST['quot_id']
									, 'charges_code' => $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ]
									, 'charges_desc' => $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ]
									, 'code_awal' => $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ]
									, 'unit_desc' => $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ]
									, 'currency_code' => $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ]
									, 'currency_desc' => $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ]
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] ) )
									, 'vendor_id' => $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ]
									, 'vendor_name' => $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ]
									, 'approval_number' => $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ]
								);
								$air_quot_transaksi[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'air_quotation', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['quot_id'] = $_POST['quot_id'];
					$data['date'] = $this->emkl->change_format($_POST['date']);
					$data['cus_id'] = $_POST['cus_id'];
					$data['service'] = $_POST['service'];
					$data['attn'] = $_POST['attn'];
					$data['route'] = $_POST['route'];
					$data['re'] = $_POST['re'];
					$data['commodity'] = $_POST['commodity'];
					$data['regards'] = $_POST['regards'];
					$data['freight'] = $_POST['freight'];
					$data['valid_from'] = $this->emkl->change_format($_POST['valid_from']);
					$data['sales_code'] = $_POST['sales_code'];
					$data['term_note'] = $_POST['term_note'];
					$data['sales_note'] = $_POST['sales_note'];
					$data['manager_note'] = $_POST['manager_note'];
					$data['director_note'] = $_POST['director_note'];
					$hasil=$this->air_quot->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->air_quot_transaksi->clean( $_POST['quot_id']);
						if (isset($air_quot_transaksi) && !empty($air_quot_transaksi)){
							if (!$this->air_quot_transaksi->create( $air_quot_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->air_quot->delete( $_POST['quot_id']);
							$this->air_quot_transaksi->clean( $_POST['quot_id']);
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
		$this->xlog->record( 'create', 'air_quotation', $resulttrnx );
		
		echo serialize($resulttrn);
	}
	
	
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['quot_id'] )
				&& ! empty( $_POST['quot_id'] )
			){
				$air_quot = $this->air_quot->read( $_POST['quot_id']);
				if( ! empty( $air_quot ) ){
					$air_quot['jadwal'] = $this->air_quot_transaksi->load( $_POST['quot_id']);
					if( ! empty( $air_quot['jadwal'] ) ){
						echo serialize( $air_quot );
					}
				}
			}
		}
	}
	
	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_air_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['quot_id'] )
					&& isset( $_POST['date'] )
					&& isset( $_POST['cus_id'] )
					&& isset( $_POST['service'] )
					&& isset( $_POST['attn'] )
					&& isset( $_POST['route'] )
					&& isset( $_POST['re'] )
					&& isset( $_POST['commodity'] )
					&& isset( $_POST['regards'] )
					&& isset( $_POST['freight'] )
					&& isset( $_POST['valid_from'] )
					&& isset( $_POST['sales_code'] )
					&& isset( $_POST['term_note'] )
					&& isset( $_POST['sales_note'] )
					&& isset( $_POST['manager_note'] )
					&& isset( $_POST['director_note'] )
				){
				$baris=1;
					if (empty($_POST['quot_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Quotation No <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['date']) || !$this->emkl->cek_format_tanggal( $_POST['date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must format<strong> dd-MM-yyyy.</strong>.';
					}elseif (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Customer Name<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['service'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Service <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['attn'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Attn <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['route'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Route <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['re'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Re <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['commodity'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Commodity <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['regards'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Regards <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['freight'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Freight <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['valid_from']) || !$this->emkl->cek_format_tanggal( $_POST['valid_from'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must format<strong> dd-MM-yyyy.</strong>.';
					}elseif (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sales Name <strong>REQUIRED</strong>.';
					}else{
						$air_quot_transaksi = array();
						$baris=1;						
						for( $i = 0; $i < $_POST[ 'baris-air-quotation' ]; $i++ ){
							if( isset( $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ] )
								&& isset( $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ] )
								&& ! empty( $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ] )
								){
								
								if (empty($_POST[ 'air_quotation' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'quot_id' => $_POST['quot_id']
									, 'charges_code' => $_POST[ 'air_quotation' ][ $i ][ 'charges_code' ]
									, 'charges_desc' => $_POST[ 'air_quotation' ][ $i ][ 'charges_desc' ]
									, 'code_awal' => $_POST[ 'air_quotation' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'air_quotation' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'air_quotation' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'air_quotation' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'air_quotation' ][ $i ][ 'unit_code' ]
									, 'unit_desc' => $_POST[ 'air_quotation' ][ $i ][ 'unit_desc' ]
									, 'currency_code' => $_POST[ 'air_quotation' ][ $i ][ 'currency_code' ]
									, 'currency_desc' => $_POST[ 'air_quotation' ][ $i ][ 'currency_desc' ]
									, 'vendor_id' => $_POST[ 'air_quotation' ][ $i ][ 'vendor_id' ]
									, 'vendor_name' => $_POST[ 'air_quotation' ][ $i ][ 'vendor_name' ]
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'air_quotation' ][ $i ][ 'selling_rate' ] ) )
									, 'approval_number' => $_POST[ 'air_quotation' ][ $i ][ 'approval_number' ]
								);
								$air_quot_transaksi[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'air_quotation', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['quot_id'] = $_POST['quot_id'];
					$data['date'] = $this->emkl->change_format($_POST['date']);
					$data['cus_id'] = $_POST['cus_id'];
					$data['service'] = $_POST['service'];
					$data['attn'] = $_POST['attn'];
					$data['route'] = $_POST['route'];
					$data['re'] = $_POST['re'];
					$data['commodity'] = $_POST['commodity'];
					$data['regards'] = $_POST['regards'];
					$data['freight'] = $_POST['freight'];
					$data['valid_from'] = $this->emkl->change_format($_POST['valid_from']);
					$data['sales_code'] = $_POST['sales_code'];
					$data['term_note'] = $_POST['term_note'];
					$data['sales_note'] = $_POST['sales_note'];
					$data['manager_note'] = $_POST['manager_note'];
					$data['director_note'] = $_POST['director_note'];
					$hasil=$this->air_quot->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->air_quot_transaksi->clean( $_POST['quot_id'] );
						if (isset($air_quot_transaksi) && !empty($air_quot_transaksi)){
							if (!$this->air_quot_transaksi->create( $air_quot_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->air_quot_transaksi->clean( $_POST['quot_id'] );
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
		$this->xlog->record( 'update', 'air_quotation', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'delete_air_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
	if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['quot_id'] )
				&& !empty( $_POST['quot_id'] )
			){
			if ($this->air_quot->delete( $_POST['quot_id'])){
				$this->air_quot_transaksi->clean( $_POST['quot_id']);
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
		$this->xlog->record( 'delete', 'air_quotation', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	//public function kepala
	public function kepala($baris,$no,$pdf,$kode,$hal)
	{
	if ((($no-1) % $baris===0) || ($no===1)){
		$pdf->AddPage(); 
		$pdf->SetAutoPageBreak(false, 0);
		$pdf->SetFont( 'Arial','B',12 );
		$pdf->Cell( 325, 6, 'Air Quotation', '', 1, 'C' );	
		$pdf->SetFont( 'Arial','',9 );
		$pdf->Cell( 25, 6, 'Quotation ID', 'TLRB', 0, 'L' );
		$pdf->Cell( 35, 6, 'Charges', 'TLRB', 0, 'C' );
		$pdf->Cell( 60, 6, 'Port Of Loading', 'TRB', 0, 'C' );
		$pdf->Cell( 60, 6, 'Port Destination', 'TRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Unit', 'TLRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Currency', 'TLRB', 0, 'C' );
		$pdf->Cell( 60, 6, 'Vendor Name', 'TRB', 0, 'C' );
		$pdf->Cell( 20, 6, 'Selling Rate', 'TLRB', 0, 'C' );
		$pdf->Cell( 35, 6, 'Approval No.', 'TLRB', 1, 'C' );
	}
	}
	
//public function pdf
	public function pdf()
	{
	// echo($_GET['quot_id']);
	// exit;
		if ($this->tank_auth->is_logged_in()) {
			
				$air_quot['jadwal'] = $this->air_quot_transaksi->all();
				$kode="";
			if (( !empty( $air_quot )) && (!empty( $air_quot['jadwal'] ) )){
				$this->load->library('fpdf17/fpdf');

				$baris=11;$no=1;$hal=1;$line=1;
				$pdf = new FPDF( 'L', 'mm', 'Legal'  );
				$pdf->SetDisplayMode('fullwidth');
				$pdf->AliasNbPages();
				$tmpquotid="";
				for( $i = 0; $i < sizeof( $air_quot['jadwal'] ); $i++ ){
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
				
				if($tmpquotid!= $air_quot['jadwal'][$i]['quot_id'])
					{
						$tmpquotid= $air_quot['jadwal'][$i]['quot_id'];
						$pdf->Cell( 25, 6, $tmpquotid, 'LRB', 0, 'C' );		
					}else{
					$pdf->Cell( 25, 6,'', 'LRB', 0, 'C' );
					}
					
				$pdf->SetFont( 'Arial','',8 );

				$pdf->Cell( 35, 6, $air_quot['jadwal'][$i]['charges_desc'], 'LRB', 0, 'C' );
				$pdf->Cell( 60, 6, $air_quot['jadwal'][$i]['port_awal'], 'LRB', 0, 'C' );
				$pdf->Cell( 60, 6, $air_quot['jadwal'][$i]['port_akhir'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $air_quot['jadwal'][$i]['unit_desc'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $air_quot['jadwal'][$i]['currency_desc'], 'LRB', 0, 'C' );
				$pdf->Cell( 60, 6, $air_quot['jadwal'][$i]['vendor_name'], 'LRB', 0, 'C' );
				$pdf->Cell( 20, 6, $air_quot['jadwal'][$i]['selling_rate'], 'LRB', 0, 'C' );
				$pdf->Cell( 35, 6, $air_quot['jadwal'][$i]['approval_number'], 'LRB', 1, 'C' );
				$line++;
				$no++;
				
				}
				$pdf->Output();
			}
		

		}
	}	
}
