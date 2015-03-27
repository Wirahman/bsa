<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mbuying_rate extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Create Buying Rate Master Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('mbuying_rate', $data);
	}

	
	/**
	 * Load Buying Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		$query = $this->db->get('mbuying_rate');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	
	/**
	 * Delete Buying Rate Master Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $vendor_id )
	{
		$this->db->where('vendor_id', $vendor_id);
		return $this->db->delete('mbuying_rate');
		// return $this->db->affected_rows() > 0;
	}

}
?>
