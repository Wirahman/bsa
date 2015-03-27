<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mfreight_term extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('term_code', $id);
		$query = $this->db->get('freight_term');
		return $query->num_rows > 0;
	}
	//Membuat Data freight_term
	function create( $data )
	{
		if( ! $this->is_exist( $data['term_code'] ) ){
			$data = array(
				'term_code' => $data['term_code']
				, 'description' => $data['description']
			);
			if ($this->db->insert('freight_term', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data freight_term
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('term_code', $key);
		$query = $gl_db->get('freight_term');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data freight_term
	function update( $data )
	{
		if( $this->is_exist( $data['term_code'] ) ){
			$this->db->set('description', $data['description']);
			$this->db->where('term_code', $data['term_code']);
			if( $this->db->update('freight_term')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data freight_term
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('term_code', $key);
			if ($this->db->delete('freight_term')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data freight_term
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_freight_term.term_code LIKE "%'.$key.'%" OR gl_freight_term.description LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('freight_term');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all freight_term data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('freight_term');
		return $query->result_array();
	}
	function description( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('term_code', $key);
		$query = $gl_db->get('freight_term');
		if( $query->num_rows > 0 ){
			return $query->row('description');
		} else {
			return NULL;
		}
	}
	
}
