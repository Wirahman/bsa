<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales_comisi_master extends CI_Model {

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
		return $this->db->insert_batch('sales_com_master', $data);
	}

	
	/**
	 * Load Buying Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $sales_code)
	{
		$this->db->where('sales_code', $sales_code);
		$query = $this->db->get('sales_com_master');
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
	function clean( $sales_code)
	{
		$this->db->where('sales_code', $sales_code);
		return $this->db->delete('sales_com_master');
		// return $this->db->affected_rows() > 0;
	}

	function all()
	{
		
		$this->db->order_by("sales_code", "asc"); 
		$this->db->order_by("date_from", "asc"); 
		$query=$this->db->get('sales_com_master');
		return $query->result_array();
	}

}
?>
