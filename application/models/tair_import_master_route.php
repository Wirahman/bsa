<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tair_import_master_route extends CI_Model {

	function __construct()
	{
		//Call the Model Constructor
		parent::__construct();
	}

	/**
	 * Create Air Import Master Transaksi Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('air_import_master_route', $data);
	}

	/**
	 * Load Air Import Master Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $MAWB_no)
	{
		$this->db->where('MAWB_no', $MAWB_no);
		$query = $this->db->get('air_import_master_route');
		if( $query->num_rows > 0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Air Import Master Transaksi data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $MAWB_no )
	{
		$this->db->where('MAWB_no', $MAWB_no);
		return $this->db->delete('air_import_master_route');
		// return $this->db->affected_rows() > 0;
	}

}
?>