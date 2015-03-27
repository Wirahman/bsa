<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Munit extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('unit_code', $id);
		$query = $this->db->get('unit');
		return $query->num_rows > 0;
	}
	//Membuat Data Unit
	function create( $data )
	{
		if( ! $this->is_exist( $data['unit_code'] ) ){
			$data = array(
				'unit_code' => $data['unit_code']
				, 'description' => $data['description']
			);
			if ($this->db->insert('unit', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data Unit
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('unit_code', $key);
		$query = $gl_db->get('unit');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data Unit
	function update( $data )
	{
		if( $this->is_exist( $data['unit_code'] ) ){
			$this->db->set('description', $data['description']);
			$this->db->where('unit_code', $data['unit_code']);
			if( $this->db->update('unit')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data Unit
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('unit_code', $key);
			if ($this->db->delete('unit')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data Unit
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_unit.unit_code LIKE "%'.$key.'%" OR gl_unit.description LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('unit');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all Unit data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('unit');
		return $query->result_array();
	}
	function description( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('unit_code', $key);
		$query = $gl_db->get('unit');
		if( $query->num_rows > 0 ){
			return $query->row('description');
		} else {
			return NULL;
		}
	}
	
}
