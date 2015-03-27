<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Tsea_export_master_vessel extends CI_Model{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create Sea Export Master Vessel transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create ( $data )
	{
		return $this->db->insert_batch('sea_export_master_vessel', $data);
	}

	/**
	 * Load Sea Export Master Vessel transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load ( $OBL_no)
	{
		$this->db->where('OBL_no', $OBL_no);
		$query = $this->db->get('sea_export_master_vessel');
		if( $query->num_rows > 0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete booking cargo sea data
	 *
	 * @param	string
	 * @return	bool
	 */

	function clean( $OBL_no )
	{
		$this->db->where('OBL_no', $OBL_no);
		return $this->db->delete('sea_export_master_vessel');
		//return  $this->db->affected_rows() > 0;
	}

}
?>