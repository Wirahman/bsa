<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sales_com extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'sales_comisi', 'sales_comisi' );
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'sales_comisi_master', 'sales_comisi_master' );
		$this->load->model('Msales','msales');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model( 'Mcompany', 'mcompany' );
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
			if( in_array( 'read_sales_com', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'sales_com', '' );
				$this->load->view('master/sales_com/index', $data);
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
	
	public function db_sales_comision()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sales_comisi = $this->search->search_sales_comisi( $_POST[ 'key' ] );
				echo serialize( $sales_comisi );
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
				$sales_com = $this->search->search_sales_com( $_POST[ 'key' ], $_POST[ 'cond1' ] );
				echo serialize( $sales_com );
			}
		}
	}
	
	
	public function db_sales_comisi()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$sales_comisi = $this->search->search_sales_comisi( $_POST['key'],true );
				echo serialize( $sales_comisi );
			}
		}
	}

	public function load_sales_comisi()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'sales_comisi', 'sales_comisi' );
				$sales_comisi = $this->sales_comisi->read( $_POST['id'] );
				echo serialize( $sales_comisi);
			}
		}
	}
	public function db_sales()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$msales = $this->search->search_sal( $_POST['key']);
				echo serialize( $msales );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->msales->read( $_POST['id'] );
				if (!empty($hasil)){
					echo serialize($hasil);
				}else{
					echo '';
				}
			}
		}
	}
	public function db_read_kepala1()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->msales->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['team'];
				}else{
					echo '';
				}
			}
		}
	}
	
	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				echo $this->sales_comisi->lastid( $_POST['id'] );
			}
		}
	}
	
	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_sales_com', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['sales_code'] )
					&& isset( $_POST['nama_sales'] )
					&& isset ($_POST['team'])
				){
					//$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sales code<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['nama_sales'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Name Sales<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['team'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Team <strong>REQUIRED</strong>.';
					}else{
						$sales_comisi_master = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-sales-comision' ]; $i++ ){
							if(  isset( $_POST[ 'sales_comision' ][ $i ][ 'date_from' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'target_min' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'target_max' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'presentase' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'date_from' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'target_min' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'target_max' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'presentase' ] )
							){
							if (empty($_POST[ 'sales_comision' ][ $i ][ 'date_from' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'sales_comision' ][ $i ][ 'date_from' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'date_until' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'target_min' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'target_max' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'presentase' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'sales_code' => $_POST['sales_code']
									, 'date_from' => $this->emkl-> change_format ($_POST [ 'sales_comision' ][ $i ][ 'date_from' ])
									//, 'date_from' => $this->emkl-> formattanggal ($_POST [ 'sales_comision' ][ $i ][ 'date_from' ])
									, 'date_until' =>$this->emkl-> change_format ( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ])
									//, 'date_until' =>$this->emkl-> formattanggal ( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ])
									, 'target_min' => floatval( preg_replace( "/[^0-9.]/", "",$_POST[ 'sales_comision' ][ $i ][ 'target_min' ]))
									, 'target_max' => floatval( preg_replace( "/[^0-9.]/", "",$_POST[ 'sales_comision' ][ $i ][ 'target_max' ]))
									, 'presentase' => floatval( preg_replace( "/[^0-9.]/", "",$_POST[ 'sales_comision' ][ $i ][ 'presentase' ]))
								);
								$sales_comisi_master[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'sales_com', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['sales_code'] = $_POST['sales_code'];
					$data['nama_sales'] = $_POST['nama_sales'];
					$data['team'] 		= $_POST['team'];
					$hasil=$this->sales_comisi->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data With The Same Code Already Exists.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->sales_comisi_master->clean( $_POST['sales_code']);
						if (isset($sales_comisi_master) && !empty($sales_comisi_master)){
							if (!$this->sales_comisi_master->create( $sales_comisi_master )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Saved. There is a Data Error or Server.';
							$this->sales_comisi->delete( $_POST['sales_code']);
							$this->sales_comisi_master->clean( $_POST['sales_code']);
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
		$this->xlog->record( 'create', 'sales_com', $resulttrnx );
		
		echo serialize($resulttrn);
	}
	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['sales_code'] )
				&& ! empty( $_POST['sales_code'] )
			){
				$sales_comisi = $this->sales_comisi->read( $_POST['sales_code']);
				if( ! empty( $sales_comisi ) ){
					$sales_comisi['jadwal'] = $this->sales_comisi_master->load( $_POST['sales_code']);
					if( ! empty( $sales_comisi['jadwal'] ) ){
						echo serialize( $sales_comisi );
					}
				}
			}
		}
	}
	
	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_sales_com', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['sales_code'] )
					&& isset( $_POST['nama_sales'] )
					&& isset( $_POST['team'] )
				){
				//$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['sales_code'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='sales code <strong>REQUIRED</strong>.';
					}elseif (empty($_POST['nama_sales'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Name Sales<strong>REQUIRED</strong>.';
					}elseif (empty($_POST['team'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Team <strong>REQUIRED</strong>.';
					}else{
						$sales_comisi_master = array();
						$baris= 1;
						for( $i = 0; $i < $_POST[ 'baris-sales-comision' ]; $i++ ){
							if(  isset( $_REQUEST[ 'sales_comision' ][ $i ][ 'date_from' ] )
								&& isset( $_REQUEST[ 'sales_comision' ][ $i ][ 'date_until' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'target_min' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'target_max' ] )
								&& isset( $_POST[ 'sales_comision' ][ $i ][ 'presentase' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'date_from' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'target_min' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'target_max' ] )
								&& ! empty( $_POST[ 'sales_comision' ][ $i ][ 'presentase' ] )
							){
							
							if (empty($_POST[ 'sales_comision' ][ $i ][ 'date_from' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'sales_comision' ][ $i ][ 'date_from' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'date_until' ]) || !$this->emkl->cek_format_tanggal( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ] )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Date in Line- '. $baris .' must format dd-MM-yyyy.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'target_min' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'target_max' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}elseif (empty($_POST[ 'sales_comision' ][ $i ][ 'presentase' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Code in Line- '. $baris .' not found.';
									break;
								}else{
									$baris++;
								}
								$jadwal = array(
									'id' => $i
									, 'sales_code' => $_POST['sales_code']
									, 'date_from' => $this->emkl-> change_format ($_POST [ 'sales_comision' ][ $i ][ 'date_from' ])
									//, 'date_from' => $this->emkl-> formattanggal ($_POST [ 'sales_comision' ][ $i ][ 'date_from' ])
									, 'date_until' =>$this->emkl-> change_format ( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ])
									//, 'date_until' =>$this->emkl-> formattanggal ( $_POST[ 'sales_comision' ][ $i ][ 'date_until' ])
									, 'target_min' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sales_comision' ][ $i ][ 'target_min' ] ) )
									, 'target_max' =>floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sales_comision' ][ $i ][ 'target_max' ] ) )
									, 'presentase' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'sales_comision' ][ $i ][ 'presentase' ] ) )
								);
								$sales_comisi_master[] = $jadwal;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Schedule <strong>Required</strong>.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'sales_com', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['sales_code'] = $_POST['sales_code'];
					$data['nama_sales'] = $_POST['nama_sales'];
					$data['team'] = $_POST['team'];
					$hasil=$this->sales_comisi->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->sales_comisi_master->clean( $_POST['sales_code'] );
						if (isset($sales_comisi_master) && !empty($sales_comisi_master)){
							if (!$this->sales_comisi_master->create( $sales_comisi_master )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data Detail Could Not be Update. There is a Data Error or Server.';
							$this->sales_comisi_master->clean( $_POST['sales_code'] );
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
		$this->xlog->record( 'update', 'sales_com', $resulttrnx );
		echo serialize($resulttrn);
	}
	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'delete_sales_com', unserialize( $this->tank_auth->get_capabilities() ) )){
	if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['sales_code'] )
				&& !empty( $_POST['sales_code'] )
			){
			if ($this->sales_comisi->delete( $_POST['sales_code'])){
				$this->sales_comisi_master->clean( $_POST['sales_code']);
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
		$this->xlog->record( 'delete', 'sales_com', $resulttrnx );
		echo serialize($resulttrn);
	}
	//public function kepala
	public function kepala($baris,$no,$pdf,$kode,$hal)
	{
	if ((($no-1) % $baris===0) || ($no===1)){
		$pdf->AddPage(); 
		$pdf->SetAutoPageBreak(false, 0);
		$pdf->SetFont( 'Arial','B',12 );
		$pdf->Cell( 180, 6, 'Sales Comission', '', 1, 'C' );	
		$pdf->SetFont( 'Arial','B',9 );
		$pdf->Cell( 25, 6, 'Sales Code', 'TLRB', 0, 'L' );
		$pdf->Cell( 25, 6, 'Date ', 'TLRB', 0, 'C' );
		$pdf->Cell( 25, 6, 'Date end', 'TRB', 0, 'C' );
		$pdf->Cell( 25, 6, 'Net Frofit From', 'TRB', 0, 'C' );
		$pdf->Cell( 25, 6, 'Net Frofit Until', 'TLRB', 0, 'C' );
		$pdf->Cell( 25, 6, 'Of Comission', 'TRB', 1, 'C' );
	}
	}
	
	//public function pdf
	public function pdf()
	{
	// echo($_GET['sales_code']);
	// exit;
		if ($this->tank_auth->is_logged_in()) {

				
				$sales_comisi['jadwal'] = $this->sales_comisi_master->all();
			    $kode=$_GET['sales_code'];
			if ((!empty( $sales_comisi['jadwal'] ) )){
				$this->load->library('fpdf17/fpdf');

				$baris=7;$no=1;$hal=1;$line=1;
				$pdf = new FPDF( 'L', 'mm', 'Legal'  );
				$pdf->SetDisplayMode('fullwidth');
				$pdf->AliasNbPages();
				$kodesalestmp="";
				for( $i = 0; $i < sizeof( $sales_comisi['jadwal'] ); $i++ ){

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
					if($kodesalestmp!= $sales_comisi['jadwal'][$i]['sales_code'])
					{
						$kodesalestmp= $sales_comisi['jadwal'][$i]['sales_code'];
						$pdf->Cell( 25, 6, $kodesalestmp, 'LRB', 0, 'C' );
						}else{
					$pdf->Cell( 25, 6,'', 'LRB', 0, 'C' );
					}
					
				$pdf->SetFont( 'Arial','',8 );
				$tanggal = explode( "-" , $sales_comisi['jadwal'][$i]['date_from']);
						$tgl = $tanggal[ 2 ];
						$bln = $tanggal[ 1 ];
						$thn = $tanggal[ 0 ];
						$newtgl=$tgl."-".$bln."-".$thn ;
				$pdf->Cell( 25, 6, $newtgl, 'LRB', 0, 'C' );
					$tanggal = explode( "-" , $sales_comisi['jadwal'][$i]['date_until']);
						$tgl = $tanggal[ 2 ];
						$bln = $tanggal[ 1 ];
						$thn = $tanggal[ 0 ];
						$newtgl2=$tgl."-".$bln."-".$thn ;
				$pdf->Cell( 25, 6, 	$newtgl2, 'LRB', 0, 'C' );
				$pdf->Cell( 25, 6, $sales_comisi['jadwal'][$i]['target_min'], 'LRB', 0, 'C' );
				$pdf->Cell( 25, 6, $sales_comisi['jadwal'][$i]['target_max'], 'LRB', 0, 'C' );
				$pdf->Cell( 25, 6, $sales_comisi['jadwal'][$i]['presentase'], 'RB', 1, 'C' );
				
				$line++;
				$no++;
				
				}
				$pdf->Output();
			}
		

		}
	}		
}


	

