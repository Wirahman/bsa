<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sr_sea extends CI_Model {

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
		$query = $this->db->get('sr_sea');
		return $query->num_rows > 0;
	}
	
	function charges_description( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('charges_code', $key);
		$query = $gl_db->get('description');
		if( $query->num_rows > 0 ){
			return $query->row('charges_description');
		} else {
			return NULL;
		}
	}
	function port_awal( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('code_awal', $key);
		$query = $gl_db->get('port_name');
		if( $query->num_rows > 0 ){
			return $query->row('port_awal');
		} else {
			return NULL;
		}
	}
	
	function port_akhir( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('code_akhir', $key);
		$query = $gl_db->get('port_name');
		if( $query->num_rows > 0 ){
			return $query->row('port_akhir');
		} else {
			return NULL;
		}
	}
	
	function unit_description( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('unit_code', $key);
		$query = $gl_db->get('unit_description');
		if( $query->num_rows > 0 ){
			return $query->row('unit_description');
		} else {
			return NULL;
		}
	}
	/**
	 * Create Selling Rate Data
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
			if($this->db->insert('sr_sea', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	/**
	 * Read Selling Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $vendor_id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('vendor_id', $vendor_id);
		$query = $gl_db->get('sr_sea');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	function readcharges( $key )
	{
	$sql="select p.*,c.description as charges_description from gl_sr_sea_master as p left join gl_charges as c on p.charges_code=c.charges_code where p.id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function readawal( $key )
	{
	$sql="select p.*,c.port_name as port_awal from gl_sr_sea_master as p left join gl_seaport as c on p.code_awal=c.port_kode where p.id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function readakhir( $key )
	{
	$sql="select p.*,c.port_name as port_akhir from gl_sr_sea_master as p left join gl_seaport as c on p.code_akhir=c.port_kode where p.id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function readunit( $key )
	{
	$sql="select p.*,c.description as unit_description from gl_sr_sea_master as p left join gl_seaport as c on p.unit_code=c.unit_code where p.id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	function readcurrency( $key )
	{
	$sql="select p.*,c.description as currency_description from gl_sr_sea_master as p left join gl_seaport as c on p.currency_code=c.currency_code where p.id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	/**
	 * Update Selling Rate Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['vendor_id']) ){
			$this->db->set('company_name', $data['company_name']);
			$this->db->where('vendor_id', $data['vendor_id']);
			if ($this->db->update('sr_sea')){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}
	
	
	/**
	 * Delete Selling Rate Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		return $this->db->delete('sr_sea');
		// return $this->db->affected_rows() > 0;
	}
	/**
	 * Search Selling Rate Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Selling Rate Data
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
		$query = $this->db->get('sr_sea_master');
		if( $query->num_rows > 0 ){
			return $query->id++;
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Selling Rate Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('sr_sea');
		return $query->result_array();
	}
}
/* End of file sr_sea.php */
/* Location: ./application/models/sr_sea.php */
