<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcountry extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('country_code', $id);
		$query = $this->db->get('country');
		return $query->num_rows > 0;
	}
	//Membuat Data Country
	function create( $data )
	{
		if( ! $this->is_exist( $data['country_code'] ) ){
			$data = array(
				'country_code' => $data['country_code']
				, 'country_name' => $data['country_name']
			);
			if ($this->db->insert('country', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data Country
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('country_code', $key);
		$query = $gl_db->get('country');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data Country
	function update( $data )
	{
		if( $this->is_exist( $data['country_code'] ) ){
			$this->db->set('country_name', $data['country_name']);
			$this->db->where('country_code', $data['country_code']);
			if( $this->db->update('country')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data Country
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('country_code', $key);
			if ($this->db->delete('country')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data Country
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_country.country_code LIKE "%'.$key.'%" OR gl_country.country_name LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('country');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all country data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('country');
		return $query->result_array();
	}
	function country_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('country_code', $key);
		$query = $gl_db->get('country');
		if( $query->num_rows > 0 ){
			return $query->row('country_name');
		} else {
			return NULL;
		}
	}
	
}
