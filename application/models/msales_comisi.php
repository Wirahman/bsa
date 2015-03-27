<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Msales_comisi extends CI_Model {

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
		return $this->db->insert_batch('sales_com', $data);
	}

	
	/**
	 * Load Buying Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $date)
	{
		$this->db->where('date', $date);
		$query = $this->db->get('sales_com');
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
	function clean( $date )
	{
		$this->db->where('date', $date);
		return $this->db->delete('sales_com');
		// return $this->db->affected_rows() > 0;
	}

}
?>