<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mdevisi extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Check data is exist or not
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_exist( $id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('kode_devisi', $id);
		$query = $gl_db->get('devisi');
		return $query->num_rows > 0;
	}

	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function kepala_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('id_karyawan', $key);
		$query = $gl_db->get('karyawan');
		if( $query->num_rows > 0 ){
			return $query->row('nama');
		} else {
			return NULL;
		}
	}
	function create( $data )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( ! $this->is_exist( $data['kode_devisi'] ) ){
			$data = array(
				'kode_devisi' => $data['kode_devisi']
				, 'nama_devisi' => $data['nama_devisi']
				, 'kode_kepala' => $data['kode_kepala']
				, 'user_add' => $data['user_add']
				, 'tgl_add' => $data['tgl_add']
			);
			if($gl_db->insert('devisi', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	function read( $key )
	{
	$sql="select p.*,c.nama as nama_kepala,mu.`username` as user_name,mu2.`username` as user_name2 from ((gl_devisi as p left join gl_karyawan as c on p.kode_kepala=c.id_karyawan)left join gl_xusers as mu on p.user_add=mu.`id`)left join gl_xusers as mu2 on p.user_edit=mu2.`id` where p.kode_devisi='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	function all()
	{
	$sql="select p.*,c.nama as nama_kepala from gl_devisi as p left join gl_karyawan as c on p.kode_kepala=c.id_karyawan order by p.kode_devisi";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	function devisi_name( $key )
	{
	$sql="select nama_devisi from gl_devisi where kode_devisi='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('nama_devisi');
		} else {
			return NULL;
		}
	}

	/**
	 * Update account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( !$this->is_exist( $data['kode_devisi'] ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->set('nama_devisi', $data['nama_devisi']);
			$gl_db->set('kode_kepala', $data['kode_kepala']);
			$gl_db->set('user_edit', $data['user_edit']);
			$gl_db->set('tgl_edit', $data['tgl_edit']);
			$gl_db->where('kode_devisi', $data['kode_devisi']);
			if ($gl_db->update('devisi')){
				return '1';
			}else{
				return '0';
			}
		}
	}

	/**
	 * Delete account data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $key )
	{
		if( !$this->is_exist( $key ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->where('kode_devisi', $key);
			if ($gl_db->delete('devisi')){
				return '1';
			}else{
				return '0';
			}
		}
	}

	/**
	 * Search account data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
}
/* End of file maccount.php */
/* Location: ./application/models/maccount.php */