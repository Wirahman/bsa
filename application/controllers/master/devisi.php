<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Devisi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model( 'Mdevisi', 'mdevisi' );
		$this->load->model( 'Mkaryawan', 'mkaryawan' );
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
			if( in_array( 'read_devisi', unserialize( $this->tank_auth->get_capabilities() ) )){
				$this->xlog->record( 'open', 'mdevisi', '' );
				$this->load->view('master/devisi/index', $data);
			} else {
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

	public function db_devisi()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mdevisi = $this->search->search_dev( $_POST['key']);
				echo serialize( $mdevisi );
			}
		}
	}

	public function db_karyawan()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'key' ] ) ){
				$this->load->model( 'Search', 'search' );
				$mkaryawan = $this->search->search_karyawan( $_POST['key'], FALSE );
				echo serialize( $mkaryawan );
			}
		}
	}
	public function db_read_kepala()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST[ 'id' ] ) ){
				$hasil=$this->mkaryawan->read( $_POST['id'] );
				if (!empty($hasil)){
					echo $hasil['nama'];
				}else{
					echo '';
				}
			}
		}
	}

	public function db_create()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_devisi', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['kode_devisi'] )
				&& isset( $_POST['nama_devisi'] )
				&& isset( $_POST['kode_kepala'] )
				&& isset( $_POST['nama_kepala'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['kode_devisi'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kode devisi <strong>HARUS</strong> diisi.';
				}elseif (empty($_POST['nama_devisi'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama <strong>HARUS</strong> diisi.';
				}elseif (empty($_POST['kode_kepala']) || empty($_POST['nama_kepala'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kepala devisi <strong>HARUS</strong> diisi.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'create', 'mdevisi', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['kode_devisi'] = $_POST['kode_devisi'];
				$data['nama_devisi'] = $_POST['nama_devisi'];
				$data['kode_kepala'] = $_POST['kode_kepala'];
				$data['tgl_add'] = $this->emkl->waktu_saat_ini();
				$data['user_add'] = $this->tank_auth->get_user_id();
				$hasil=$this->mdevisi->create( $data );
				if ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data dengan kode devisi yang sama sudah ada.';
				}elseif ($hasil=='1'){
				}else {
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data gagal disimpan. Ada kesalahan data atau server.';
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
		$this->xlog->record( 'create', 'mdevisi', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_read()
	{
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$this->xlog->record( 'read', 'mdevisi', $_POST['id'] );
				$mdevisi = $this->mdevisi->read( $_POST['id'] );
				if( !empty( $mdevisi ) ){
					echo serialize( $mdevisi );
				}
			}
		}
	}

	public function db_update()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	if( in_array( 'create_devisi', unserialize( $this->tank_auth->get_capabilities() ) )){
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['kode_devisi'] )
				&& isset( $_POST['nama_devisi'] )
				&& isset( $_POST['kode_kepala'] )
				&& isset( $_POST['nama_kepala'] )
			){
				$this->load->library( 'Emkl', 'emkl' );
				$baris=1;
				if (empty($_POST['kode_devisi'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kode devisi <strong>HARUS</strong> diisi.';
				}elseif (empty($_POST['nama_devisi'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Nama <strong>HARUS</strong> diisi.';
				}elseif (empty($_POST['kode_kepala']) || empty($_POST['nama_kepala'])){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kepala devisi <strong>HARUS</strong> diisi.';
				}
				
				if ($resulttrn['status']=='Error'){
					$this->xlog->record( 'update', 'mdevisi', $resulttrn );
					echo serialize($resulttrn);
					exit;
				}
				$resulttrnx['isi']=$this->input->post();
				$data['kode_devisi'] = $_POST['kode_devisi'];
				$data['nama_devisi'] = $_POST['nama_devisi'];
				$data['kode_kepala'] = $_POST['kode_kepala'];
				$data['tgl_edit'] = $this->emkl->waktu_saat_ini();
				$data['user_edit'] = $this->tank_auth->get_user_id();
				$hasil=$this->mdevisi->update( $data );
				if ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data tidak ada.';
				}elseif ($hasil=='1'){
				}else {
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data gagal diubah. Ada kesalahan data atau server.';
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
		$this->xlog->record( 'update', 'mdevisi', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function db_delete()
	{
	$resulttrn['status']='Berhasil';
	$resulttrn['ket']='';
	$resulttrnx['isi']=$this->input->post();
	if((intval($this->tank_auth->get_role())!=1) || (in_array( 'delete_devisi', unserialize( $this->tank_auth->get_capabilities() ) ))){
		$this->load->library( 'Emkl', 'emkl' );
		if ($this->tank_auth->is_logged_in()) {
			if( isset( $_POST['id'] )
				&& ! empty( $_POST['id'] )
			){
				$hasil=$this->mdevisi->delete( $_POST['id'] );
				if ($hasil=='1'){
				}elseif ($hasil=='ada'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Kode devisi sudah terpakai.';
				}elseif ($hasil=='2'){
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data tidak ada.';
				}else{
					$resulttrn['status']='Error';
					$resulttrn['ket']='Data gagal dihapus. Ada kesalahan data atau server.';
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
		$this->xlog->record( 'delete', 'mdevisi', $resulttrnx );
		echo serialize($resulttrn);
	}

	public function cetak()
	{
	if(!in_array( 'read_devisi', unserialize( $this->tank_auth->get_capabilities() ) )){		
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['capabilities']	= $this->tank_auth->get_capabilities();
		$data['role']	= $this->tank_auth->get_role();
		$this->load->view('header');
		$this->load->view('menu_pop');
		$this->load->view('unauthorized', $data);
		$this->load->view('footer');
	}else{
		$this->xlog->record( 'print', 'mdevisi', '' );
		$this->load->library( 'Emkl', 'emkl' );
		if( true ){
			$this->load->library('fpdf17/fpdf');

			$pdf = new FPDF( 'P', 'mm', 'A4' );
			$pdf->AliasNbPages();
			$pdf->AddPage();

			$pdf->SetFont( 'Times','B',10 );
			$pdf->Cell( 195, 5, 'Master Devisi', 1, 1, 'C' );

			$pdf->Cell( 25, 5, 'Kode', 1, 0, 'C' );
			$pdf->Cell( 85, 5, 'Nama', 1, 0, 'C' );
			$pdf->Cell( 85, 5, 'Kepala Devisi', 1, 1, 'C' );

			$mdevisi = $this->mdevisi->all();
			if( ! empty( $mdevisi ) ){
				foreach( $mdevisi as $acc ){
					$pdf->SetFont( 'Times','',10 );
					$pdf->Cell( 25, 5, $acc['kode_devisi'], 1, 0, 'C' );
					$pdf->Cell( 85, 5, $acc['nama_devisi'], 1, 0, 'L' );
					$pdf->Cell( 85, 5, $acc['nama_kepala'], 1, 1, 'L' );
				}
			} else {
				$pdf->SetFont( 'Times','I',10 );
				$pdf->Cell( 195, 5, 'Tidak ada data', 1, 1, 'C' );
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

/* End of file account.php */
/* Location: ./application/controllers/account.php */