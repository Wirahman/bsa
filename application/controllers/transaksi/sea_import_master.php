<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sea_import_master extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Tbooking_cargo_sea', 'tbooking_cargo_sea' );
		$this->load->model( 'Tsea_import_master', 'tsea_import_master' );
		$this->load->model( 'Tsea_import_master_vessel', 'tsea_import_master_vessel' );
		$this->load->model( 'Tsea_import_master_container', 'tsea_import_master_container' );
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
		$this->load->model( 'Mcommodity', 'mcommodity' );
		$this->load->model( 'Mseaport', 'mseaport' );
		$this->load->model( 'Mvessel', 'mvessel' );
		$this->load->model( 'Mfreight_term', 'mfreight_term' );
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		if( !$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} else {
			$data['user_id'] = $this->tank_auth->get_user_id();
			$data['username'] = $this->tank_auth->get_username();
			$data['capabilities'] =$this->tank_auth->get_capabilities();
			$data['role'] = $this->tank_auth->get_role();

			$this->load->view('header');
			$this->load->view('menu', $data);
			if( in_array( 'read_sea_import_master', unserialize( $this->tank_auth->get_capabilities()))){
				$this->xlog->record( 'open', 'Sea_import_master', '');
				$this->load->view('transaksi/sea_import_master/index', $data);
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
			$data['user_id'] 	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('cari/index');
		}
		$this->load->view('footer');
	}


	public function db_read_all_weight()
	{
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model( 'Munit', 'munit' );
			$weight_type = $this->munit->all();
			if(!empty($weight_type))
			{
				echo serialize($weight_type);
			}
			else
			{
				echo "";
			}

		}	
	}

	public function db_read_commodity()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mcommodity->commodity_name( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil;
				}else{
					echo '';
				}
			}
		}
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

	public function db_freight_term()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mfreight_term = $this->search->search_freight_term( $_POST['key']);
				echo serialize( $mfreight_term );
			}
		}
	}
	public function db_read_freight_term()
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

	public function db_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcustomer = $this->search->search_customer( $_POST['key'], $_POST['cond1']);
				echo serialize( $mcustomer );
			}
		}
	}
	

	public function db_read_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mcustomer', $_POST['id'] );
				$mcompany = $this->mcustomer->read( $_POST['id'],  $_POST['cond'] );
				if( !empty( $mcompany ) ){
					echo serialize( $mcompany );
				}
			}
		}
	}

	public function db_seaport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mseaport = $this->search->search_seacount( $_POST['key']);
				$mseaport = $this->search->search_seareg( $_POST['key']);
				echo serialize( $mseaport );
			}
		}
	}
	

	public function db_read_port()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mseaport->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['port_name'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_vessel()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mvessel = $this->search->search_ves( $_POST['key']);
				echo serialize( $mvessel );
			}
		}
	}

	public function db_read_vessel()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mvessel->read( $_POST['id'] );
				if (!empty($hasil)){
					echo serialize( $hasil );
				}else{
					echo '';
				}
			}
		}
	}

	public function db_read_carrier()
	{
		if($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])
				&& ! empty( $_POST['id'])
				){
				$this->load->model('Tcarrier_booking_sea', 'tcarrier_booking_sea');
				$hasil=$this->tcarrier_booking_sea->read( $_POST['id']);
				if (!empty($hasil)){
					echo serialize($hasil);
				}else{
					echo '';
				}
			}
		}
	}

	public function db_carrier_booking_sea()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$hasil = $this->search->search_carrier_booking_sea( $_POST['key']);
				echo serialize( $hasil );
			}
		}
	}


	//get OBL_no dari Booking_cargo
	public function db_read_OBL()
	{
		if($this->tank_auth->is_logged_in()){
			if( isset($_POST['id'])){
				$hasil=$this->tbooking_cargo_sea->obl_no( $_POST['id']);
				if( !empty($hasil)){
					echo $hasil;
				} else {
					echo '';
				}
			}
		}
	}

	public function db_obl_no()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset($_POST[ 'key'])){
				$this->load->model( 'Search', 'search');
				$tbooking_cargo_sea = $this->search->search_booking_cargo_sea( $_POST['key']);
				echo serialize( $tbooking_cargo_sea );
			}
		}
	}

	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ] ) ){
				echo $this->tsea_import_master->lastid( $_POST['tanggal'] );
			}
		}
	}

	public function db_sea_import_master()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$import = $this->search->search_sea_import_master( $_POST['key']);
				echo serialize($import);
			}
		}
	}

	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_sea_import_master', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['OBL_no'] )
					&& isset( $_POST['date'] )
					&& isset( $_POST['total_shipment'])
				){
					$baris=1;
					if (empty($_POST['OBL_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='OBL Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['date']) || !$this->emkl->cek_format_tanggal( $_POST['date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must be in format dd-MM-yyyy.';
					}else{
						$sea_import_master_vessel = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-vessel' ]; $i++ ){
							if( isset( $_POST[ 'vessel' ][ $i ][ 'code' ] )
								&& isset( $_POST[ 'vessel' ][ $i ][ 'name' ] )
								&& isset( $_POST[ 'vessel' ][ $i ][ 'tipe' ] )
								&& isset( $_POST[ 'vessel' ][ $i ][ 'voyage' ] )
								&& isset( $_POST[ 'vessel' ][ $i ][ 'etd' ] )
								&& isset( $_POST[ 'vessel' ][ $i ][ 'eta' ] )
								&& ! empty( $_POST[ 'vessel' ][ $i ][ 'code' ] )
							){
								
								if (empty($_POST[ 'vessel' ][ $i ][ 'code' ])){
								}elseif (empty($_POST[ 'vessel' ][ $i ][ 'etd' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'vessel' ][ $i ][ 'etd' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETD in line '. $baris .'  <strong> MUST </strong> filled with format dd-MM-yyyy.';
								}
								elseif (empty($_POST[ 'vessel' ][ $i ][ 'eta' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'vessel' ][ $i ][ 'eta' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETA in line '. $baris .' <strong> MUST </strong> filled with format dd-MM-yyyy';
								}else{
									$baris++;
								}
								$grid_vessel = array(
									'OBL_no' => $_POST['OBL_no']
									, 'vessel_code' => $_POST[ 'vessel' ][ $i ][ 'code' ]
									, 'vessel_name' => $_POST[ 'vessel' ][ $i ][ 'name' ]
									, 'vessel_type' => $_POST[ 'vessel' ][ $i ][ 'tipe' ]
									, 'voyage_code' => $_POST[ 'vessel' ][ $i ][ 'voyage' ]
									, 'etd' => $this->emkl->change_format( $_POST[ 'vessel' ][ $i ][ 'etd' ])
									, 'eta' => $this->emkl->change_format( $_POST[ 'vessel' ][ $i ][ 'eta' ])
								);
								$sea_import_master_vessel[] = $grid_vessel;
							}
						}
						$sea_import_master_container = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-container' ]; $i++ ){
							if( isset( $_POST[ 'container' ][ $i ][ 'code' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'size' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'sealno' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'grossweight' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'netweight' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'measurement' ] )
								&& isset( $_POST[ 'container' ][ $i ][ 'description' ] )
								&& ! empty( $_POST[ 'container' ][ $i ][ 'code' ] )
							){
								
								if (empty($_POST[ 'container' ][ $i ][ 'code' ])){
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'grossweight' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'container' ][ $i ][ 'grossweight' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Gross weight  baris ke '. $baris .'  <strong>HARUS</strong> angka.';
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'netweight' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'container' ][ $i ][ 'netweight' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Net weight  baris ke '. $baris .'  <strong>HARUS</strong> angka.';
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'measurement' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'container' ][ $i ][ 'measurement' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Measurement  baris ke '. $baris .'  <strong>HARUS</strong> angka.';
								}else{
									$baris++;
								}
								$grid_container = array(

									'OBL_no' => $_POST['OBL_no']
									, 'container_code' => $_POST[ 'container' ][ $i ][ 'code' ]
									, 'size' => $_POST[ 'container' ][ $i ][ 'size' ]
									, 'seal_no' => $_POST[ 'container' ][ $i ][ 'sealno' ]
									, 'gross_weight' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'grossweight' ] ) )
									, 'net_weight' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'netweight' ] ) )
									, 'measurement' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'measurement' ] ) )
									, 'description' => $_POST[ 'container' ][ $i ][ 'description' ]
								);
								$sea_import_master_container[] = $grid_container;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Vessel or Container grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'sea_import_master', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['OBL_no'] = $_POST['OBL_no'];
					$data['date'] = $this->emkl->change_format( $_POST['date'] );
					$data['total_shipment'] = $_POST['total_shipment'];
					$data['shipper_id'] = $_POST['shipper_id'];
					$data['shipper_description'] = $_POST['keterangan_shipper'];
					$data['cnee_id'] = $_POST['cnee_id'];
					$data['cnee_description'] = $_POST['keterangan_cnee'];
					$data['notify_id'] = $_POST['notify_id'];
					$data['notify_description'] = $_POST['keterangan_notify'];
					$data['agent_id'] = $_POST['agent_id'];
					$data['agent_description'] = $_POST['keterangan_agent'];
					$data['port_loading_code'] = $_POST['port_kode_loading'];
					$data['port_loading_description'] = $_POST['nama_port_loading'];
					$data['port_departure_code'] = $_POST['port_kode_departure'];
					$data['port_departure_description'] = $_POST['nama_port_departure'];
					$data['port_discharge_code'] = $_POST['port_kode_discharge'];
					$data['port_discharge_description'] = $_POST['nama_port_discharge'];
					$data['port_destination_code'] = $_POST['port_kode_destination'];
					$data['port_destination_description'] = $_POST['nama_port_destination'];
					$data['stuffing_date'] = $this->emkl->change_format( $_POST['stuffing_date'] );
					$data['onboard_date'] = $this->emkl->change_format( $_POST['onboard_date'] );
					$data['shipment_etd'] = $this->emkl->change_format( $_POST['shipment_ETD'] );
					$data['shipment_eta'] = $this->emkl->change_format( $_POST['shipment_ETA'] );
					$data['carrier_code'] = $_POST['carrier_code'];
					$data['carrier_description'] = $_POST['carrier_description'];
					$data['packages_number'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['packages_number'] ) );
					$data['packages_type'] = $_POST['packages_type'];
					$data['gross_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
					$data['gross_weight_type'] = $_POST['gross_type'];
					$data['net_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['net_weight'] ) );
					$data['net_weight_type'] = $_POST['net_type'];
					$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement_number'] ) );
					$data['measurement_type'] = $_POST['measurement_type'];
					$data['commodity_code'] = $_POST['commodity_code'];
					$data['commodity_description'] = $_POST['commodity_name'];
					$data['cargo_insurance'] = $_POST['cargo_insurance'];
					$data['service_type'] = $_POST['service_type'];
					$data['service_type2'] = $_POST['service_type2'];
					$data['freight_term_code'] = $_POST['freight_term_code'];
					$data['freight_term_description'] = $_POST['freight_term_name'];
					$data['freight_payable_at'] = $_POST['freight_payable_at'];
					$data['original_bl'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['original_BL'] ) );
					$data['order_status'] = $_POST['order_status'];
					$data['remarks'] = $_POST['remarks'];
					$data['marks_number'] = $_POST['marksnumber'];
					$data['packages_description'] = $_POST['description_packages'];
					$data['created'] = $this->emkl->waktu_saat_ini();
					$data['creator'] = $this->tank_auth->get_user_id();
					$hasil=$this->tsea_import_master->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->tsea_import_master_vessel->clean( $_POST['OBL_no']);
						if (isset($sea_import_master_vessel) && !empty($sea_import_master_vessel)){
							if (!$this->tsea_import_master_vessel->create( $sea_import_master_vessel)){
								$hasil=false;
							}
						}
						if (isset($sea_import_master_container) && !empty($sea_import_master_container )){
							if (!$this->tsea_import_master_container->create( $sea_import_master_container )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->tsea_import_master->delete( $_POST['order_no']);
							$this->tsea_import_master_vessel->clean( $_POST['order_no'] );
							$this->tsea_import_master_container->clean( $_POST['order_no'] );
						}
					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Header Could Not be Saved. There is a Data Error or Server.';
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
		$this->xlog->record( 'create', 'sea_import_master', $resulttrnx );
		
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$sea_import_master = $this->tsea_import_master->read( $_POST['id']);
			if( ! empty( $sea_import_master )){
				$sea_import_master['vessel'] = $this->tsea_import_master_vessel->load( $_POST['id']);
				$sea_import_master['container'] = $this->tsea_import_master_container->load( $_POST['id']);
				echo serialize( $sea_import_master);
			}
			}
		}
	}

	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_sea_import_master', unserialize( $this->tank_auth->get_capabilities()))){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()){
				if ( isset( $_POST['OBL_no'])
					&& isset( $_POST['date'])
					&& isset( $_POST['total_shipment'])
					){
					$baris=1;
				if (empty($_POST['OBL_no'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='OBL Number <strong> MUST </strong> be filled.';
				}elseif (empty($_POST['date']) || !$this->emkl->cek_format_tanggal( $_POST['date'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Date <strong> MUST </strong> format with dd-MM-yyyy.';
				}elseif (empty($_POST['total_shipment'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Total Shipment <strong> MUST </strong> be filled.';
				}else{
					$sea_import_master_vessel = array();
					$baris=1;
					for( $i = 0; $i < $_POST[ 'baris-vessel' ]; $i++ ){
						if( isset( $_POST[ 'vessel' ][ $i ][ 'code' ] )
							&& isset( $_POST[ 'vessel' ][ $i ][ 'name' ] )
							&& isset( $_POST[ 'vessel' ][ $i ][ 'tipe' ] )
							&& isset( $_POST[ 'vessel' ][ $i ][ 'voyage' ] )
							&& isset( $_POST[ 'vessel' ][ $i ][ 'etd' ] )
							&& isset( $_POST[ 'vessel' ][ $i ][ 'eta' ] )
							&& ! empty( $_POST[ 'vessel' ][ $i ][ 'code' ] )
						){
							if (empty($_POST[ 'vessel' ][ $i ][ 'code' ])){
							}elseif (empty($_POST[ 'vessel' ][ $i ][ 'name' ])){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Name in line'. $baris .' <strong> MUST </strong> be filled.';
							}elseif (empty($_POST[ 'vessel' ][ $i ][ 'tipe' ] )){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Type in line'. $baris .' <strong> MUST </strong> be filled.';
							}elseif (empty($_POST[ 'vessel' ][ $i ][ 'voyage' ])){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Voyage in line'. $baris .' <strong> MUST </strong> be filled.';
							}elseif (empty($_POST[ 'vessel' ][ $i ][ 'etd' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'vessel' ][ $i ][ 'etd' ])){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Tanggal baris ke '. $baris .'  harus diisi dengan format dd-MM-yyyy.';
							}
							elseif (empty($_POST[ 'vessel' ][ $i ][ 'eta' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'vessel' ][ $i ][ 'eta' ])){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Tanggal baris ke '. $baris .' harus diisi dengan format dd-MM-yyyy.';
							}else{
								$baris++;
							}
							$grid_vessel = array(
								'OBL_no' => $_POST['OBL_no']
								, 'vessel_code' => $_POST[ 'vessel' ][ $i ][ 'code' ]
								, 'vessel_name' => $_POST[ 'vessel' ][ $i ][ 'name' ]
								, 'vessel_type' => $_POST[ 'vessel' ][ $i ][ 'tipe' ]
								, 'voyage_code' => $_POST[ 'vessel' ][ $i ][ 'voyage' ]
								, 'etd' =>  $this->emkl->change_format( $_POST[ 'vessel' ][ $i ][ 'etd' ])
								, 'eta' => $this->emkl->change_format( $_POST[ 'vessel' ][ $i ][ 'eta' ])
							);
							$sea_import_master_vessel[] = $grid_vessel;
					}
				}
				if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Vessel or Container Grid <strong> MUST </strong> be filled.';
				}
				$sea_import_master_container = array();
				$baris=1;
				for( $i = 0; $i < $_POST[ 'baris-container' ]; $i++ ){
					if( isset( $_POST[ 'container' ][ $i ][ 'code' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'size' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'sealno' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'grossweight' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'netweight' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'measurement' ])
						&& isset( $_POST[ 'container' ][ $i ][ 'description' ])
						){
						if (empty($_POST[ 'container' ][ $i ][ 'code' ])){

						}elseif (empty($_POST[ 'container' ][ $i ][ 'size' ])){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Size in line '. $baris .' <strong> MUST </strong> be filled.';
						}elseif (empty($_POST[ 'container' ][ $i ][ 'sealno' ])){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Seal Number in line '. $baris .' <strong> MUST </strong> be filled.';
						}elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'grossweight' ])) || !is_numeric(floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'container' ][ $i ][ 'grossweight' ])))){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Gross Weight in line'. $baris .' <strong> MUST </strong filled with Numeric format';
						}elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'netweight' ])) || !is_numeric(floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'container' ][ $i ][ 'netweight' ])))){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Nett Weight in line'. $baris .' <strong> MUST </strong filled with Numeric format';
						}elseif (!is_numeric( str_replace(",","", $_POST[ 'container' ][ $i ][ 'measurement' ])) || !is_numeric(floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'container' ][ $i ][ 'measurement' ])))){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Measurement in line'. $baris .' <strong> MUST </strong filled with Numeric format';
						}elseif (empty($_POST[ 'container' ][ $i ][ 'description' ])){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Description in line '. $baris .' <strong> MUST </strong> be filled.';
						}else{
							$baris++;
						}
						$grid_container = array(
							'OBL_no' => $_POST[ 'OBL_no' ]
							, 'container_code' => $_POST[ 'container' ][ $i ][ 'code' ]
							, 'size' => $_POST[ 'container' ][ $i ][ 'size' ]
							, 'seal_no' => $_POST[ 'container' ][ $i ][ 'sealno' ]
							, 'gross_weight' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'grossweight' ] ) )
							, 'net_weight' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'netweight' ] ) )
							, 'measurement' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'container' ][ $i ][ 'measurement' ] ) )
							, 'description' => $_POST[ 'container' ][ $i ][ 'description' ]
							);
						$sea_import_master_container[] = $grid_container;
					}
				}
				}
				if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Vessel or Container Grid <strong> MUST </strong> be filled.';
				}
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'sea_import_master', $resulttrn);
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$_POST;
				$data['OBL_no'] = $_POST['OBL_no'];
				$data['date'] = $this->emkl->change_format( $_POST['date']);
				$data['total_shipment'] = $_POST['total_shipment'];
				$data['shipper_id'] = $_POST['shipper_id'];
				$data['shipper_description'] = $_POST['keterangan_shipper'];
				$data['cnee_id'] = $_POST['cnee_id'];
				$data['cnee_description'] = $_POST['keterangan_cnee'];
				$data['notify_id'] = $_POST['notify_id'];
				$data['notify_description'] = $_POST['keterangan_notify'];
				$data['agent_id'] = $_POST['agent_id'];
				$data['agent_description'] = $_POST['keterangan_agent'];
				$data['port_loading_code'] = $_POST['port_kode_loading'];
				$data['port_loading_description'] = $_POST['nama_port_loading'];
				$data['port_departure_code'] = $_POST['port_kode_departure'];
				$data['port_departure_description'] = $_POST['nama_port_departure'];
				$data['port_discharge_code'] = $_POST['port_kode_discharge'];
				$data['port_discharge_description'] = $_POST['nama_port_discharge'];
				$data['port_destination_code'] = $_POST['port_kode_destination'];
				$data['port_destination_description'] = $_POST['nama_port_destination'];
				$data['stuffing_date'] = $this->emkl->change_format( $_POST['stuffing_date'] );
				$data['onboard_date'] = $this->emkl->change_format( $_POST['onboard_date'] );
				$data['shipment_etd'] = $this->emkl->change_format( $_POST['shipment_ETD'] );
				$data['shipment_eta'] = $this->emkl->change_format( $_POST['shipment_ETA'] );
				$data['carrier_code'] = $_POST['carrier_code'];
				$data['carrier_description'] = $_POST['carrier_description'];
				$data['packages_number'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['packages_number'] ) );
				$data['packages_type'] = $_POST['packages_type'];
				$data['gross_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
				$data['gross_weight_type'] = $_POST['gross_type'];
				$data['net_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['net_weight'] ) );
				$data['net_weight_type'] = $_POST['net_type'];
				$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement_number'] ) );
				$data['measurement_type'] = $_POST['measurement_type'];
				$data['commodity_code'] = $_POST['commodity_code'];
				$data['commodity_description'] = $_POST['commodity_name'];
				$data['warehouse'] = $_POST['warehouse'];
				$data['cargo_insurance'] = $_POST['cargo_insurance'];
				$data['service_type'] = $_POST['service_type'];
				$data['service_type2'] = $_POST['service_type2'];
				$data['freight_term_code'] = $_POST['freight_term_code'];
				$data['freight_term_description'] = $_POST['freight_term_name'];
				$data['freight_payable_at'] = $_POST['freight_payable_at'];
				$data['original_bl'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['original_BL'] ) );
				$data['order_status'] = $_POST['order_status'];
				$data['remarks'] = $_POST['remarks'];
				$data['marks_number'] = $_POST['marksnumber'];
				$data['packages_description'] = $_POST['description_packages'];
				$data['modified'] = $this->emkl->waktu_saat_ini();
				$data['modifier'] = $this->tank_auth->get_user_id();
				$hasil=$this->tsea_import_master->update( $data );
				if ($hasil=='1'){
					$hasil=true;
					$this->tsea_import_master_vessel->clean( $_POST['OBL_no']);
					$this->tsea_import_master_container->clean( $_POST['OBL_no']);
					if (isset($sea_import_master_vessel) && !empty($sea_import_master_vessel)){
						if (!$this->tsea_import_master_vessel->create( $sea_import_master_vessel )){
							$hasil=false;
						}
					}
					if (isset($sea_import_master_container) && !empty( $sea_import_master_container)){
						if (!$this->tsea_import_master_container->create( $sea_import_master_container )){
							$hasil=false;
						}
					}
					if ($hasil){

					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
						$this->tsea_import_master_vessel->clean( $_POST['OBL_no']);
						$this->tsea_import_master_container->clean( $_POST['OBL_no']);
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
			$resulttrn['ket']='You are not Logged in or Have Logged Out.';
		}
	}else{
		$resulttrn['status']='Error';
		$resulttrn['ket']='You do not Have Access to The Data Store';
	}
	$resulttrnx['status']=$resulttrn['status'];
	$resulttrnx['ket']=$resulttrn['ket'];
	$this->xlog->record( 'update', 'sea_import_master', $resulttrnx);
	echo serialize($resulttrnx);
}

	public function db_delete()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'delete_sea_import_master', unserialize( $this->tank_auth->get_capabilities()))){

			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id'])
					&& !empty( $_POST['id'])
					){
					if ($this->tsea_import_master->delete( $_POST['id'])){
						$this->tsea_import_master_vessel->clean( $_POST['id']);
						$this->tsea_import_master_container->clean( $_POST['id']);
					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Failed To Be Removed. There is a Data Error or Server.';
					}
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Error Procedure, Application Changes, Please Refresh Your Browser.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='You are not Logged in or Have Logged Out.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']=' You do not Have Access to The Data Store.';
		}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$resulttrnx['isi']=$_POST;
		$this->xlog->record( 'delete', 'sea_import_master', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function kepala($baris,$no,$pdf,$kode,$tgl,$hal,$subtotal,$subtotal2)
	{
	if ((($no-1) % $baris===0) || ($no===1)){
if ($no!==1){
	$pdf->SetFont( 'Arial','',9 );
	$pdf->Cell( 35, 6, '', 'LRB', 0, 'L' );
	$pdf->Cell( 75, 6, 'Sub Total : ', 'RB', 0, 'R' );
	$pdf->Cell( 35, 6, number_format( $subtotal, 2,'.', ','), 'RB', 0, 'R' );
	$pdf->Cell( 35, 6, number_format( $subtotal2, 2,'.', ','), 'RB', 1, 'R' );
}
		$pdf->AddPage(); 
		$pdf->SetAutoPageBreak(false, 0);
		$pdf->SetFont( 'Arial','B',12 );
		$pdf->Cell( 180, 6, 'JURNAL UMUM', '', 1, 'C' );	
		$pdf->SetFont( 'Arial','',9 );
		$pdf->Cell( 32, 6, 'TANGGAL', '', 0, 'L' );
		$pdf->Cell( 3, 6, ': ', '', 0, 'L' );
		$pecahtgl = explode("-", $tgl);
		$tglx= $pecahtgl[2].'-'.$pecahtgl[1].'-'.$pecahtgl[0];
		$pdf->Cell( 110, 6, $tglx, '', 1, 'L' );
		$pdf->Cell( 32, 6, 'NO', '', 0, 'L' );
		$pdf->Cell( 3, 6, ': ', '', 0, 'L' );
		$pdf->Cell( 110, 6, $kode, '', 1, 'L' );

		$pdf->Cell( 35, 6, 'Account', 'TLRB', 0, 'C' );
		$pdf->Cell( 75, 6, 'Keterangan', 'TRB', 0, 'C' );
		$pdf->Cell( 35, 6, 'Debet', 'TRB', 0, 'C' );
		$pdf->Cell( 35, 6, 'Kredit', 'TRB', 1, 'C' );

	}
	}
	
	public function pdf()
	{
	// echo($_GET['id_jurnal']);
	// echo($_GET['id_transaksi']);
	// exit;
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_GET['id_jurnal'] )
				&& isset( $_GET['id_transaksi'] )
				&& ! empty( $_GET['id_jurnal'] )
				&& ! empty( $_GET['id_transaksi'] )
			){
				$tju = $this->tju->read( $_GET['id_jurnal'], $_GET['id_transaksi'] );
				$tju['transaksi'] = $this->tju_transaksi->load( $_GET['id_jurnal'], $_GET['id_transaksi'] );
			$tgl=$tju['tanggal'];
			$kode=$_GET['id_jurnal'] .' - '. $_GET['id_transaksi'];
			if (( !empty( $tju )) && (!empty( $tju['transaksi'] ) )){
				$this->load->library('fpdf17/fpdf');

				$baris=11;$no=1;$hal=1;$subtotal=0;$subtotal2=0;$line=1;$total=0;$total2=0;
				$pdf = new FPDF( 'L', 'mm', array(215.9,139.7) );
				$pdf->SetDisplayMode('fullwidth');
				$pdf->AliasNbPages();
				for( $i = 0; $i < sizeof( $tju['transaksi'] ); $i++ ){
				if ((($no-1) % $baris===0)){
					$this->kepala($baris,$no,$pdf,$kode,$tgl,$hal,$subtotal,$subtotal2);
					$line++;
					$line++;
					$line++;
					$line++;
					if ($no !==1){
					$line++;
					}
					$subtotal=0;
					$subtotal2=0;
					$hal++;
				}
				$pdf->SetFont( 'Arial','',8 );

				$pdf->Cell( 35, 6, $tju['transaksi'][$i]['id_perkiraan'], 'LRB', 0, 'L' );
				$pdf->Cell( 75, 6, $tju['transaksi'][$i]['keterangan'], 'RB', 0, 'L' );
				$pdf->Cell( 35, 6, number_format( $tju['transaksi'][$i]['debet'], 2,'.', ','), 'RB', 0, 'R' );
				$pdf->Cell( 35, 6, number_format( $tju['transaksi'][$i]['kredit'], 2,'.', ','), 'RB', 1, 'R' );
				$line++;
				$no++;
				
				$subtotal+=(floatval($tju['transaksi'][$i]['debet']));
				$subtotal2+=(floatval($tju['transaksi'][$i]['kredit']));
				$total+=(floatval($tju['transaksi'][$i]['debet']));
				$total2+=(floatval($tju['transaksi'][$i]['kredit']));
				}
				$pdf->SetFont( 'Arial','B',9 );
				$pdf->Cell( 35, 6, '', 'LRB', 0, 'L' );
				$pdf->Cell( 75, 6, 'Total : ', 'RB', 0, 'R' );
				$pdf->Cell( 35, 6, number_format($total, 2,'.', ','), 'RB', 0, 'R' );
				$pdf->Cell( 35, 6, number_format($total2, 2,'.', ','), 'RB', 1, 'R' );
				$pdf->Cell( 35, 3, '', '', 1, 'L' );

				$pdf->SetFont( 'Arial','',9 );

				$pdf->Cell( 35, 6, 'DIBUKUKAN', 'TLRB', 1, 'C' );
				$pdf->Cell( 35, 6, '', 'LR', 1, 'L' );
				$pdf->Cell( 35, 6, '', 'LR', 1, 'L' );
				$pdf->Cell( 35, 6, strtoupper($this->tank_auth->get_username()), 'LRB', 0, 'C' );
				
				$pdf->Output();
			}
		}

		}
	}	
}

/* End of file sim.php */
/* Location: ./application/controllers/sim.php */