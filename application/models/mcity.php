<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcity extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('city_code', $id);
		$query = $this->db->get('city');
		return $query->num_rows > 0;
	}
	//Membuat Data City
	function create( $data )
	{
		if( ! $this->is_exist( $data['city_code'] ) ){
			$data = array(
				'city_code' => $data['city_code']
				, 'city_name' => $data['city_name']
			);
			if ($this->db->insert('city', $data)){
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
		$gl_db->where('city_code', $key);
		$query = $gl_db->get('city');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data City
	function update( $data )
	{
		if( $this->is_exist( $data['city_code'] ) ){
			$this->db->set('city_name', $data['city_name']);
			$this->db->where('city_code', $data['city_code']);
			if( $this->db->update('city')){
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
			$this->db->where('city_code', $key);
			if ($this->db->delete('city')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}

	/**
	 * Load all city data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('city');
		return $query->result_array();
	}
	function city_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('city_code', $key);
		$query = $gl_db->get('city');
		if( $query->num_rows > 0 ){
			return $query->row('city_name');
		} else {
			return NULL;
		}
	}
	
}