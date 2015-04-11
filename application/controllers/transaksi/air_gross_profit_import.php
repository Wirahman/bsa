<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Air_gross_profit_import extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Tair_gross_profit_import', 'tair_gross_profit_import' );
		$this->load->model( 'Tair_gross_profit_import_revenue', 'tair_gross_profit_import_revenue' );
		$this->load->model( 'Tair_gross_profit_import_cost', 'tair_gross_profit_import_cost' );
		$this->load->model( 'Tair_import_master', 'tair_import_master');
		$this->load->model( 'Tcarrier_booking_air', 'tcarrier_booking_air');
		$this->load->model( 'Mcharges', 'mcharges');
		$this->load->model( 'Mcurrency', 'mcurrency');
		$this->load->model( 'Msales', 'msales');
		$this->load->model( 'Air_quot', 'air_quot');
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Tju_transaksi', 'tju_transaksi' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
		$this->load->model( 'Mcommodity', 'mcommodity' );
		$this->load->model( 'Mairport', 'mairport' );
		$this->load->model( 'Munit', 'munit');
		$this->load->model( 'Mvessel', 'mvessel' );
		$this->load->model( 'Mfreight_term', 'mfreight_term' );
		$this->load->model( 'Pr_air', 'pr_air');
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
			if( in_array( 'read_air_gross_profit_import', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'Air_gross_profit_import', '' );
				$this->load->view('transaksi/air_gross_profit_import/index', $data);
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

	// Untuk Customer yang Menggunakan condition / tipe
	// public function db_customer()
	// {
	// 	if ($this->tank_auth->is_logged_in()) {
	// 		if( isset( $_POST[ 'key' ] ) ){
	// 			$this->load->model( 'Search', 'search' );
	// 			$mcustomer = $this->search->search_customer( $_POST['key'], $_POST['cond1']);
	// 			echo serialize( $mcustomer );
	// 		}
	// 	}
	// }
	
	// public function db_read_customer()
	// {
	// 	if ($this->tank_auth->is_logged_in()) {
	// 		if( isset( $_POST['id'] )
	// 			&& ! empty( $_POST['id'] )
	// 		){
	// 			$this->xlog->record( 'read', 'mcustomer', $_POST['id'] );
	// 			$mcompany = $this->mcustomer->read( $_POST['id'],  $_POST['cond'] );
	// 			if( !empty( $mcompany ) ){
	// 				echo serialize( $mcompany );
	// 			}
	// 		}
	// 	}
	// }

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
	
	public function db_read_customer()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mcustomer', $_POST['id'] );
				$mcompany = $this->mcustomer->read( $_POST['id']);
				if( !empty( $mcompany ) ){
					echo serialize( $mcompany );
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

	public function db_read_unit()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'munit', $_POST['id'] );
				$munit = $this->munit->read( $_POST['id']);
				if( !empty( $munit)){
					echo serialize( $munit);
				}
			}
		}
	}

	public function db_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mcurrency = $this->search->search_cur( $_POST['key']);
				echo serialize( $mcurrency );
			}
		}
	}

	public function db_read_currency()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'mcurrency', $_POST['id'] );
				$mcurrency = $this->mcurrency->read( $_POST['id']);
				if( !empty( $mcurrency)){
					echo serialize( $mcurrency );
				}
			}
		}
	}

	public function db_pr_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$pr_air = $this->search->search_pr_air( $_POST['key']);
				echo serialize( $pr_air );
			}
		}
	}

	public function db_read_pr_air()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'])
				&& ! empty( $_POST['id'])
			){
				$this->xlog->record( 'read', 'pr_air', $_POST['id'] );
				$pr_air = $this->pr_air->read( $_POST['id']);
				if( !empty( $pr_air)){
					echo serialize( $pr_air );
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

	public function db_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$mcharges = $this->search->search_chra( $_POST['key']);
				echo serialize( $mcharges );
			}
		}
	}

	public function db_read_charges()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->mcharges->read( $_POST['id']);
				if (!empty($hasil)){
					echo serialize( $hasil );
				}else{
					echo '';
				}
			}
		}
	}

	public function db_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ])){
				$this->load->model( 'Search', 'search' );
				$msales = $this->search->search_sal( $_POST['key']);
				echo serialize( $msales );
			}
		}
	}

	public function db_read_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ])){
				$hasil=$this->msales->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['nama_sales'];
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
	
	public function db_read_MAWB_no()
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
				$this->load->model( 'Sea_quot', 'air_quot' );
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

	public function db_air_gross_profit_import()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mcustomer = $this->search->search_air_gross_profit_import( $_POST['key']);
				echo serialize( $mcustomer );
			}
		}
	}

	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ] ) ){
				echo $this->tair_gross_profit_import->lastid( $_POST['tanggal'] );
			}
		}
	}

	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_air_gross_profit_import', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['gp_no'] )
					&& isset( $_POST['order_date'] )
				){
					$baris=1;
					if (empty($_POST['gp_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='GP Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['order_date']) || !$this->emkl->cek_format_tanggal( $_POST['order_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order date must be in format dd-MM-yyyy.';
					}else{
						$air_gross_revenue = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-revenue' ]; $i++ ){
							if( isset( $_POST[ 'revenue' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'customer_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'customer_description' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'unit_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'currency_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'rata_charges'])
								&& ! empty( $_POST[ 'revenue' ][ $i ][ 'charges_code' ] )
							){
								
								if (empty($_POST[ 'revenue' ][ $i ][ 'charges_code' ])){
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'revenue' ][ $i ][ 'rata_charges' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'revenue' ][ $i ][ 'rata_charges' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Rata Charges in Line '. $baris .'  <strong>MUST</strong> Numeric.';
								}else{
									$baris++;
								}
								$grid_revenue = array(
									'gp_no' => $_POST['gp_no']
									, 'charges_code' => $_POST[ 'revenue' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'revenue' ][ $i ][ 'charges_description' ]
									, 'customer_id' => $_POST[ 'revenue' ][ $i ][ 'customer_id' ]
									, 'customer_description' => $_POST[ 'revenue' ][ $i ][ 'customer_description' ]
									, 'unit_id' => $_POST[ 'revenue' ][ $i ][ 'unit_id' ]
									, 'currency_id' => $_POST[ 'revenue' ][ $i ][ 'currency_id' ]
									, 'rata_charges' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'revenue' ][ $i ][ 'rata_charges' ] ) )
								);
								$air_gross_revenue[] = $grid_revenue;
							}
						}
						$air_gross_cost = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-cost' ]; $i++ ){
							if( isset( $_POST[ 'cost' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'vendor_description' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'unit_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'currency_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'rata_charges' ] )
								&& ! empty( $_POST[ 'cost' ][ $i ][ 'charges_code' ] )
							){
								
								if (empty($_POST[ 'cost' ][ $i ][ 'charges_code' ])){
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'cost' ][ $i ][ 'rata_charges' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'cost' ][ $i ][ 'rata_charges' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Rata Charges in Line '. $baris .'  <strong>MUST</strong> Numeric.';
								}else{
									$baris++;
								}
								$grid_cost = array(

									'gp_no' => $_POST['gp_no']
									, 'charges_code' => $_POST[ 'cost' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'cost' ][ $i ][ 'charges_description' ]
									, 'vendor_id' => $_POST[ 'cost' ][ $i ][ 'vendor_id' ]
									, 'vendor_description' => $_POST[ 'cost' ][ $i ][ 'vendor_description' ]
									, 'unit_id' => $_POST[ 'cost' ][ $i ][ 'unit_id' ]
									, 'currency_id' => $_POST[ 'cost' ][ $i ][ 'currency_id' ]
									, 'rata_charges' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'cost' ][ $i ][ 'rata_charges' ] ) )
								);
								$air_gross_cost[] = $grid_cost;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Revenue Or Cost grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'air_gross_profit_import', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['gp_no'] = $_POST['gp_no'];
					$data['order_date'] = $this->emkl->change_format( $_POST['order_date'] );
					$data['MAWB_no'] = $_POST['MAWB_no'];
					$data['POL_id'] = $_POST['POL_id'];
					$data['POL_description'] = $_POST['POL_description'];
					$data['POD_id'] = $_POST['POD_id'];
					$data['POD_description'] = $_POST['POD_description'];
					$data['etd'] = $this->emkl->change_format( $_POST['etd']);
					$data['sales_id'] = $_POST['sales_id'];
					$data['sales_description'] = $_POST['sales_description'];
					$data['prepared'] = $_POST['prepared'];
					$data['approved'] = $_POST['approved'];
					$data['remarks'] = $_POST['remarks'];
					$data['total_revenue'] = $_POST['total_revenue'];
					$data['total_cost'] = $_POST['total_cost'];
					$data['created'] = $this->emkl->waktu_saat_ini();
					$data['creator'] = $this->tank_auth->get_user_id();
					$hasil=$this->tair_gross_profit_import->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->tair_gross_profit_import_revenue->clean( $_POST['gp_no']);
						if (isset($air_gross_revenue) && !empty($air_gross_revenue)){
							if (!$this->tair_gross_profit_import_revenue->create( $air_gross_revenue )){
								$hasil=false;
							}
						}
						if (isset($air_gross_cost) && !empty($air_gross_cost)){
							if (!$this->tair_gross_profit_import_cost->create( $air_gross_cost )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->tair_gross_profit_import->delete( $_POST['gp_no']);
							$this->tair_gross_profit_import_revenue->clean( $_POST['gp_no'] );
							$this->tair_gross_profit_import_cost->clean( $_POST['gp_no'] );
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
		$this->xlog->record( 'create', 'air_gross_profit_import', $resulttrnx );
		
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$air_gross_profit = $this->tair_gross_profit_import->read( $_POST['id'] );
				if( ! empty( $air_gross_profit ) ){
					$air_gross_profit['revenue'] = $this->tair_gross_profit_import_revenue->load( $_POST['id']);
					$air_gross_profit['cost'] = $this->tair_gross_profit_import_cost->load( $_POST['id']);
					echo serialize( $air_gross_profit );
				}
			}
		}
	}

	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_air_gross_profit_import', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['gp_no'] )
					&& isset( $_POST['order_date'] )
				){
					$baris=1;
					if (empty($_POST['gp_no']) ){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Gp Number <strong>MUST</strong> be filled.';
					}elseif (empty($_POST['order_date']) || !$this->emkl->cek_format_tanggal( $_POST['order_date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Order date must be in format dd-MM-yyyy.';
					}else{
						$air_gross_revenue = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-revenue' ]; $i++ ){
							if( isset( $_POST[ 'revenue' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'customer_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'customer_description' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'unit_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'currency_id' ] )
								&& isset( $_POST[ 'revenue' ][ $i ][ 'rata_charges' ] )
								&& ! empty( $_POST[ 'revenue' ][ $i ][ 'charges_code' ] )

							){
								if (empty($_POST[ 'revenue' ][ $i ][ 'charges_code' ])){
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'revenue' ][ $i ][ 'rata_charges' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'revenue' ][ $i ][ 'rata_charges' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Rata Charges in line '. $baris .'  <strong>MUST</strong> Numeric.';
								}else{
									$baris++;
								}
								$grid_revenue = array(
									'gp_no' => $_POST['gp_no']
									, 'charges_code' => $_POST[ 'revenue' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'revenue' ][ $i ][ 'charges_description' ]
									, 'customer_id' => $_POST[ 'revenue' ][ $i ][ 'customer_id' ]
									, 'customer_description' => $_POST[ 'revenue' ][ $i ][ 'customer_description' ]
									, 'unit_id' => $_POST[ 'revenue' ][ $i ][ 'unit_id' ]
									, 'currency_id' => $_POST[ 'revenue' ][ $i ][ 'currency_id' ]
									, 'rata_charges' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'revenue' ][ $i ][ 'rata_charges' ] ) )
								);
								$air_gross_revenue[] = $grid_revenue;
							}
						}
						if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
							$resulttrn['status']='Error';
							$resulttrn['ket']='Revenue Or Cost grid <strong>MUST</strong> be filled.';
						}
						$air_gross_cost = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-cost' ]; $i++ ){
							if( isset( $_POST[ 'cost' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'vendor_description' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'unit_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'currency_id' ] )
								&& isset( $_POST[ 'cost' ][ $i ][ 'rata_charges' ] )
								&& ! empty( $_POST[ 'cost' ][ $i ][ 'charges_code' ] )
							){
								
								if (empty($_POST[ 'cost' ][ $i ][ 'charges_code' ])){
								}
								elseif (!is_numeric( str_replace(",","", $_POST[ 'cost' ][ $i ][ 'rata_charges' ]  )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "",  $_POST[ 'cost' ][ $i ][ 'rata_charges' ] ) ) )){					
									$resulttrn['status']='Error';
									$resulttrn['ket']='Rata Charges in Line '. $baris .'  <strong>MUST</strong> Numeric.';
								}else{
									$baris++;
								}
								$grid_cost = array(

									'gp_no' => $_POST['gp_no']
									, 'charges_code' => $_POST[ 'cost' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'cost' ][ $i ][ 'charges_description' ]
									, 'vendor_id' => $_POST[ 'cost' ][ $i ][ 'vendor_id' ]
									, 'vendor_description' => $_POST[ 'cost' ][ $i ][ 'vendor_description' ]
									, 'unit_id' => $_POST[ 'cost' ][ $i ][ 'unit_id' ]
									, 'currency_id' => $_POST[ 'cost' ][ $i ][ 'currency_id' ]
									, 'rata_charges' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'cost' ][ $i ][ 'rata_charges' ] ) )
								);
								$air_gross_cost[] = $grid_cost;
							}
						}
	
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Revenue or Cost Grid <strong>MUST</strong> be filled.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'air_gross_profit_import', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['gp_no'] = $_POST['gp_no'];
					$data['order_date'] = $this->emkl->change_format( $_POST['order_date'] );
					$data['MAWB_no'] = $_POST['MAWB_no'];
					$data['POL_id'] = $_POST['POL_id'];
					$data['POL_description'] = $_POST['POL_description'];
					$data['POD_id'] = $_POST['POD_id'];
					$data['POD_description'] = $_POST['POD_description'];
					$data['etd'] = $this->emkl->change_format( $_POST['etd']);
					$data['sales_id'] = $_POST['sales_id'];
					$data['sales_description'] = $_POST['sales_description'];
					$data['prepared'] = $_POST['prepared'];
					$data['approved'] = $_POST['approved'];
					$data['remarks'] = $_POST['remarks'];
					$data['total_revenue'] = $_POST['total_revenue'];
					$data['total_cost'] = $_POST['total_cost'];
					$data['modified'] = $this->emkl->waktu_saat_ini();
					$data['modifier'] = $this->tank_auth->get_user_id();
					$hasil=$this->tair_gross_profit_import->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->tair_gross_profit_import_revenue->clean( $_POST['gp_no']);
						$this->tair_gross_profit_import_cost->clean( $_POST['gp_no']);
						if (isset($air_gross_revenue) && !empty($air_gross_revenue)){
							if (!$this->tair_gross_profit_import_revenue->create( $air_gross_revenue )){
								$hasil=false;
							}
						}
						if (isset($air_gross_cost) && !empty($air_gross_cost)){
							if (!$this->tair_gross_profit_import_cost->create( $air_gross_cost )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->tair_gross_profit_import_revenue->clean( $_POST['gp_no'] );
							$this->tair_gross_profit_import_cost->clean( $_POST['gp_no'] );
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
			$resulttrn['ket']='AYou do not Have Access to The Data Store.';
		}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'air_gross_profit_import', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_delete()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'delete_air_gross_profit_import', unserialize( $this->tank_auth->get_capabilities() ) )){

			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id'] )
					&& !empty( $_POST['id'] )
				){
				

					if ($this->tair_gross_profit_import->delete( $_POST['id'] )){
						$this->tair_gross_profit_import_revenue->clean( $_POST['id']);
						$this->tair_gross_profit_import_cost->clean( $_POST['id']);
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
			$resulttrn['ket']='You do not Have Access to The Data Store.';
		}
			$resulttrnx['status']=$resulttrn['status'];
			$resulttrnx['ket']=$resulttrn['ket'];
			$resulttrnx['isi']=$_POST;
			$this->xlog->record( 'delete', 'air_gross_profit_import', $resulttrnx );
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