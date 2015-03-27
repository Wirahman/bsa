<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tju_transaksi extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create jurnal umum transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('tju_transaksi', $data);
	}

	/**
	 * Load jurnal umum transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $id_jurnal, $id_transaksi )
	{
		$this->db->where('id_jurnal', $id_jurnal);
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get('tju_transaksi');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete jurnal umum data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $id_jurnal, $id_transaksi )
	{
		$this->db->where('id_jurnal', $id_jurnal);
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->delete('tju_transaksi');
		// return $this->db->affected_rows() > 0;
	}

}
?>