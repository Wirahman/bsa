<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sea_invoice_ar extends CI_Controller {
    private $controller = 'transaksi/sea_invoice_ar';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mcapasity', 'mcapasity');
		$this->load->model( 'Mcharges', 'mcharges');
		$this->load->model( 'Mcommodity', 'mcommodity');
		$this->load->model( 'Mcurrency', 'mcurrency');
		$this->load->model( 'Mcustomer', 'mcustomer');
		$this->load->model( 'Mseaport', 'mseaport');
		$this->load->model( 'Msignature', 'msignature');
		$this->load->model( 'Munit', 'munit');
		$this->load->model( 'Mvessel', 'mvessel');
		$this->load->model( 'Tsea_invoice_ar', 'tsea_invoice_ar');
		$this->load->model( 'Tsea_invoice_ar_charges', 'tsea_invoice_ar_charges');
		$this->load->model( 'Tbooking_cargo_sea', 'tbooking_cargo_sea');
		$this->load->model( 'Tcarrier_booking_sea', 'tcarrier_booking_sea');
		$this->load->model( 'Tsea_export_master', 'tsea_export_master');
		$this->load->model( 'Tsea_import_master', 'tsea_import_master');
		$this->load->model( 'Search', 'search');
		$this->load->model( 'Searchtrn', 'searchtrn');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		if (!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		} else {
			$data['user_id']		= $this->tank_auth->get_user_id();
			$data['username']		= $this->tank_auth->get_username();
			$data['capabilities']	= $this->tank_auth->get_capabilities();
			$data['role']			= $this->tank_auth->get_role();

			$this->load->view('header');
			$this->load->view('menu', $data);
			if( in_array( 'read_sea_invoice_ar', unserialize( $this->tank_auth->get_capabilities()))){
				$this->xlog->record( 'open', 'Sea_invoice_ar', '');
				$this->load->view('transaksi/sea_invoice_ar/index', $data);
			}else{
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
			$currency_id = $this->mcurrency->all();
			if(!empty($currency_id))
			{
				echo serialize($currency_id);
			}
			else
			{
				echo "";
			}
		}
	}
	
	public function db_read_charges()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->mcharges->read( $_POST['id'] );
				if (!empty($hasil)){
					echo serialize( $hasil );
				}else{
					echo '';
				}
			}
		}
	}

	public function db_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mcharges = $this->search->search_chra( $_POST['key']);
				echo serialize( $mcharges);
			}
		}
	}

	public function db_read_commodity()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
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
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mcommodity = $this->search->search_comm( $_POST['key']);
				echo serialize( $mcommodity );
			}
		}
	}

	public function db_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$mcustomer = $this->search->search_customer( $_POST['key'], $_POST['cond1']);
				echo serialize( $mcustomer );
			}
		}
	}

	public function db_read_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'mcustomer', $_POST['id']);
				$mcustomer = $this->mcustomer->read( $_POST['id'], $_POST['cond'] );
				if( !empty( $mcustomer)){
					echo serialize( $mcustomer );
				}
			}
		}
	}

	public function db_seaport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
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
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->mseaport->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['port_name'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_unit()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$munit = $this->search->search_unit( $_POST['key']);
				echo serialize( $munit );
			}
		}
	}

	public function db_read_signature()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->msignature->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['nama'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_signature()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$msignature = $this->search->search_sig( $_POST['key']);
				echo serialize( $msignature );
			}
		}
	}

	public function db_read_unit()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->munit->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['description'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_feeder_vessel()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$vessel = $this->search->search_feeder_vessel( $_POST['key']);
				echo serialize( $vessel );
			}
		}
	}

	public function db_mother_vessel()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$vessel = $this->search->search_mother_vessel( $_POST['key']);
				echo serialize( $vessel );
			}
		}
	}

	public function db_vessel()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search');
				$vessel = $this->search->search_ves( $_POST['key']);
				echo serialize( $vessel );
			}
		}
	}

	public function db_read_vessel()
	{
		if ($this->tank_auth->is_logged_in()){
			if( isset( $_POST[ 'id' ])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'mvessel', $_POST['id']);
				$hasil = $this->mvessel->read( $_POST['id']);
				if( !empty( $hasil)){
					echo serialize( $hasil );
				}
			}
				
		}
	}

	public function db_sea_import_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_sea_import_master( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_sea_import_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tsea_import_master', 'tsea_import_master');
				$hasil = $this->tsea_import_master->read( $_POST['id']);
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_order_no()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tbooking_cargo_sea->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['order_no'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_booking_cargo_sea()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_booking_cargo_sea( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_HBL_no()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tsea_import_master->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['OBL_no'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_sea_export_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_sea_export_master( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_sea_export_master()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tsea_export_master', 'tsea_export_master');
				$hasil = $this->tsea_export_master->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_OBL_no()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tsea_export_master->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['OBL_no'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_carrier_booking_sea()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_carrier_booking_sea( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_carrier_booking_sea()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Tcarrier_booking_sea', 'tcarrier_booking_sea' );
				$hasil = $this->tcarrier_booking_sea->read( $_POST['id']);
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_SI_ref()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->tcarrier_booking_sea->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['reference'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_sea_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$hasil = $this->search->search_sea_quot( $_POST['key'], true );
				echo serialize( $hasil );
			}
		}
	}

	public function load_sea_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$this->load->model( 'Sea_quot', 'sea_quot' );
				$hasil =$this->sea_quot->read( $_POST['id'] );
				echo serialize( $hasil );
			}
		}
	}

	public function db_read_quotation_ref()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->sea_quot->read( $_POST['id']);
				if (!empty($hasil)){
					echo $hasil['re'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_sea_invoice_ar()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$hasil = $this->search->search_sea_invoice_ar( $_POST['key']);
				echo serialize( $hasil );
			}
		}
	}

	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ])){
				echo $this->tsea_invoice_ar->lastid( $_POST['tanggal']);
			}
		}
	}

	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_sea_invoice_ar', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['invoice_no'] )
					&& isset( $_POST['invoice_date'] )
				){
					$baris=1;
					if (empty($_POST['invoice_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Invoice Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['invoice_date']) || !$this->emkl->cek_format_tanggal( $_POST['invoice_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Invoice Date <strong>MUST</strong> be in format dd-MM-yyyy.';
					}else{
						$sea_invoice_charges = array();
						$baris=1;
						for( $i = 0; $i < $_POST['baris-charges']; $i++){
						if( isset( $_POST[ 'charges' ][ $i ][ 'charges_code' ])
							&& isset( $_POST[ 'charges' ][ $i ][ 'charges_description' ])
							&& isset( $_POST[ 'charges' ][ $i ][ 'amount' ])
							&& ! empty( $_POST[ 'charges' ][ $i ][ 'charges_code'])
							){
								if (empty($_POST[ 'charges' ][ $i ][ 'charges_code' ])){
							}elseif (!is_numeric( str_replace(",","", $_POST[ 'charges' ][ $i ][ 'amount' ]))  || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'charges' ][ $i ][ 'amount' ] ) ) )){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Amount in line '. $baris .' <strong> MUST</strong> numeric.';
							}else{
								$baris++;
							}
								$grid_charges = array(
								'invoice_no' => $_POST['invoice_no']
								, 'charges_code' => $_POST[ 'charges' ][ $i ][ 'charges_code' ]
								, 'charges_description' => $_POST[ 'charges' ][ $i ][ 'charges_description' ]
								, 'amount' => $_POST[ 'charges' ][ $i ][ 'amount' ]
							);
								$sea_invoice_charges[] = $grid_charges;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Charges grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'sea_invoice_ar', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['invoice_no'] = $_POST['invoice_no'];
					$data['invoice_date'] = $this->emkl->change_format( $_POST['invoice_date']);
					$data['customer_id'] = $_POST['customer_id'];
					$data['customer_address'] = $_POST['customer_address'];
					$data['customer_address1'] = $_POST['customer_address1'];
					$data['customer_address2'] = $_POST['customer_address2'];
					$data['credit_term'] = $_POST['credit_term'];
					$data['due_date'] = $this->emkl->change_format( $_POST['due_date']);
					$data['shipper_id'] = $_POST['shipper_id'];
					$data['cnee_id'] = $_POST['cnee_id'];
					$data['order_no'] = $_POST['order_no'];
					$data['si_ref'] = $_POST['si_ref'];
					$data['currency_id'] = $_POST['currency_id'];
					$data['term'] = $_POST['term'];
					$data['HBL_no'] = $_POST['HBL_no'];
					$data['OBL_no'] = $_POST['OBL_no'];
					$data['feeder_vessel_id'] = $_POST['feeder_vessel_id'];
					$data['feeder_vessel_name'] = $_POST['feeder_vessel_name'];
					$data['mother_vessel_id'] = $_POST['mother_vessel_id'];
					$data['mother_vessel_name'] = $_POST['mother_vessel_name'];
					$data['gross_weight'] =  floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
					$data['gross_weight_description'] = $_POST['gross_weight_description'];
					$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement'] ) );
					$data['measurement_description'] = $_POST['measurement_description'];
					$data['loading_port'] = $_POST['loading_port'];
					$data['date_loading'] = $this->emkl->change_format( $_POST['date_loading']);
					$data['discharge_port'] = $_POST['discharge_port'];
					$data['date_discharge'] = $this->emkl->change_format( $_POST['date_discharge']);
					$data['commodity'] = $_POST['commodity'];
					$data['party'] = $_POST['party'];
					$data['say'] = $_POST['say'];
					$data['remarks'] = $_POST['remarks'];
					$data['sub_total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['sub_total'] ) );
					$data['vat'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['vat'] ) );
					$data['total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total'] ) );
					$data['signature_id'] = $_POST['signature_id'];
					$data['signature_name'] = $_POST['signature_name'];
					$data['created'] = $this->emkl->waktu_saat_ini();
					$data['creator'] = $this->tank_auth->get_user_id();
					$hasil=$this->tsea_invoice_ar->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->tsea_invoice_ar_charges->clean( $_POST['invoice_no']);
						if (isset($sea_invoice_charges) && !empty($sea_invoice_charges)){
							if (!$this->tsea_invoice_ar_charges->create( $sea_invoice_charges )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->tsea_invoice_ar->delete( $_POST['invoice_no']);
							$this->tsea_invoice_ar_charges->clean( $_POST['invoice_no'] );
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
		$this->xlog->record( 'create', 'sea_invoice_ar', $resulttrnx );
		
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$sea_invoice_ar = $this->tsea_invoice_ar->read( $_POST['id']);
				if( ! empty( $sea_invoice_ar )){
					$sea_invoice_ar['charges'] = $this->tsea_invoice_ar_charges->load( $_POST['id']);
					echo serialize( $sea_invoice_ar );
				}
			}
		}
	}

	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_sea_invoice_ar', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['invoice_no'] )
					&& isset( $_POST['invoice_date'] )
				){
					$baris=1;
					if (empty($_POST['invoice_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Invoice Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['invoice_date']) || !$this->emkl->cek_format_tanggal( $_POST['invoice_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Invoice date <strong>MUST</strong> be in format dd-MM-yyyy.';
					}else{
						$sea_invoice_charges = array();
						$baris=1;
						for( $i = 0; $i < $_POST['baris-charges']; $i++ ){
							if( isset( $_POST[ 'charges' ][ $i ][ 'charges_code'])
								&& isset( $_POST[ 'charges' ][ $i ][ 'charges_description' ])
								&& isset( $_POST[ 'charges' ][ $i ][ 'amount' ])
								&& ! empty( $_POST[ 'charges' ][ $i ][ 'charges_code' ] )

							){
								if (empty($_POST[ 'charges' ][ $i ][ 'charges_code' ])){
								}elseif (!is_numeric( str_replace(",","", $_POST[ 'charges' ][ $i ][ 'amount' ]))  || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'charges' ][ $i ][ 'amount' ] ) ) )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Amount in line '. $baris .' <strong> MUST</strong> numeric.';
								}else{
									$baris++;
								}
								$grid_charges = array(
									'invoice_no' => $_POST['invoice_no']
									, 'charges_code' => $_POST[ 'charges' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'charges' ][ $i ][ 'charges_description' ]
									, 'amount' => $_POST[ 'charges' ][ $i ][ 'amount' ]
								);
								$sea_invoice_charges[] = $grid_charges;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Routing Grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'sea_invoice_ar', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['invoice_no'] = $_POST['invoice_no'];
					$data['invoice_date'] = $this->emkl->change_format( $_POST['invoice_date']);
					$data['customer_id'] = $_POST['customer_id'];
					$data['customer_address'] = $_POST['customer_address'];
					$data['customer_address1'] = $_POST['customer_address1'];
					$data['customer_address2'] = $_POST['customer_address2'];
					$data['credit_term'] = $_POST['credit_term'];
					$data['due_date'] = $this->emkl->change_format( $_POST['due_date']);
					$data['shipper_id'] = $_POST['shipper_id'];
					$data['cnee_id'] = $_POST['cnee_id'];
					$data['order_no'] = $_POST['order_no'];
					$data['si_ref'] = $_POST['si_ref'];
					$data['currency_id'] = $_POST['currency_id'];
					$data['term'] = $_POST['term'];
					$data['HBL_no'] = $_POST['HBL_no'];
					$data['OBL_no'] = $_POST['OBL_no'];
					$data['feeder_vessel_id'] = $_POST['feeder_vessel_id'];
					$data['feeder_vessel_name'] = $_POST['feeder_vessel_name'];
					$data['mother_vessel_id'] = $_POST['mother_vessel_id'];
					$data['mother_vessel_name'] = $_POST['mother_vessel_name'];
					$data['gross_weight'] =  floatval( preg_replace( "/[^0-9.]/", "", $_POST['gross_weight'] ) );
					$data['gross_weight_description'] = $_POST['gross_weight_description'];
					$data['measurement'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['measurement'] ) );
					$data['measurement_description'] = $_POST['measurement_description'];
					$data['loading_port'] = $_POST['loading_port'];
					$data['date_loading'] = $this->emkl->change_format( $_POST['date_loading']);
					$data['discharge_port'] = $_POST['discharge_port'];
					$data['date_discharge'] = $this->emkl->change_format( $_POST['date_discharge']);
					$data['commodity'] = $_POST['commodity'];
					$data['party'] = $_POST['party'];
					$data['say'] = $_POST['say'];
					$data['remarks'] = $_POST['remarks'];
					$data['sub_total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['sub_total'] ) );
					$data['vat'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['vat'] ) );
					$data['total'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total'] ) );
					$data['signature_id'] = $_POST['signature_id'];
					$data['signature_name'] = $_POST['signature_name'];
					$data['modified'] = $this->emkl->waktu_saat_ini();
					$data['modifier'] = $this->tank_auth->get_user_id();
					$hasil=$this->tsea_invoice_ar->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->tsea_invoice_ar_charges->clean( $_POST['invoice_no']);
						if (isset($sea_invoice_charges) && !empty($sea_invoice_charges)){
							if (!$this->tsea_invoice_ar_charges->create( $sea_invoice_charges )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->tsea_invoice_ar_charges->clean( $_POST['invoice_no'] );
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
		$this->xlog->record( 'update', 'sea_invoice_ar', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_delete()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'delete_sea_invoice_ar', unserialize( $this->tank_auth->get_capabilities()))){
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id'])
					&& !empty( $_POST['id'])
				){
					if ($this->tsea_invoice_ar->delete( $_POST['id'])){
						$this->tsea_invoice_ar_charges->clean( $_POST['id']);
					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Failed to be Removed. There is a Data Error or Server Error.';
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
			$resulttrn['ket']='You do not Have Access to The Data Store.';
		}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$resulttrnx['isi']=$_POST;
		$this->xlog->record( 'delete', 'sea_invoice_ar', $resulttrnx);
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

/* End of file sea_invoice_ar.php */
/* Location: ./application/controllers/sea_invoice_ar.php */
