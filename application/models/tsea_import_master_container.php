<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Tsea_import_master_container extends CI_Model{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create booking cargo sea transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('sea_import_master_container', $data);
	}

	/**
	 * Load Sea Import Master transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	function load( $OBL_no )
	{
		$this->db->where('OBL_no', $OBL_no);
		$query = $this->db->get('sea_import_master_container');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Sea Import Master data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $OBL_no )
	{
		$this->db->where('OBL_no', $OBL_no);
		return $this->db->delete('sea_import_master_container');
	}

}
?>