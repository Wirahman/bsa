<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sea_quotation extends CI_Controller {
    private $controller = 'transaksi/sea_quotation';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Sea_quot', 'sea_quot' );
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Sea_quot_transaksi', 'sea_quot_transaksi' );
		$this->load->model( 'Mcompany', 'mcompany' );
		$this->load->model( 'Mcustomer', 'mcustomer' );
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
			if( in_array( 'read_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'sea_quotation', '' );
				$this->load->view('transaksi/sea_quotation/index', $data);
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
	
	public function db_sea_quotation()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sea_quot = $this->search->search_sea_quot( $_POST[ 'key' ] );
				echo serialize( $sea_quot );
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
				$sea_quot = $this->search->search_sea_quot( $_POST[ 'key' ], $_POST[ 'cond1' ] );
				echo serialize( $sea_quot );
			}
		}
	}
	
	
	public function db_seaport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$mseaport = $this->search->search_seaport( $_POST['key'],true );
				echo serialize( $mseaport );
			}
		}
	}

	public function load_seaport()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Mseaport', 'mseaport' );
				$mseaport = $this->mseaport->read( $_POST['id'] );
				echo serialize( $mseaport);
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
		
	public function db_pr_sea()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$pr_sea = $this->search->search_pr_sea( $_POST['key'],true );
				echo serialize( $pr_sea );
			}
		}
	}

	public function load_pr_sea()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Pr_sea', 'pr_sea' );
				$pr_sea = $this->pr_sea->read( $_POST['id'] );
				echo serialize( $pr_sea );
			}
		}
	}
	public function db_sea_quot()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sea_quot = $this->search->search_sea_quot( $_POST['key'],true );
				echo serialize( $sea_quot );
			}
		}
	}

	public function load_sea_quot()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Sea_quot', 'sea_quot' );
				$sea_quot = $this->sea_quot->read( $_POST['id'] );
				echo serialize( $sea_quot);
			}
		}
	}
		
	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'tanggal' ] ) ){
				echo $this->sea_quot->lastid( $_POST['tanggal'] );
			}
		}
	}
	
	//tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code , vendor_id: vendorid , portawal : port_awal, portakhir: port_akhir
	public function load_base_rate()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'vendor_id' ] ) ){
				$this->load->model( 'Sea_quot_transaksi', 'sea_quot_transaksi' );
				$sea_quot_transaksi = $this->sea_quot_transaksi->load_base_rate( $_POST['vendor_id'], $_POST['tgl_from'], $_POST['tgl_until'], $_POST['charges'], $_POST['portawal'], $_POST['portakhir'] );
				echo serialize ($sea_quot_transaksi );
				// echo json_encode( $sea_quot_transaksi );
			}
		}
	}
		
		// public function load_base_rate()
	// {
		// if ($this->tank_auth->is_logged_in()) {
			// if( isset( $_POST[ 'tglawal' ] )
				// && isset( $_POST['tglakhir'])
				// && isset( $_POST['vendorid'])
				// && isset( $_POST['charges_code'])
				// && isset( $_POST['port_awal'])
				// && isset( $_POST['port_akhir'])
				// ){
				// $this->load->model( 'Sea_quot_transaksi', 'sea_quot_transaksi' );
				// $sea_quot_transaksi = $this->sea_quot_transaksi->load( $_POST['tglawal'], $_POST['tglakhir'], $_POST['vendorid'],$_POST['charges_code'],$_POST['port_awal'],$_POST['port_akhir']);
				//////////////////////////////echo serialize ($sea_quot_transaksi );
				// echo json_encode( $sea_quot_transaksi );
			// }
		// }
	// }
	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['quot_id'] )
					&& isset( $_POST['date'] )
					&& isset( $_POST['type'])
					&& isset( $_POST['attn'] )
					&& isset( $_POST['re'] )
					&& isset( $_POST['valid_from'] )
					&& isset( $_POST['valid_until'] )
					&& isset( $_POST['cus_id'] )
					&& isset( $_POST['customer_name'])
					&& isset( $_POST['sales_code'] )
					&& isset( $_POST['term_cond'] )
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
					}elseif (empty($_POST['type'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']= 'Type<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['attn'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Attn<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['re'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Re<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['valid_from']) || !$this->emkl->cek_format_tanggal( $_POST['valid_from'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Valid From must filled with format dd-MM-yyyy.';
					}elseif (empty($_POST['valid_until']) || !$this->emkl->cek_format_tanggal( $_POST['valid_until'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Valid Until must filled with format dd-MM-yyyy.';
					}elseif (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Customer ID<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sales Code<strong> REQUIRED</strong>.';
					}else{
						$sea_quot_transaksi = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-sea-quotation' ]; $i++ ){
							if( isset( $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin'])
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'selling_rate' ]) 
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin'])
								&& ! empty( $_POST[ 'sea_quotation' ][ $i] [ 'selling_rate'])
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ] )
							){
						if(empty($_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'quot_id' => $_POST['quot_id']
									, 'charges_code' => $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ]
									, 'code_awal' => $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ]
									, 'unit_description' => $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ]
									, 'currency_code' => $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ]
									, 'currency_description' => $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ]
									, 'vendor_id' => $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ]
									, 'vendor_name' => $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ]
									, 'base_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] ) )
									, 'additional_margin' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin' ] ) )
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'selling_rate' ] ) )
									, 'approval_desc' => $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ]
									
								);
								if(isset( $_POST[ 'sea_quotation' ][ $i ]['approval_number'] ))
									{
										$jadwal['approval_number'] = 1;	
									}
									else
									{
										$jadwal['approval_number'] = 0;	
									}
								$sea_quot_transaksi[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'sea_quotation', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['quot_id'] = $_POST['quot_id'];
					$data['date'] = $this->emkl->change_format($_POST['date']);
					$data['type'] = $_POST['type'];
					$data['attn'] = $_POST['attn'];
					$data['re'] = $_POST['re'];
					$data['valid_from'] = $this->emkl->change_format($_POST['valid_from']);
					$data['valid_until'] = $this->emkl->change_format($_POST['valid_until']);
					$data['cus_id'] = $_POST['cus_id'];
					$data['customer_name'] = $_POST['customer_name'];
					$data['sales_code'] = $_POST['sales_code'];
					$data['term_cond'] = $_POST['term_cond'];
					$data['sales_note'] = $_POST['sales_note'];
					$data['manager_note'] = $_POST['manager_note'];
					$data['director_note'] = $_POST['director_note'];
					
					if(isset( $_POST['notes1'] ))
					{
						$data['notes1'] = 1;	
					}
					else
					{
						$data['notes1'] = 0;	
					}
					if(isset( $_POST['notes2'] ))
					{
						$data['notes2'] = 1;	
					}
					else
					{
						$data['notes2'] = 0;	
					}
					if(isset( $_POST['notes3'] ))
					{
						$data['notes3'] = 1;	
					}
					else
					{
						$data['notes3'] = 0;	
					}
					if(isset( $_POST['notes4'] ))
					{
						$data['notes4'] = 1;	
					}
					else
					{
						$data['notes4'] = 0;	
					}
					if(isset( $_POST['notes5'] ))
					{
						$data['notes5'] = 1;	
					}
					else
					{
						$data['notes5'] = 0;	
					}
					if(isset( $_POST['notes6'] ))
					{
						$data['notes6'] = 1;	
					}
					else
					{
						$data['notes6'] = 0;	
					}
					if(isset( $_POST['notes7'] ))
					{
						$data['notes7'] = 1;	
					}
					else
					{
						$data['notes7'] = 0;	
					}
					if(isset( $_POST['notes8'] ))
					{
						$data['notes8'] = 1;	
					}
					else
					{
						$data['notes8'] = 0;	
					}
					if(isset( $_POST['notes9'] ))
					{
						$data['notes9'] = 1;	
					}
					else
					{
						$data['notes9'] = 0;	
					}
					if(isset( $_POST['notes10'] ))
					{
						$data['notes10'] = 1;	
					}
					else
					{
						$data['notes10'] = 0;	
					}
					if(isset( $_POST['notes11'] ))
					{
						$data['notes11'] = 1;	
					}
					else
					{
						$data['notes11'] = 0;	
					}
					if(isset( $_POST['notes12'] ))
					{
						$data['notes12'] = 1;	
					}
					else
					{
						$data['notes12'] = 0;	
					}
					if(isset( $_POST['notes13'] ))
					{
						$data['notes13'] = 1;	
					}
					else
					{
						$data['notes13'] = 0;	
					}
					if(isset( $_POST['notes14'] ))
					{
						$data['notes14'] = 1;	
					}
					else
					{
						$data['notes14'] = 0;	
					}
					if(isset( $_POST['notes15'] ))
					{
						$data['notes15'] = 1;	
					}
					else
					{
						$data['notes15'] = 0;	
					}
					if(isset( $_POST['notes1'] ))
					{
						$data['notes_export1'] = 1;	
					}
					else
					{
						$data['notes_export1'] = 0;	
					}
					if(isset( $_POST['notes_export2'] ))
					{
						$data['notes_export2'] = 1;	
					}
					else
					{
						$data['notes_export2'] = 0;	
					}
					if(isset( $_POST['notes_export3'] ))
					{
						$data['notes_export3'] = 1;	
					}
					else
					{
						$data['notes_export3'] = 0;	
					}
					if(isset( $_POST['notes_export4'] ))
					{
						$data['notes_export4'] = 1;	
					}
					else
					{
						$data['notes_export4'] = 0;	
					}
					if(isset( $_POST['notes_export5'] ))
					{
						$data['notes_export5'] = 1;	
					}
					else
					{
						$data['notes_export5'] = 0;	
					}
					if(isset( $_POST['notes_export6'] ))
					{
						$data['notes_export6'] = 1;	
					}
					else
					{
						$data['notes_export6'] = 0;	
					}
					if(isset( $_POST['notes_export7'] ))
					{
						$data['notes_export7'] = 1;	
					}
					else
					{
						$data['notes_export7'] = 0;	
					}
				
					$hasil=$this->sea_quot->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data Already Exist.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->sea_quot_transaksi->clean( $_POST['quot_id']);
						if (isset($sea_quot_transaksi) && !empty($sea_quot_transaksi)){
							if (!$this->sea_quot_transaksi->create( $sea_quot_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->sea_quot->delete( $_POST['quot_id']);
							$this->sea_quot_transaksi->clean( $_POST['quot_id']);
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
		$this->xlog->record( 'create', 'sea_quotation', $resulttrnx );
		
		echo serialize($resulttrn);
	}
	
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['quot_id'] )
				&& ! empty( $_POST['quot_id'] )
			){
				$sea_quot = $this->sea_quot->read( $_POST['quot_id']);
				if( ! empty( $sea_quot ) ){
					$sea_quot['jadwal'] = $this->sea_quot_transaksi->load( $_POST['quot_id']);
					if( ! empty( $sea_quot['jadwal'] ) ){
						echo serialize( $sea_quot );
					}
				}
			}
		}
	}
	
	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['quot_id'] )
					&& isset( $_POST['date'] )
					&& isset( $_POST['type'] )
					&& isset( $_POST['attn'] )
					&& isset( $_POST['re'] )
					&& isset( $_POST['valid_from'] )
					&& isset( $_POST['valid_until'] )
					&& isset( $_POST['cus_id'] )
					&& isset( $_POST['customer_name'] )
					&& isset( $_POST['sales_code'] )
					&& isset( $_POST['term_cond'] )
					&& isset( $_POST['sales_note'] )
					&& isset( $_POST['manager_note'] )
					&& isset( $_POST['director_note'] )
				){
				$baris=1;
					if (empty($_POST['quot_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Quotation No <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['date']) || !$this->emkl->cek_format_tanggal( $_POST['date'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must format<strong> dd-MM-yyyy.</strong>.';
					}elseif (empty($_POST['type'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Type <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['attn'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Attn <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['re'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Re <strong> REQUIRED</strong>.';
					}elseif (empty($_POST['valid_from']) || !$this->emkl->cek_format_tanggal( $_POST['valid_from'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must format<strong> dd-MM-yyyy.</strong>.';
					}elseif (empty($_POST['valid_until']) || !$this->emkl->cek_format_tanggal( $_POST['valid_until'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Date must format<strong> dd-MM-yyyy.</strong>.';
					}elseif (empty($_POST['cus_id'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Customer Name<strong> REQUIRED</strong>.';
					}elseif (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sales Name <strong> REQUIRED</strong>.';
					}else{
						$sea_quot_transaksi = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-sea-quotation' ]; $i++ ){
							if( isset( $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'selling_rate' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ] )
								&& isset( $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'selling_rate' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ] )
								&& ! empty( $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ] )
								){
							if (empty($_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'quot_id' => $_POST['quot_id']
									, 'charges_code' => $_POST[ 'sea_quotation' ][ $i ][ 'charges_code' ]
									, 'charges_description' => $_POST[ 'sea_quotation' ][ $i ][ 'charges_description' ]
									, 'code_awal' => $_POST[ 'sea_quotation' ][ $i ][ 'code_awal' ]
									, 'port_awal' => $_POST[ 'sea_quotation' ][ $i ][ 'port_awal' ]
									, 'code_akhir' => $_POST[ 'sea_quotation' ][ $i ][ 'code_akhir' ]
									, 'port_akhir' => $_POST[ 'sea_quotation' ][ $i ][ 'port_akhir' ]
									, 'unit_code' => $_POST[ 'sea_quotation' ][ $i ][ 'unit_code' ]
									, 'unit_description' => $_POST[ 'sea_quotation' ][ $i ][ 'unit_description' ]
									, 'currency_code' => $_POST[ 'sea_quotation' ][ $i ][ 'currency_code' ]
									, 'currency_description' => $_POST[ 'sea_quotation' ][ $i ][ 'currency_description' ]
									, 'vendor_id' => $_POST[ 'sea_quotation' ][ $i ][ 'vendor_id' ]
									, 'vendor_name' => $_POST[ 'sea_quotation' ][ $i ][ 'vendor_name' ]
									, 'base_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'base_rate' ] ) )
									, 'additional_margin' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'additional_margin' ] ) )
									, 'selling_rate' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sea_quotation' ][ $i ][ 'selling_rate' ] ) )
									, 'approval_desc' => $_POST[ 'sea_quotation' ][ $i ][ 'approval_desc' ]
								
								);
								if(isset( $_POST[ 'sea_quotation' ][ $i ]['approval_number'] ))
									{
										$jadwal['approval_number'] = 1;	
									}
									else
									{
										$jadwal['approval_number'] = 0;	
									}
								$sea_quot_transaksi[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'sea_quotation', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['quot_id'] = $_POST['quot_id'];
					$data['date'] = $this->emkl->change_format($_POST['date']);
					$data['type'] = $_POST['type'];
					$data['attn'] = $_POST['attn'];
					$data['re'] = $_POST['re'];
					$data['valid_from'] = $this->emkl->change_format($_POST['valid_from']);
					$data['valid_until'] = $this->emkl->change_format($_POST['valid_until']);
					$data['cus_id'] = $_POST['cus_id'];
					$data['customer_name'] = $_POST['customer_name'];
					$data['sales_code'] = $_POST['sales_code'];
					$data['term_cond'] = $_POST['term_cond'];
					$data['sales_note'] = $_POST['sales_note'];
					$data['manager_note'] = $_POST['manager_note'];
					$data['director_note'] = $_POST['director_note'];
					
					if(isset( $_POST['notes1'] ))
					{
						$data['notes1'] = 1;	
					}
					else
					{
						$data['notes1'] = 0;	
					}
					if(isset( $_POST['notes2'] ))
					{
						$data['notes2'] = 1;	
					}
					else
					{
						$data['notes2'] = 0;	
					}
					if(isset( $_POST['notes3'] ))
					{
						$data['notes3'] = 1;	
					}
					else
					{
						$data['notes3'] = 0;	
					}
					if(isset( $_POST['notes4'] ))
					{
						$data['notes4'] = 1;	
					}
					else
					{
						$data['notes4'] = 0;	
					}
					if(isset( $_POST['notes5'] ))
					{
						$data['notes5'] = 1;	
					}
					else
					{
						$data['notes5'] = 0;	
					}
					if(isset( $_POST['notes6'] ))
					{
						$data['notes6'] = 1;	
					}
					else
					{
						$data['notes6'] = 0;	
					}
					if(isset( $_POST['notes7'] ))
					{
						$data['notes7'] = 1;	
					}
					else
					{
						$data['notes7'] = 0;	
					}
					if(isset( $_POST['notes8'] ))
					{
						$data['notes8'] = 1;	
					}
					else
					{
						$data['notes8'] = 0;	
					}
					if(isset( $_POST['notes9'] ))
					{
						$data['notes9'] = 1;	
					}
					else
					{
						$data['notes9'] = 0;	
					}
					if(isset( $_POST['notes10'] ))
					{
						$data['notes10'] = 1;	
					}
					else
					{
						$data['notes10'] = 0;	
					}
					if(isset( $_POST['notes11'] ))
					{
						$data['notes11'] = 1;	
					}
					else
					{
						$data['notes11'] = 0;	
					}
					if(isset( $_POST['notes12'] ))
					{
						$data['notes12'] = 1;	
					}
					else
					{
						$data['notes12'] = 0;	
					}
					if(isset( $_POST['notes13'] ))
					{
						$data['notes13'] = 1;	
					}
					else
					{
						$data['notes13'] = 0;	
					}
					if(isset( $_POST['notes14'] ))
					{
						$data['notes14'] = 1;	
					}
					else
					{
						$data['notes14'] = 0;	
					}
					if(isset( $_POST['notes15'] ))
					{
						$data['notes15'] = 1;	
					}
					else
					{
						$data['notes15'] = 0;	
					}if(isset( $_POST['notes_export1'] ))
					{
						$data['notes_export1'] = 1;	
					}
					else
					{
						$data['notes_export1'] = 0;	
					}
					if(isset( $_POST['notes_export2'] ))
					{
						$data['notes_export2'] = 1;	
					}
					else
					{
						$data['notes_export2'] = 0;	
					}
					if(isset( $_POST['notes_export3'] ))
					{
						$data['notes_export3'] = 1;	
					}
					else
					{
						$data['notes_export3'] = 0;	
					}
					if(isset( $_POST['notes_export4'] ))
					{
						$data['notes_export4'] = 1;	
					}
					else
					{
						$data['notes_export4'] = 0;	
					}
					if(isset( $_POST['notes_export5'] ))
					{
						$data['notes_export5'] = 1;	
					}
					else
					{
						$data['notes_export5'] = 0;	
					}
					if(isset( $_POST['notes_export6'] ))
					{
						$data['notes_export6'] = 1;	
					}
					else
					{
						$data['notes_export6'] = 0;	
					}
					if(isset( $_POST['notes_export7'] ))
					{
						$data['notes_export7'] = 1;	
					}
					else
					{
						$data['notes_export7'] = 0;	
					}
				
				
					$hasil=$this->sea_quot->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->sea_quot_transaksi->clean( $_POST['quot_id'] );
						if (isset($sea_quot_transaksi) && !empty($sea_quot_transaksi)){
							if (!$this->sea_quot_transaksi->create( $sea_quot_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->sea_quot_transaksi->clean( $_POST['quot_id'] );
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
		$this->xlog->record( 'update', 'sea_quotation', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'delete_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){
	if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['quot_id'] )
				&& !empty( $_POST['quot_id'] )
			){
			if ($this->sea_quot->delete( $_POST['quot_id'])){
				$this->sea_quot_transaksi->clean( $_POST['quot_id']);
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
		$this->xlog->record( 'delete', 'sea_quotation', $resulttrnx );
		echo serialize($resulttrn);
	}
	
	public function kepala($baris,$no,$pdf,$kode,$hal)
	{
	if ((($no-1) % $baris===0) || ($no===1)){
		$pdf->AddPage(); 
		$pdf->SetAutoPageBreak(false, 0);
		$pdf->SetFont( 'Arial','B',12 );
		$pdf->Cell( 325, 6, 'Sea Quotation', '', 1, 'C' );	
		$pdf->SetFont( 'Arial','',9 );
		$pdf->Cell(90, 5, 'SERVICE', 1, 0, 'C');
		$pdf->Cell(90, 5, '40`/HC (IDR)', 1, 1, 'C');
	}
	}

	public function import()
	{if(!in_array( 'read_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'sea_quot', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');
			
			$mcompany = $this->mcompany->all();
			if( ! empty( $mcompany ) ){
				foreach( $mcompany as $bsa ){

			$pdf = new FPDF( 'P', 'mm', 'A4' );
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Image('img/bsa.jpg' ,5,8,10,10);
			$pdf->Cell(40, 2 , 'Bina Sinar Amity', 0, 1, 'C');
			$pdf->Cell(30, 8 , 'Logistics', 0, 1, 'C');
			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell(25, 5, 'Makes Business Simple', 0, 1, 'C');
			
			$pdf->Cell( 195, 10, 'Sea Quotation', 0, 1, 'C' );
			
			// $pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			// $pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			// $pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			// $pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );

			}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
			}
			
			//$mcustomer = $this->mcustomer->read( $_POST['id'], 'shipper');
			$mcustomer = $this->mcustomer->all();
			$sea_quot = $this->sea_quot->all();
			if(!empty($sea_quot)){
				foreach($sea_quot as $seaquot){
					
					$pdf->SetFont('Arial', '',10 );
					$pdf->Cell(25, 5, 'No', 1, 0,'L');
					$pdf->Cell(70, 5, $seaquot['quot_id'],1,0,'L' );
					$pdf->Cell(25, 5, 'To', 1, 0,'L');
					$pdf->Cell(70, 5, $seaquot['customer_name'],1,1,'L' );
					$pdf->Cell(25, 5, 'Date', 1, 0,'L');
					$pdf->Cell(70, 5, $seaquot['date'],1,0,'L' );
					$pdf->Cell(25, 5, 'Attn', 1, 0,'L');
					$pdf->Cell(70, 5, $seaquot['attn'],1,1,'L' );
					$pdf->Cell(25, 10, 'Re', 1, 0,'L');
					$pdf->Cell(70, 10, $seaquot['re'],1,0,'L' );
					$pdf->Cell(25, 5, 'Fax', 1, 0, 'L');
					//$pdf->Cell(70, 5, $mcustomer['fax'], 1, 1, 'L');
					$pdf->Cell(70, 5, $mcustomer[0]['fax'], 1, 1, 'L');
					$pdf->Cell(25, 0, '', 0, 0, '');
					$pdf->Cell(70, 0, '', 0, 0, '');
					$pdf->Cell(25, 5, 'Phone', 1, 0,'L');
					// $pdf->Cell(70, 5, $mcustomer['phone'],1,1,'L' );
					$pdf->Cell(70, 5, $mcustomer[0]['phone'],1,1,'L' );
					}
				}

				$pdf->Cell(25, 5, '', 0, 1,'L');
				$pdf->Cell(10, 5, 'Dear ', 0, 0,'L');
				$pdf->Cell(100, 5, $sea_quot[0]['attn'], 0, 1,'L');
				$pdf->Cell(150, 5, 'Thank you for your interest to use our logistics services. Herewith we are pleased to offer our rates as follow : ', 0, 1,'L');
				$pdf->Cell(70, 5, '', 0, 1, '');
				$pdf->Cell(90, 5, 'SERVICE', 1, 0, 'C');
				// $pdf->Cell(90, 5, '40`/HC(IDR)', 1, 1, 'C');
				//$pdf->Cell.............
				//unit (currency)
				//unit = 40`/HC
				//currency = (IDR)
				
	
			$sea_quot_transaksi = $this->sea_quot_transaksi->all();
			$sea_quot_transaksi_unit20 = $this->sea_quot_transaksi->unit_20();
			$sea_quot_transaksi_unit40 = $this->sea_quot_transaksi->unit_40();
			$pdf->Cell(40, 5, $sea_quot_transaksi_unit20['unit_description'], 'TBL', 0, 'R');
			$pdf->Cell(10, 5, '/', 'TB', 0, 'C');
			$pdf->Cell(40, 5, $sea_quot_transaksi[0]['currency_description'], 'TBR', 1, 'L');
			if(!empty($sea_quot_transaksi)){
				foreach($sea_quot_transaksi as $sqt){
					$pdf->SetFont('Arial', '',10 );
					// $pdf->Cell(40, 5, $sqt['unit_description'], 'TBL', 0, 'R');
					// $pdf->Cell(10, 5, '/', 'TB', 0, 'C');
					// $pdf->Cell(40, 5, $sqt['currency_description'], 'TBR', 1, 'L');
					$pdf->Cell(90, 5, $sqt['charges_description'], 1, 0, 'L');
					$pdf->Cell(40, 5, $sqt['base_rate'], 'TB', 0, 'C');
					$pdf->Cell(10, 5, '/', 'TB', 0, 'C');
					$pdf->Cell(40, 5, $sqt['approval_desc'], 'TBR', 1, 'C');
					}
				}
			$sea_quot = $this->sea_quot->all();
			if(!empty($sea_quot)){
				foreach($sea_quot as $sq){
				$pdf->Cell(70, 5, '', 0, 1, '');
				/////////////////////////////////////////////Untuk Cetak Notes Yang sudah Diisi
				$pdf->Cell(100, 5, 'Notes: ', 0, 1, 'L');
				//$klasifikasi="";
				// $klasifikasi1="";
				// $klasifikasi2="";
				// $klasifikasi3="";
					if($sq['notes1']==1)
					{
						$pdf->Cell(200, 5, "- Tariff effective on January 19, 2014.", 0, 1, 'L');
					}
					if($sq['notes2']==1)
					{
						$pdf->Cell(200, 5, "- For certain cases(Hi Co Scan, cargo discrepancy, etc.) We will ask for approval of the cost occurred.", 0, 1, 'L');
					}
					if($sq['notes3']==1)
					{
						$pdf->Cell(200, 5, "- Above Tariff excluding VAT /PPN, PPH, Cost labor load and Cargo Insurance. ", 0, 1, 'L');
					}
					if($sq['notes4']==1)
					{
						$pdf->Cell(200, 5, "- Third party charges(Shipping Line, Pelindo, etc) such as THC, Agency Fee, Doc. Fee & admin fee, Lift On / Off , ", 0, 1, 'L');
						$pdf->Cell(119, 5, "Storage Charges, demurrage and others will be charged as per receipt. ", 0, 1, 'C');
					}
					if($sq['notes5']==1)
					{
						$pdf->Cell(200, 5, "- Handling Red Line including Bahandle. ", 0, 1, 'L');
					}
					if($sq['notes6']==1)
					{
						$pdf->Cell(200, 5, "- Tariff excluding insurance 0,15% of total value / total invoice.", 0, 1, 'L');
					}
					if($sq['notes7']==1)
					{
						$pdf->Cell(200, 5, "- Overnight Charges 50% of tariff will be imposed to customer if trucking stay more than 18 hours. ", 0, 1, 'L');
					}
					if($sq['notes8']==1)
					{
						$pdf->Cell(200, 5, "- Overnight Charges 100% of tariff will be imposed to customer if trucking stay more than 24 hours multication. ", 0, 1, 'L');
					}
					if($sq['notes9']==1)
					{
						$pdf->Cell(200, 5, "- Term Of Payment: 30 Days after invoice received by Consignee / Importer. ", 0, 1, 'L');
					}
					if($sq['notes10']==1)
					{
						$pdf->Cell(200, 5, "- Excluding any import duties and taxes due to customs clearance process. ", 0, 1, 'L');
					}
					if($sq['notes11']==1)
					{
						$pdf->Cell(200, 5, "- Any Other Fine cause by wrong declaration of cargo by consignee will be under consignee account. ", 0, 1, 'L');
					}
					if($sq['notes12']==1)
					{
						$pdf->Cell(200, 5, "- Customs clearance process throught after EDI respon : ", 0, 1, 'L');
						$pdf->Cell(89, 5, "-) Green Line will be finished in 3-4 working days ", 0, 1, 'C');
						$pdf->Cell(90, 5, "-) Yellow Line will be finished in 4-5 working days ", 0, 1, 'C');
						$pdf->Cell(88, 5, "-) Red Line will be finished in 7-10 working days ", 0, 1, 'C');
					}
					if($sq['notes13']==1)
					{
						$pdf->Cell(200, 5, "- Working procedures that have not been included in the provisions above, will be provided separately in ", 0, 1, 'L');
						$pdf->Cell(135, 5, "the form of standard operating procedures approved and signed by both parties. ", 0, 1, 'C');
					}
					if($sq['notes14']==1)
					{
						$pdf->Cell(200, 5, " - Above mention rate we will be valid until futher notice .", 0, 1, 'L');
					}
					if($sq['notes15']==1)
					{
						$pdf->Cell(200, 5, "- Please return this quotation which has been signed as approval sign. ", 0, 1, 'L');
					}
					
				// $pdf->Cell(200, 5, rtrim($klasifikasi, ","), 0, 1, 'L' );
				//$pdf->Cell(200, 5, $klasifikasi, ","), 0, 1, 'L');
				$pdf->Cell(0, 3, '', 0, 1, '');
				$pdf->Cell(100, 5, 'We are looking forward hearing good news from you. Thank you for your kind attention.', 0, 1, 'L');
				$pdf->Cell(0, 3, '', 0, 1, '');
				$pdf->Cell(100, 5,'Sincerely', 0, 0,'L');
				$pdf->Cell(100, 5,'Approved', 0, 1, 'L');
				$pdf->Cell(0, 3, '', 0, 1, '');
				$pdf->Cell(100, 5, $bsa['name'], 0, 0, 'L');
				$pdf->Cell(100, 5, $sq['customer_name'], 0, 0, 'L');
				$pdf->Cell(100, 5,'', 0, 1,'L');
				$pdf->Cell(100, 5,'', 0, 1,'L');
				$pdf->Cell(100, 5,'', 0, 1,'L');
				$pdf->Cell(100, 5,'', 0, 1,'L');
				$pdf->Cell(100, 5,'', 0, 1,'L');
				$pdf->Cell(100, 5,$sq['nama_sales'], 0, 0,'L');
				$pdf->Cell(100, 5,$sq['attn'], 0, 1, 'L');
				$pdf->Cell(100, 5, '', 0, 1, 'L');
				}
			}				
			$pdf->Cell( 50, 5, $bsa['name'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address1'], 0, 1, 'L' );
			$pdf->Cell( 100, 5, $bsa['address2'], 0, 1, 'L' );
			$pdf->Output();
		}
	}
	}
	
	public function export()
		{if(!in_array( 'read_sea_quotation', unserialize( $this->tank_auth->get_capabilities() ) )){		//skip
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data['capabilities']	= $this->tank_auth->get_capabilities();
			$data['role']	= $this->tank_auth->get_role();
			$this->load->view('header');
			$this->load->view('menu_pop');
			$this->load->view('unauthorized', $data);
			$this->load->view('footer');
		}else{
			$this->xlog->record( 'print', 'sea_quot', '' );
			$this->load->library( 'Emkl', 'emkl' );
			if( true ){
				$this->load->library('fpdf17/fpdf');
				
				$mcompany = $this->mcompany->all();
				if( ! empty( $mcompany ) ){
					foreach( $mcompany as $bsa ){

				$pdf = new FPDF( 'P', 'mm', 'A4' );
				$pdf->AliasNbPages();
				$pdf->AddPage();
				$pdf->SetFont( 'Times','B',10 );
				$pdf->Image('img/bsa.jpg' ,5,8,10,10);
				$pdf->Cell(40, 2 , 'Bina Sinar Amity', 0, 1, 'C');
				$pdf->Cell(30, 8 , 'Logistics', 0, 1, 'C');
				$pdf->SetFont( 'Times','B',10 );
				$pdf->Cell(25, 5, 'Makes Business Simple', 0, 1, 'C');
				
				$pdf->Cell( 195, 10, 'Sea Quotation', 0, 1, 'C' );
				

				}
				} else {
					$pdf->SetFont( 'Times','I',10 );
					$pdf->Cell( 195, 5, 'No Data', 1, 1, 'C' );
				}
				$mcustomer = $this->mcustomer->all();
				$sea_quot = $this->sea_quot->all();
				if(!empty($sea_quot)){
					foreach($sea_quot as $seaquot){
						$pdf->SetFont('Arial', '',10 );
						$pdf->Cell(25, 5, 'No', 1, 0,'L');
						$pdf->Cell(70, 5, $seaquot['quot_id'],1,0,'L' );
						$pdf->Cell(25, 5, 'To', 1, 0,'L');
						$pdf->Cell(70, 5, $seaquot['customer_name'],1,1,'L' );
						$pdf->Cell(25, 5, 'Date', 1, 0,'L');
						$pdf->Cell(70, 5, $seaquot['date'],1,0,'L' );
						$pdf->Cell(25, 5, 'Attn', 1, 0,'L');
						$pdf->Cell(70, 5, $seaquot['attn'],1,1,'L' );
						$pdf->Cell(25, 15, 'Re', 1, 0,'L');
						$pdf->Cell(70, 15, $seaquot['re'],1,0,'L' );
						$pdf->Cell(25, 5, 'Fax', 'TLR', 0, 'L');
						$pdf->Cell(70, 5, $mcustomer[0]['fax'], 'TLR', 1, 'L');
						$pdf->Cell(25, 0, '', 0, 0, '');
						$pdf->Cell(70, 0, '', 0, 0, '');
						$pdf->Cell(25, 5, 'Telp', 'BRL', 0,'L');
						$pdf->Cell(70, 5, $mcustomer[0]['phone'],'BRL',1,'L' );
						$pdf->Cell(25, 0, '', 0, 0, '');
						$pdf->Cell(70, 0, '', 0, 0, '');
						$pdf->Cell(25, 5, 'HP', 1, 0, 'L');
						$pdf->Cell(70, 5, $mcustomer[0]['contack_person'], 1,1,'L');
						
						}
					}
						
					$pdf->Cell(25, 5, '', 0, 1,'L');
					$pdf->Cell(10, 5, 'Dengan Hormat, ', 0, 0,'L');
					$pdf->Cell(100, 5, '', 0, 1,'L');
					$pdf->Cell(150, 5, 'Berikut ini kami ajukan harga EXW - Handling Export Dry + O/F Ex.Jakarta - Jeddah dan Jakarta - Jebel Ali sbb:', 0, 1,'L');
					$pdf->Cell(90, 5, '', 0, 0, 'C');
					$pdf->Cell(50, 5, 'Dry/20', 0, 0, 'C');
					$pdf->Cell(50, 5, 'Dry/40', 0, 1, 'C');
		
				$sea_quot_transaksi = $this->sea_quot_transaksi->all();
			/////////////////////////////////////////////// Unit / Satuan (Mata Uang)
			/////////////////////////////////////////////// Contoh: 40`/HC(IDR)
			/////////////////////////////////////////////// $pdf->Cell(90, 5, $sea_quot_transaksi['unit_code'],1, 1, 'C');
				if(!empty($sea_quot_transaksi)){
					foreach($sea_quot_transaksi as $sqt){
						$pdf->SetFont('Arial', '',10 );
						$pdf->Cell(90, 5, $sqt['charges_description'], 0, 0, 'L');
						$pdf->Cell(20, 5, $sqt['unit_description'], 0, 0, 'C');
						$pdf->Cell(10, 5, '/', 0, 0, 'C');
						$pdf->Cell(20, 5, $sqt['approval_desc'], 0, 0, 'C');
						$pdf->Cell(20, 5, $sqt['unit_description'], 0, 0, 'C');
						$pdf->Cell(10, 5, '/', 0, 0, 'C');
						$pdf->Cell(20, 5, $sqt['approval_desc'], 0, 1, 'C');
						$pdf->Cell(200, 5, "", 0, 1, 'C');
						}
					}
				$sea_quot = $this->sea_quot->all();
				if(!empty($sea_quot)){
					foreach($sea_quot as $sq){
					/////////////////////////////////////////Untuk Cetak Notes Yang sudah Diisi
					$pdf->Cell(100, 5, 'Notes: ', 0, 1, 'L');
					if($sq['notes_export1']==1)
					{
						$pdf->Cell(200, 5, "- Tariff belum termasuk Asuransi dan PPN 10%.", 0, 1, 'L');
					}
					elseif($sq['notes_export2']==1)
					{
						$pdf->Cell(200, 5, "- Semua biaya dari pihak ketiga seperti LO/LO, Storage, dan Seal akan ditagihkan sesuai kwitansi.", 0, 1, 'L');
					}
					if($sq['notes_export3']==1)
					{
						$pdf->Cell(200, 5, "- Tarif diatas tidak termasuk biaya buruh muat (FOT).", 0, 1, 'L');
					}
					elseif($sq['notes_export4']==1)
					{
						$pdf->Cell(200, 5, "- Overnight : Apabila truck >= 8 Jam di lokasi muat, maka akan dikenakan biaya overnight 50% dari tariff.", 0, 1, 'L');
					}if($sq['notes_export5']==1)
					{
						$pdf->Cell(200, 5, "- Apabila truck >=12 Jam dilokasi muat maka akan dikenakan biaya overnight 100% dari tariff.", 0, 1, 'L');
					}
					elseif($sq['notes_export6']==1)
					{
						$pdf->Cell(200, 5, "- Pembayaran : 14 hari setelah invoice di terima.", 0, 1, 'L');
					}elseif($sq['notes_export7']==1)
					{
						$pdf->Cell(200, 5, "- Order kami terima 1 - 2 hari sebelum tanggal pelaksanaan stuffing cargo", 0, 1, 'L');
					}
					
					
					
					
					$pdf->Cell(100, 5, 'Kalau harganya sudah deal, mohon diberikan legal dokumennya seperti : NPWP, SIUP, TDP, SPPKP.', 0, 1, 'L');
					$pdf->Cell(100, 5, 'Demikian penawaran ini kami sampaikan, atas perhatian dan kerjasamanya, kami ucapkan terima kasih.', 0, 1, 'L');
					$pdf->Cell(100, 5, 'Hormat Kami,', 0, 0,'L');
					$pdf->Cell(100, 5, 'Disetujui', 0, 1, 'L');
					$pdf->Cell(100, 5, $bsa['name'], 0, 0, 'L');
					$pdf->Cell(100, 5, $sq['customer_name'], 0, 0, 'L');
					/////////////////////////////////////////////////// $pdf->Cell(100, 5,$sea_quot_transaksi['customer_name'], 0, 1,'L');
					$pdf->Cell(100, 5,'', 0, 1,'L');
					$pdf->Cell(100, 5,'', 0, 1,'L');
					$pdf->Cell(100, 5,'', 0, 1,'L');
					$pdf->Cell(100, 5,'', 0, 1,'L');
					$pdf->Cell(100, 5,'', 0, 1,'L');
					$pdf->Cell(100, 5,$sq['nama_sales'], 0, 0,'L');
					$pdf->Cell(100, 5,$sq['attn'], 0, 1, 'L');
					}
				}				
				$pdf->Output();
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
