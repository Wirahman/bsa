<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcommodity_class extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('comclass', $id);
		$query = $this->db->get('commodity_class');
		return $query->num_rows > 0;
	}
	//Membuat Data Commodity_class
	function create( $data )
	{
		if( ! $this->is_exist( $data['comclass'] ) ){
			$data = array(
				'comclass' => $data['comclass']
				, 'comdesc' => $data['comdesc']
			);
			if ($this->db->insert('commodity_class', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data Commodity_class
	function read( $key )
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
	//Update Data Commodity_class
	function update( $data )
	{
		if( $this->is_exist( $data['comclass'] ) ){
			$this->db->set('comdesc', $data['comdesc']);
			$this->db->where('comclass', $data['comclass']);
			if( $this->db->update('commodity_class')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data Commodity_class
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('comclass', $key);
			if ($this->db->delete('commodity_class')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data Commodity_class
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_commodity_class.comclass LIKE "%'.$key.'%" OR gl_commodity_class.comdesc LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('commodity_class');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all commodity_class data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('commodity_class');
		return $query->result_array();
	}
	function comdesc( $key )
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
	
}