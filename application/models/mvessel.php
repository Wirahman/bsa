<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mvessel extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum

function is_exist( $id )
	{
		$this->db->where('vessel_code', $id);
		$query = $this->db->get('vessel');
		return $query->num_rows > 0;
	}
	
	//Membuat Data Vessel
function create( $data )
	{
		if( ! $this->is_exist( $data['vessel_code'] ) ){
			$data = array(
				'vessel_code' => $data['vessel_code']
				, 'vessel_name' => $data['vessel_name']
				, 'vessel_type' => $data['vessel_type']
				, 'flag' => $data['flag']
			);
			if ($this->db->insert('vessel', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data Vessel
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('vessel_code', $key);
		$query = $gl_db->get('vessel');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	//Update Data Vessel
	function update( $data )
	{
		if( $this->is_exist( $data['vessel_code'] ) ){
			$this->db->set('vessel_name', $data['vessel_name']);
			$this->db->set('vessel_type', $data['vessel_type']);
			$this->db->set('flag', $data['flag']);
			$this->db->where('vessel_code', $data['vessel_code']);
			if( $this->db->update('vessel')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data Vessel
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('vessel_code', $key);
			if ($this->db->delete('vessel')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data Vessel
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_vessel.vessel_code LIKE "%'.$key.'%" OR gl_vessel.vessel_name LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('vessel');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all vessel data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('vessel');
		return $query->result_array();
	}
	function vessel_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('vessel_code', $key);
		$query = $gl_db->get('vessel');
		if( $query->num_rows > 0 ){
			return $query->row('vessel_name');
		} else {
			return NULL;
		}
	}
	
}

