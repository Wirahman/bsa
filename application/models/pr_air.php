<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pr_air extends CI_Model {

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
	function is_exist( $vendor_id )
	{
		$this->db->where('vendor_id', $vendor_id);
		$query = $this->db->get('pr_air');
		return $query->num_rows > 0;
	}
	
	/**
	 * Create Publish Rate Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['vendor_id'] ) ){
			$data = array(
				'vendor_id' => $data['vendor_id']
				, 'company_name' => $data['company_name']
			);
			if($this->db->insert('pr_air', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	/**
	 * Read Publish Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $vendor_id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('vendor_id', $vendor_id);
		$query = $gl_db->get('pr_air');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	/**
	 * Update Publish Rate Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['vendor_id']) ){
			$this->db->set('company_name', $data['company_name']);
			$this->db->where('vendor_id', $data['vendor_id']);
			if ($this->db->update('pr_air')){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}
	
	
	/**
	 * Delete Publish Rate Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		return $this->db->delete('pr_air');
		// return $this->db->affected_rows() > 0;
	}
	/**
	 * Search Publish Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Publish Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $id )
	{
		$this->db->where('id', $id);
		$this->db->order_by('id');
		$this->db->limit(1);
		$query = $this->db->get('pr_air_master');
		if( $query->num_rows > 0 ){
			return $query->id++;
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Publish Rate Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('pr_air');
		return $query->result_array();
	}
}
/* End of file pr_air.php */
/* Location: ./application/models/pr_air.php */
