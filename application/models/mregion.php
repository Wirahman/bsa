<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mregion extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum

function is_exist( $id )
	{
		$this->db->where('region_code', $id);
		$query = $this->db->get('region');
		return $query->num_rows > 0;
	}
	
	//Membuat Data Region
function create( $data )
	{
		if( ! $this->is_exist( $data['region_code'] ) ){
			$data = array(
				'region_code' => $data['region_code']
				, 'region_name' => $data['region_name']
				, 'description' => $data['description']
			);
			if ($this->db->insert('region', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data Region
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('region_code', $key);
		$query = $gl_db->get('region');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data Region
	function update( $data )
	{
		if( $this->is_exist( $data['region_code'] ) ){
			$this->db->set('region_name', $data['region_name']);
			$this->db->set('description', $data['description']);
			$this->db->where('region_code', $data['region_code']);
			if( $this->db->update('region')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	
	//Delete Data Region
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('region_code', $key);
			if ($this->db->delete('region')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data Region
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_region.region_code LIKE "%'.$key.'%" OR gl_region.region_name LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('region');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	
	/**
	 * Load all region data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('region');
		return $query->result_array();
	}

	function region_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('region_code', $key);
		$query = $gl_db->get('region');
		if( $query->num_rows > 0 ){
			return $query->row('region_name');
		} else {
			return NULL;
		}
	}
	
}


