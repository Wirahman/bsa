<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkaryawan extends CI_Model {

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
		$this->db->where('id_karyawan', $id);
		$query = $this->db->get('karyawan');
		return $query->num_rows > 0;
	}

	/**
	 * Create karyawan data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['id_karyawan'] ) ){
			$data = array(
				'id_karyawan' => $data['id_karyawan']
				, 'nama' => $data['nama']
				, 'dept' => $data['dept']
				, 'jabatan' => $data['jabatan']
				, 'alamat' => $data['alamat']
				, 'alamat2' => $data['alamat2']
				, 'telepon' => $data['telepon']
				, 'fax' => $data['fax']
				, 'nonaktif' => $data['nonaktif']
				, 'user_add' => $data['user_add']
				, 'tgl_add' => $data['tgl_add']
			);
			if ($this->db->insert('karyawan', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}

	/**
	 * Read karyawan data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('id_karyawan', $key);
		$query = $gl_db->get('karyawan');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}


	/**
	 * Update karyawan data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['id_karyawan'] ) ){
			$this->db->set('nama', $data['nama']);
			$this->db->set('dept', $data['dept']);
			$this->db->set('jabatan', $data['jabatan']);
			$this->db->set('alamat', $data['alamat']);
			$this->db->set('alamat2', $data['alamat2']);
			$this->db->set('fax', $data['fax']);
			$this->db->set('telepon', $data['telepon']);
			$this->db->set('nonaktif', $data['nonaktif']);
			$this->db->set('user_edit', $data['user_edit']);
			$this->db->set('tgl_edit', $data['tgl_edit']);
			$this->db->where('id_karyawan', $data['id_karyawan']);
			if( $this->db->update('karyawan')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}

	/**
	 * Delete karyawan data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('id_karyawan', $key);
			if ($this->db->delete('karyawan')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}

	/**
	 * Search karyawan data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_karyawan.id_karyawan LIKE "%'.$key.'%" OR gl_karyawan.nama LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('karyawan');
		// return $gl_db->last_query();
		return $query->result_array();
	}

	/**
	 * Load all karyawan data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('karyawan');
		return $query->result_array();
	}

	function nama( $key )
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
	function ketsales( $key )
	{
		$sql="select s.id_karyawan,s.nama,d.kode_devisi as devisi,if(isnull(d.kode_devisi),'SALES','SUPERVISOR') as tipe from gl_karyawan as s left join gl_devisi as d on s.id_karyawan=d.kode_kepala where s.id_karyawan='". $key ."' and nonaktif=0";
		$query=$this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
}
/* End of file mkaryawan.php */
/* Location: ./application/models/mkaryawan.php */