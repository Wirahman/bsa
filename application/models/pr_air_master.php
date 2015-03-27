<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pr_air_master extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Create Publish Rate Master Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('pr_air_master', $data);
	}

	
	/**
	 * Load Publish Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		$query = $this->db->get('pr_air_master');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	
	/**
	 * Delete Publish Rate Master Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $vendor_id )
	{
		$this->db->where('vendor_id', $vendor_id);
		return $this->db->delete('pr_air_master');
		// return $this->db->affected_rows() > 0;
	}

	function all()
	{
		
		$this->db->order_by("vendor_id", "asc"); 
		$this->db->order_by("date_from", "asc"); 
		$query=$this->db->get('pr_air_master');
		return $query->result_array();
	}

}
?>
