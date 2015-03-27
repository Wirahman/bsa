<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mcommodity extends CI_Model {

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
	function is_exist( $id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('code', $id);
		$query = $gl_db->get('commodity');
		return $query->num_rows > 0;
	}

	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function kepala_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('comclass', $key);
		$query = $gl_db->get('commodity_class');
		if( $query->num_rows > 0 ){
			return $query->row('comdesc');
		} else {
			return NULL;
		}
	}
	function create( $data )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( ! $this->is_exist( $data['code'] ) ){
			$data = array(
				'code' => $data['code']
				, 'name' => $data['name']
				, 'desc' => $data['desc']
				, 'commodity_class' => $data['commodity_class']
			);
			if($gl_db->insert('commodity', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	function read( $key )
	{
	$sql="select p.*,c.comdesc as nama_kepala from gl_commodity as p left join gl_commodity_class as c on p.commodity_class=c.comclass where p.code='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	
	function readcomclass( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('comclass', $key);
		$query = $gl_db->get('commodity_class');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function all()
	{
	$sql="select p.*,c.comdesc as nama_kepala from gl_commodity as p left join gl_commodity_class as c on p.commodity_class=c.comclass order by p.code";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	function commodity_name( $key )
	{
	$sql="select name from gl_commodity where code='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('name');
		} else {
			return NULL;
		}
	}
	
	/**
	 * Update account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( !$this->is_exist( $data['code'] ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->set('name', $data['name']);
			$gl_db->set('desc', $data['desc']);
			$gl_db->set('commodity_class', $data['commodity_class']);
			$gl_db->where('code', $data['code']);
			if ($gl_db->update('commodity')){
				return '1';
			}else{
				return '0';
			}
		}
	}
	
	/**
	 * Delete account data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $key )
	{
		if( !$this->is_exist( $key ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->where('code', $key);
			if ($gl_db->delete('commodity')){
				return '1';
			}else{
				return '0';
			}
		}
	}
	/**
	 * Search account data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	 
}
/* End of file maccount.php */
/* Location: ./application/models/maccount.php */
