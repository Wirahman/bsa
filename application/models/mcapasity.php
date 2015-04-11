<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcapasity extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('capasity_code', $id);
		$query = $this->db->get('capasity');
		return $query->num_rows > 0;
	}
	//Membuat Data City
	function create( $data )
	{
		if( ! $this->is_exist( $data['capasity_code'] ) ){
			$data = array(
				'capasity_code' => $data['capasity_code']
				, 'description' => $data['description']
			);
			if ($this->db->insert('capasity', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data City
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('capasity_code', $key);
		$query = $gl_db->get('capasity');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data City
	function update( $data )
	{
		if( $this->is_exist( $data['capasity_code'] ) ){
			$this->db->set('description', $data['description']);
			$this->db->where('capasity_code', $data['capasity_code']);
			if( $this->db->update('capasity')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data City
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('capasity_code', $key);
			if ($this->db->delete('capasity')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}

	/**
	 * Load all capasity data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('capasity');
		return $query->result_array();
	}
	function description( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('capasity_code', $key);
		$query = $gl_db->get('capasity');
		if( $query->num_rows > 0 ){
			return $query->row('description');
		} else {
			return NULL;
		}
	}
	
}