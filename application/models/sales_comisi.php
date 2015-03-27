<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sales_comisi extends CI_Model {

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
	function is_exist( $sales_code )
	{
		$this->db->where('sales_code', $sales_code);
		$query = $this->db->get('sales_com');
		return $query->num_rows > 0;
	}
	
	
	/**
	 * Create Buying Rate Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['sales_code'] ) ){
			$data = array(
				'sales_code' => $data['sales_code']
				, 'nama_sales' => $data['nama_sales']
				//, 'date' => $data['date']
				, 'team' => $data['team']
			);
			if($this->db->insert('sales_com', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	/**
	 * Read Buying Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	
	function read( $sales_code )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('sales_code', $sales_code);
		$query = $gl_db->get('sales_com');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	/**
	 * Update  Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['sales_code']) ){
			$this->db->set('nama_sales', $data['nama_sales']);
			//$this->db->set('date', $data['date']);
			$this->db->set('team', $data['team']);
			$this->db->where('sales_code', $data['sales_code']);
			if ($this->db->update('sales_com')){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}
	
	
	/**
	 * Delete  Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $sales_code)
	{
		$this->db->where('sales_code', $sales_code);
		return $this->db->delete('sales_com');
		// return $this->db->affected_rows() > 0;
	}
	/**
	 * Search  Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Buying Rate Data
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
		$query = $this->db->get('sales_com_master');
		if( $query->num_rows > 0 ){
			return $query->id++;
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Buying Rate Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('sales_com');
		return $query->result_array();
	}
}
/* End of file sales_comisi.php */
/* Location: ./application/models/sales_comisi.php */
