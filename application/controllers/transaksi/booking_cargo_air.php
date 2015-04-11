<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking_cargo_air extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Tbooking_cargo_air', 'tbooking_cargo_air' );
		$this->load->model( 'Tbooking_cargo_air_route', 'tbooking_cargo_air_route' );
		$this->load->model( 'Tcarrier_booking_air', 'tcarrier_booking_air');
		$this->load->model( 'Air_quot', 'air_quot');
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
		$this->load->model( 'Mcommodity', 'mcommodity' );
		$this->load->model( 'Mcurrency', 'mcurrency');
		$this->load->model( 'Mcity', 'mcity');
		$this->load->model( 'Mairport', 'mairport' );
		$this->load->model( 'Mairline', 'mairline' );
		$this->load->model( 'Mfreight_term', 'mfreight_term' );
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
			if( in_array( 'read_booking_cargo_air', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'Booking_cargo_air', '' );
				$this->load->view('transaksi/booking_cargo_air/index', $data);
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

	public function db_read_all_weight()
	{
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model( 'Mcapasity', 'mcapasity' );
			$weight_type = $this->mcapasity->all();
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

	public function db_read_all_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model( 'Mcurrency', 'mcurrency');
			$currency_type = $this->mcurrency->all();
			if(!empty($currency_type))
			{
				echo serialize($currency_type);
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

	public function db_city()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mcity = $this->search->search_city( $_POST['key']);
				echo serialize( $mcity );
			}
		}
	}

	public function db_read_city()
	{
		if($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'mcity', $_POST['id'] );
				$mcity = $this->mcity->read( $_POST['id']);
				if( !empty( $mcity )){
					echo serialize( $mcity );
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

	public function db_airport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mairport = $this->search->search_aircount( $_POST['key']);
				$mairport = $this->search->search_airreg( $_POST['key']);
				echo serialize( $mairport );
			}
		}
	}
	

	public function db_read_port()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mairport->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['port_name'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_airline()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$airline = $this->search->search_airline( $_POST['key']);
				echo serialize( $airline );
			}
		}
	}

	public function db_read_airline()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->mairline->read( $_POST['id'] );
				if (!empty($hasil)){
					echo serialize( $hasil );
				}else{
					echo '';
				}
			}
		}
	}

	public function db_air_import_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_air_import_master( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_air_import_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tair_import_master', 'tair_import_master' );
				$hasil = $this->tair_import_master->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_HAWB_no()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tair_import_master->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['MAWB_no'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_air_export_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_air_export_master( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_air_export_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tair_export_master', 'tair_export_master' );
				$hasil = $this->tair_export_master->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_MAWB_no()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tair_export_master->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['MAWB_no'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_carrier_booking_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_carrier_booking_air( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_carrier_booking_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tcarrier_booking_air', 'tcarrier_booking_air' );
				$hasil = $this->tcarrier_booking_air->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_SI_ref()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tcarrier_booking_air->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['reference'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_air_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_air_quot( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_air_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Air_quot', 'air_quot' );
				$hasil = $this->air_quot->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_quotation_ref()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->air_quot->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['re'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_booking_cargo_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcustomer = $this->search->search_booking_cargo_air( $_POST['key']);
				echo serialize( $mcustomer );
			}
		}
	}

	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ] ) ){
				echo $this->tbooking_cargo_air->lastid( $_POST['tanggal'] );
			}
		}
	}

	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_booking_cargo_air', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['order_no'] )
					&& isset( $_POST['order_date'] )
				){
					$baris=1;
					if (empty($_POST['order_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['order_date']) || !$this->emkl->cek_format_tanggal( $_POST['order_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order Date <strong>MUST</strong> be in format dd-MM-yyyy.';
					}else{
						$booking_cargo_route = array();
						$baris=1;
						for( $i = 0; $i < $_POST['baris-route' ]; $i++){
							if( isset( $_POST[ 'route' ][ $i ][ 'routing' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'airline_id' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'airline_name' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'flight_no' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'etd' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'eta' ] )
								&& ! empty( $_POST[ 'route' ][ $i ][ 'routing' ] )
							){
								if (empty($_POST[ 'route' ][ $i ][ 'routing' ])){
								}elseif (empty($_POST[ 'route' ][ $i ][ 'etd' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'route' ][ $i ][ 'etd' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETD in line '. $baris .'  <strong> MUST </strong> filled with format dd-MM-yyyy.';
								}
								elseif (empty($_POST[ 'route' ][ $i ][ 'eta' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'route' ][ $i ][ 'eta' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETA in line '. $baris .'  <strong> MUST </strong> filled with format dd-MM-yyyy.';
								}else{
									$baris++;
								}
								$grid_route = array(
									'order_no' => $_POST['order_no']
									, 'routing' => $_POST[ 'route' ][ $i ][ 'routing' ]
									, 'airline_id' => $_POST[ 'route' ][ $i ][ 'airline_id' ]
									, 'airline_name' => $_POST[ 'route' ][ $i ][ 'airline_name' ]
									, 'flight_no' => $_POST[ 'route' ][ $i ][ 'flight_no' ]
									, 'etd' => $this->emkl->change_format( $_POST[ 'route' ][ $i ][ 'etd' ])
									, 'eta' => $this->emkl->change_format( $_POST[ 'route' ][ $i ][ 'eta' ])
								);
								$booking_cargo_route[] = $grid_route;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Routing grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'booking_cargo_air', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['order_no'] = $_POST['order_no'];
					$data['HAWB_no'] = $_POST['HAWB_no'];
					$data['MAWB_no'] = $_POST['MAWB_no'];
					$data['SI_ref'] = $_POST['SI_ref'];
					$data['quotation_ref'] = $_POST['quotation_ref'];
					$data['order_date'] = $this->emkl->change_format( $_POST['order_date'] );
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
					$data['port_transit_code'] = $_POST['port_kode_transit'];
					$data['port_transit_description'] = $_POST['nama_port_transit'];
					$data['port_destination_code'] = $_POST['port_kode_destination'];
					$data['port_destination_description'] = $_POST['nama_port_destination'];
					$data['stuffing_date'] = $this->emkl->change_format( $_POST['stuffing_date'] );
					$data['onboard_date'] = $this->emkl->change_format( $_POST['onboard_date'] );
					$data['shipment_etd'] = $this->emkl->change_format( $_POST['shipment_ETD'] );
					$data['shipment_eta'] = $this->emkl->change_format( $_POST['shipment_ETA'] );
					$data['co_loader_code'] = $_POST['co_loader'];
					$data['co_loader_description'] = $_POST['co_loader_name'];
					$data['packages_number'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['packages_number'] ) );
					$data['packages_type'] = $_POST['packages_type'];
					$data['gross_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
					$data['gross_weight_type'] = $_POST['gross_type'];
					$data['net_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['net_weight'] ) );
					$data['net_weight_type'] = $_POST['net_type'];
					$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement_number'] ) );
					$data['measurement_type'] = $_POST['measurement_type'];
					$data['charge_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['charge_weight'] ) );
					$data['charge_weight_type'] = $_POST['charge_weight_type'];
					$data['rata_charge'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['rata_charge'] ) );
					$data['rata_charge_type'] = $_POST['rata_charge_type'];
					$data['total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total'] ) );
					$data['commodity_code'] = $_POST['commodity_code'];
					$data['commodity_description'] = $_POST['commodity_name'];
					$data['remarks'] = $_POST['remarks'];
					$data['service_type'] = $_POST['service_type'];
					$data['service_type2'] = $_POST['service_type2'];
					$data['freight_term_code'] = $_POST['freight_term_code'];
					$data['freight_term_description'] = $_POST['freight_term_name'];
					$data['freight_payable_at'] = $_POST['freight_payable_at'];
					$data['original_bl'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['original_BL'] ) );
					$data['order_status'] = $_POST['order_status'];
					$data['handling_information'] = $_POST['handling_information'];
					$data['accounting_information'] = $_POST['accounting_information'];
					$data['marks_number'] = $_POST['marksnumber'];
					$data['packages_description'] = $_POST['description_packages'];
					$data['created'] = $this->emkl->waktu_saat_ini();
					$data['creator'] = $this->tank_auth->get_user_id();
					$hasil=$this->tbooking_cargo_air->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->tbooking_cargo_air_route->clean( $_POST['order_no']);
						if (isset($booking_cargo_route) && !empty($booking_cargo_route)){
							if (!$this->tbooking_cargo_air_route->create( $booking_cargo_route )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->tbooking_cargo_air->delete( $_POST['order_no']);
							$this->tbooking_cargo_air_route->clean( $_POST['order_no'] );
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
		$this->xlog->record( 'create', 'booking_cargo_air', $resulttrnx );
		
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$booking_cargo = $this->tbooking_cargo_air->read( $_POST['id'] );
				if( ! empty( $booking_cargo ) ){
					$booking_cargo['route'] = $this->tbooking_cargo_air_route->load( $_POST['id']);
					echo serialize( $booking_cargo );
				}
			}
		}
	}

	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_booking_cargo_air', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['order_no'] )
					&& isset( $_POST['order_date'] )
				){
					$baris=1;
					if (empty($_POST['order_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['order_date']) || !$this->emkl->cek_format_tanggal( $_POST['order_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order date <strong>MUST</strong> be in format dd-MM-yyyy.';
					}else{
						$booking_cargo_route = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-route' ]; $i++ ){
							if( isset( $_POST[ 'route' ][ $i ][ 'routing' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'airline_id' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'airline_name' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'flight_no' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'etd' ] )
								&& isset( $_POST[ 'route' ][ $i ][ 'eta' ] )
								&& ! empty( $_POST[ 'route' ][ $i ][ 'routing' ] )

							){
								if (empty($_POST[ 'route' ][ $i ][ 'routing' ])){
								}elseif (empty($_POST[ 'route' ][ $i ][ 'etd' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'route' ][ $i ][ 'etd' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETD in Line '. $baris .'  <strong> MUST </strong> filled with format dd-MM-yyyy.';
								}
								elseif (empty($_POST[ 'route' ][ $i ][ 'eta' ]) || !$this->emkl->cek_format_tanggal($_POST[ 'route' ][ $i ][ 'eta' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='ETA in Line '. $baris .' <strong> MUST </strong> filled with format dd-MM-yyyy.';
								}else{
									$baris++;
								}
								$grid_route = array(
									'order_no' => $_POST['order_no']
									, 'routing' => $_POST[ 'route' ][ $i ][ 'routing' ]
									, 'airline_id' => $_POST[ 'route' ][ $i ][ 'airline_id' ]
									, 'airline_name' => $_POST[ 'route' ][ $i ][ 'airline_name' ]
									, 'flight_no' => $_POST[ 'route' ][ $i ][ 'flight_no' ]
									, 'etd' =>  $this->emkl->change_format( $_POST[ 'route' ][ $i ][ 'etd' ])
									, 'eta' => $this->emkl->change_format( $_POST[ 'route' ][ $i ][ 'eta' ])
								);
								$booking_cargo_route[] = $grid_route;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Routing Grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'booking_cargo_air', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['order_no'] = $_POST['order_no'];
					$data['HAWB_no'] = $_POST['HAWB_no'];
					$data['MAWB_no'] = $_POST['MAWB_no'];
					$data['SI_ref'] = $_POST['SI_ref'];
					$data['quotation_ref'] = $_POST['quotation_ref'];
					$data['order_date'] = $this->emkl->change_format( $_POST['order_date'] );
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
					$data['port_transit_code'] = $_POST['port_kode_transit'];
					$data['port_transit_description'] = $_POST['nama_port_transit'];
					$data['port_destination_code'] = $_POST['port_kode_destination'];
					$data['port_destination_description'] = $_POST['nama_port_destination'];
					$data['stuffing_date'] = $this->emkl->change_format( $_POST['stuffing_date'] );
					$data['onboard_date'] = $this->emkl->change_format( $_POST['onboard_date'] );
					$data['shipment_etd'] = $this->emkl->change_format( $_POST['shipment_ETD'] );
					$data['shipment_eta'] = $this->emkl->change_format( $_POST['shipment_ETA'] );
					$data['co_loader_code'] = $_POST['co_loader'];
					$data['co_loader_description'] = $_POST['co_loader_name'];
					$data['packages_number'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['packages_number'] ) );
					$data['packages_type'] = $_POST['packages_type'];
					$data['gross_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
					$data['gross_weight_type'] = $_POST['gross_type'];
					$data['net_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['net_weight'] ) );
					$data['net_weight_type'] = $_POST['net_type'];
					$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement_number'] ) );
					$data['measurement_type'] = $_POST['measurement_type'];
					$data['charge_weight'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['charge_weight'] ) );
					$data['charge_weight_type'] = $_POST['charge_weight_type'];
					$data['rata_charge'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['rata_charge'] ) );
					$data['rata_charge_type'] = $_POST['rata_charge_type'];
					$data['total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total'] ) );
					$data['commodity_code'] = $_POST['commodity_code'];
					$data['commodity_description'] = $_POST['commodity_name'];
					$data['remarks'] = $_POST['remarks'];
					$data['service_type'] = $_POST['service_type'];
					$data['service_type2'] = $_POST['service_type2'];
					$data['freight_term_code'] = $_POST['freight_term_code'];
					$data['freight_term_description'] = $_POST['freight_term_name'];
					$data['freight_payable_at'] = $_POST['freight_payable_at'];
					$data['original_bl'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['original_BL'] ) );
					$data['order_status'] = $_POST['order_status'];
					$data['handling_information'] = $_POST['handling_information'];
					$data['accounting_information'] = $_POST['accounting_information'];
					$data['marks_number'] = $_POST['marksnumber'];
					$data['packages_description'] = $_POST['description_packages'];
					$data['modified'] = $this->emkl->waktu_saat_ini();
					$data['modifier'] = $this->tank_auth->get_user_id();
					$hasil=$this->tbooking_cargo_air->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->tbooking_cargo_air_route->clean( $_POST['order_no']);
						if (isset($booking_cargo_route) && !empty($booking_cargo_route)){
							if (!$this->tbooking_cargo_air_route->create( $booking_cargo_route )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->tbooking_cargo_air_route->clean( $_POST['order_no'] );
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
		$this->xlog->record( 'update', 'booking_cargo_air', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_delete()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'delete_booking_cargo_air', unserialize( $this->tank_auth->get_capabilities() ) )){

			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id'] )
					&& !empty( $_POST['id'] )
				){
				

					if ($this->tbooking_cargo_air->delete( $_POST['id'] )){
						$this->tbooking_cargo_air_route->clean( $_POST['id']);
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
			$this->xlog->record( 'delete', 'booking_cargo_air', $resulttrnx );
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

/* End of file cargo.php */
/* Location: ./application/controllers/cargo.php */