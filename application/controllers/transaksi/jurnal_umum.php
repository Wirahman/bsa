<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurnal_umum extends CI_Controller {
    private $controller = 'transaksi/jurnal_umum';

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Tju', 'tju' );
		$this->load->model( 'Search', 'search' );
		$this->load->model( 'Searchtrn', 'searchtrn' );
		$this->load->model( 'Tju_transaksi', 'tju_transaksi' );
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
			if( in_array( 'read_jurnal_umum', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'jurnal_umum', '' );
				$this->load->view('transaksi/jurnal_umum/index', $data);
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

	public function db_jurnal()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$tju = $this->searchtrn->search_tju( $_POST[ 'key' ] );
				echo serialize( $tju );
			}
		}
	}

	public function db_transaksi()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] )
				&& isset( $_POST[ 'cond1' ] )
				&& ! empty( $_POST[ 'cond1' ] )
			){
				$tju = $this->searchtrn->search_tju( $_POST[ 'key' ], $_POST[ 'cond1' ] );
				echo serialize( $tju );
			}
		}
	}

	public function db_perkiraan()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$maccount = $this->search->search_acc( $_POST['key'],true );
				echo serialize( $maccount );
			}
		}
	}

	public function load_perkiraan()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$this->load->model( 'Maccount', 'maccount' );
				$maccount = $this->maccount->read( $_POST['id'] );
				echo serialize( $maccount );
			}
		}
	}

	public function db_lastid()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id_jurnal' ] ) ){
				echo $this->tju->lastid( $_POST['id_jurnal'] );
			}
		}
	}

	public function db_create()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'create_jurnal_umum', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id_jurnal'] )
					&& isset( $_POST['id_transaksi'] )
					&& isset( $_POST['tanggal'] )
					&& isset( $_POST['keterangan'] )
					&& isset( $_POST['total_debet'] )
					&& isset( $_POST['total_kredit'] )
				){
					$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['id_jurnal']) || empty($_POST['id_transaksi'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Nomor jurnal dan transaksi <strong>HARUS</strong> diisi.';
					}elseif (empty($_POST['tanggal']) || !$this->emkl->cek_format_tanggal( $_POST['tanggal'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Tanggal harus diisi dengan format dd-MM-yyyy.';
					}elseif (!is_numeric( str_replace(",","",$_POST[ 'total_debet' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_debet' ] ) ) )){					
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total debet <strong>HARUS</strong> angka.';
					}elseif (!is_numeric( str_replace(",","",$_POST[ 'total_kredit' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_kredit' ] ) ) )){					
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total kredit <strong>HARUS</strong> angka.';
					}elseif (floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_kredit' ] ) )!==floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_debet' ] ) )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total debet dan kredit <strong>HARUS</strong> sama.';
					}elseif( $this->gl->sudah_tutup( $_POST['tanggal'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sudah tutup buku.';
					}else{
						$tju_transaksi = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-jurnal-umum' ]; $i++ ){
							if( isset( $_POST[ 'jurnal_umum' ][ $i ][ 'id' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'nama' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'keterangan' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] )
								&& ! empty( $_POST[ 'jurnal_umum' ][ $i ][ 'id' ] )
							){
								if (empty($_POST[ 'jurnal_umum' ][ $i ][ 'id' ])){
								}elseif (empty($_POST[ 'jurnal_umum' ][ $i ][ 'nama' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Kode perkiraan baris ke '. $baris .' tidak ada.';
									break;
								}elseif (!is_numeric( str_replace(",","",$_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] ) ) )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Nilai debet baris ke '. $baris .' <strong>HARUS</strong> angka.';
									break;
								}elseif (!is_numeric( str_replace(",","",$_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] ) ) )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Nilai kredit baris ke '. $baris .' <strong>HARUS</strong> angka.';
									break;
								}else{
									$baris++;
								}
								$transaksi = array(
									'id' => $i
									, 'id_jurnal' => $_POST['id_jurnal']
									, 'id_transaksi' => $_POST['id_transaksi']
									, 'id_perkiraan' => $_POST[ 'jurnal_umum' ][ $i ][ 'id' ]
									, 'nama_perkiraan' => $_POST[ 'jurnal_umum' ][ $i ][ 'nama' ]
									, 'keterangan' => $_POST[ 'jurnal_umum' ][ $i ][ 'keterangan' ]
									, 'debet' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] ) )
									, 'kredit' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] ) )
								);
								$tju_transaksi[] = $transaksi;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Detail transaksi <strong>HARUS</strong> diisi.';
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'create', 'jurnal_umum', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['id_jurnal'] = $_POST['id_jurnal'];
					$data['id_transaksi'] = $_POST['id_transaksi'];
					$data['tanggal'] = $this->emkl->change_format( $_POST['tanggal'] );
					$data['adjustment'] = isset( $_POST['adjustment'] ) ? 1 : 0;
					$data['keterangan'] = $_POST['keterangan'];
					$data['id_currency'] = '';
					$data['total_debet'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total_debet'] ) );
					$data['total_kredit'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total_kredit'] ) );
					$data['created'] = $this->emkl->waktu_saat_ini();
					$data['creator'] = $this->tank_auth->get_user_id();
					$hasil=$this->tju->create( $data );
					if ($hasil=='ada'){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data dengan nomor transaksi yang sama sudah ada.';
					}elseif ($hasil=='1'){
						$hasil=true;
						$this->tju_transaksi->clean( $_POST['id_jurnal'], $_POST['id_transaksi'] );
						if (isset($tju_transaksi) && !empty($tju_transaksi)){
							if (!$this->tju_transaksi->create( $tju_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data detail gagal disimpan. Ada kesalahan data atau server.';
							$this->tju->delete( $_POST['id_jurnal'], $_POST['id_transaksi'] );
							$this->tju_transaksi->clean( $_POST['id_jurnal'], $_POST['id_transaksi'] );
						}
					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data header gagal disimpan. Ada kesalahan data atau server.';
					}
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kesalahan prosedur, aplikasi berubah, harap refresh browser.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Anda belum login atau sudah logout.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='Anda tidak memiliki akses untuk simpan data.';
		}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'create', 'jurnal_umum', $resulttrnx );
		
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id_jurnal'] )
				&& isset( $_POST['id_transaksi'] )
				&& ! empty( $_POST['id_jurnal'] )
				&& ! empty( $_POST['id_transaksi'] )
			){
				$tju = $this->tju->read( $_POST['id_jurnal'], $_POST['id_transaksi'] );
				if( ! empty( $tju ) ){
					$tju['transaksi'] = $this->tju_transaksi->load( $_POST['id_jurnal'], $_POST['id_transaksi'] );
					if( ! empty( $tju['transaksi'] ) ){
						echo serialize( $tju );
					}
				}
			}
		}
	}

	public function db_update()
	{
		$resulttrn['status']='Berhasil';
		$resulttrn['ket']='';
		if( in_array( 'update_jurnal_umum', unserialize( $this->tank_auth->get_capabilities() ) )){
			$this->load->library( 'Emkl', 'emkl' );
			if ($this->tank_auth->is_logged_in()) {
				if( isset( $_POST['id_jurnal'] )
					&& isset( $_POST['id_transaksi'] )
					&& isset( $_POST['tanggal'] )
					&& isset( $_POST['keterangan'] )
					&& isset( $_POST['total_debet'] )
					&& isset( $_POST['total_kredit'] )
				){
					$this->load->model( 'Gl', 'gl' );
					$baris=1;
					if (empty($_POST['id_jurnal']) || empty($_POST['id_transaksi'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Nomor jurnal dan transaksi <strong>HARUS</strong> diisi.';
					}elseif (empty($_POST['tanggal']) || !$this->emkl->cek_format_tanggal( $_POST['tanggal'] )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Tanggal harus diisi dengan format dd-MM-yyyy.';
					}elseif (!is_numeric( str_replace(",","",$_POST[ 'total_debet' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_debet' ] ) ) )){					
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total debet <strong>HARUS</strong> angka.';
					}elseif (!is_numeric( str_replace(",","",$_POST[ 'total_kredit' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_kredit' ] ) ) )){					
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total kredit <strong>HARUS</strong> angka.';
					}elseif (floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_kredit' ] ) )!==floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'total_debet' ] ) )){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Total debet dan kredit <strong>HARUS</strong> sama.';
					}elseif( $this->gl->sudah_tutup( $_POST['tanggal'])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sudah tutup buku.';
					}else{
						$tju_transaksi = array();
						$baris=1;
						for( $i = 0; $i < $_POST[ 'baris-jurnal-umum' ]; $i++ ){
							if( isset( $_POST[ 'jurnal_umum' ][ $i ][ 'id' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'nama' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'keterangan' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] )
								&& isset( $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] )
								&& ! empty( $_POST[ 'jurnal_umum' ][ $i ][ 'id' ] )
							){
								if (empty($_POST[ 'jurnal_umum' ][ $i ][ 'id' ])){
								}elseif (empty($_POST[ 'jurnal_umum' ][ $i ][ 'nama' ])){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Kode perkiraan baris ke '. $baris .' tidak ada.';
									break;
								}elseif (!is_numeric( str_replace(",","",$_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] ) ) )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Nilai debet baris ke '. $baris .' <strong>HARUS</strong> angka.';
									break;
								}elseif (!is_numeric( str_replace(",","",$_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] )) || !is_numeric( floatval( preg_replace( "/[^0-9.-]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] ) ) )){
									$resulttrn['status']='Error';
									$resulttrn['ket']='Nilai kredit baris ke '. $baris .' <strong>HARUS</strong> angka.';
									break;
								}else{
									$baris++;
								}
								$transaksi = array(
									'id' => $i
									, 'id_jurnal' => $_POST['id_jurnal']
									, 'id_transaksi' => $_POST['id_transaksi']
									, 'id_perkiraan' => $_POST[ 'jurnal_umum' ][ $i ][ 'id' ]
									, 'nama_perkiraan' => $_POST[ 'jurnal_umum' ][ $i ][ 'nama' ]
									, 'keterangan' => $_POST[ 'jurnal_umum' ][ $i ][ 'keterangan' ]
									, 'debet' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'debet' ] ) )
									, 'kredit' => floatval( preg_replace( "/[^0-9.]/", "", $_POST[ 'jurnal_umum' ][ $i ][ 'kredit' ] ) )
								);
								$tju_transaksi[] = $transaksi;
							}
						}
					}
					if (($resulttrn['status']=='Berhasil') && (intval($baris)==1)){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Detail transaksi <strong>HARUS</strong> diisi.';
					}else{
						if ($lama=$this->tju->read( $_POST['id_jurnal'] ,$_POST['id_transaksi'])){
							$tanggal=explode('-',$lama['tanggal']);
							if( $this->gl->sudah_tutup( $tanggal[2].'-'.$tanggal[1].'-'.$tanggal[0])){
								$resulttrn['status']='Error';
								$resulttrn['ket']='Sudah tutup buku.';
							}
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data tidak ada.';
						}
					}
					if ($resulttrn['status']=='Error'){
						$this->xlog->record( 'update', 'jurnal_umum', $resulttrn );
						echo serialize($resulttrn);
						exit;
					}
					$resulttrnx['isi']=$_POST;
					$data['id_jurnal'] = $_POST['id_jurnal'];
					$data['id_transaksi'] = $_POST['id_transaksi'];
					$data['tanggal'] = $this->emkl->change_format( $_POST['tanggal'] );
					$data['adjustment'] = isset( $_POST['adjustment'] ) ? 1 : 0;
					$data['keterangan'] = $_POST['keterangan'];
					$data['id_currency'] = '';
					$data['total_debet'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total_debet'] ) );
					$data['total_kredit'] = floatval( preg_replace( "/[^0-9.]/", "", $_POST['total_kredit'] ) );
					$data['modified'] = $this->emkl->waktu_saat_ini();
					$data['modifier'] = $this->tank_auth->get_user_id();
					$hasil=$this->tju->update( $data );
					if ($hasil=='1'){
						$hasil=true;
						$this->tju_transaksi->clean( $_POST['id_jurnal'], $_POST['id_transaksi'] );
						if (isset($tju_transaksi) && !empty($tju_transaksi)){
							if (!$this->tju_transaksi->create( $tju_transaksi )){
								$hasil=false;
							}
						}
						if ($hasil){
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data detail gagal diubah. Ada kesalahan data atau server.';
							$this->tju_transaksi->clean( $_POST['id_jurnal'], $_POST['id_transaksi'] );
						}
					}else{
						$resulttrn['status']='Error';
						$resulttrn['ket']='Data header gagal diubah. Data tidak ada atau ada kesalahan pada data atau server.';
					}
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kesalahan prosedur, aplikasi berubah, harap refresh browser.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Anda belum login atau sudah logout.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='Anda tidak memiliki akses untuk ubah data.';
		}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$this->xlog->record( 'update', 'jurnal_umum', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'delete_jurnal_umum', unserialize( $this->tank_auth->get_capabilities() ) )){

		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id_jurnal'] )
				&& isset( $_POST['id_transaksi'] )
				&& !empty( $_POST['id_jurnal'] )
				&& !empty( $_POST['id_transaksi'] )
			){
				if ($lama=$this->tju->read( $_POST['id_jurnal'], $_POST['id_transaksi'] )){
					$tanggal=explode('-',$lama['tanggal']);
					$this->load->model( 'Gl', 'gl' );
					if( $this->gl->sudah_tutup( $tanggal[2].'-'.$tanggal[1].'-'.$tanggal[0])){
						$resulttrn['status']='Error';
						$resulttrn['ket']='Sudah tutup buku.';
					}else{
						if ($this->tju->delete( $_POST['id_jurnal'], $_POST['id_transaksi'] )){
							$this->tju_transaksi->clean( $_POST['id_jurnal'], $_POST['id_transaksi']);
						}else{
							$resulttrn['status']='Error';
							$resulttrn['ket']='Data gagal dihapus. Ada kesalahan data atau server.';
						}
					}
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data gagal dihapus. Tidak ada data atau ada kesalahan data atau server.';
				}
			}else{
				$resulttrn['status']='Error';
				$resulttrn['ket']='Kesalahan prosedur, aplikasi berubah, harap refresh browser.';
			}
		}else{
			$resulttrn['status']='Error';
			$resulttrn['ket']='Anda belum login atau sudah logout.';
		}
	}else{
		$resulttrn['status']='Error';
		$resulttrn['ket']='Anda tidak memiliki akses untuk hapus data.';
	}
		$resulttrnx['status']=$resulttrn['status'];
		$resulttrnx['ket']=$resulttrn['ket'];
		$resulttrnx['isi']=$_POST;
		$this->xlog->record( 'delete', 'jurnal_umum', $resulttrnx );
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
