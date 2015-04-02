<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mairline extends CI_Model {

	function __construct()
	{
		// Call the Model Constructor
	}


	//Check data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('airline_id', $id);
		$query = $this->db->get('airline');
		return $query->num_rows > 0;
	}

	//Membuat Data Airline
	function create( $data )
	{
		if( ! $this->is_exist( $data['airline_id']))
		{
			$data = array(
				'airline_id' => $data['airline_id']
				, 'airline_name' => $data['airline_name']
				, 'flight_no' => $data['flight_no']
			);
			if ($this->db->insert('airline', $data)){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "ada";
		}
	}

	//Membaca Data Airline
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('airline_id', $key);
		$query = $gl_db->get('airline');
		if( $query->num_rows > 0){
			return $query->row_array();
		}else{
			return NULL;
		}
	}

	//Update Data Airline
	function update( $data )
	{
		if( $this->is_exist( $data['airline_id'])){
			$this->db->set('airline_name', $data['airline_name']);
			$this->db->set('flight_no', $data['flight_no']);
			$this->db->where('airline_id', $data['airline_id']);
			if( $this->db->update('airline')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "ada";
		}
	}

	//Delete Data Airline
	function delete ( $key )
	{
		if( $this->is_exist( $key )){
			$this->db->where('airline_id', $key);
			if ($this->db->delete('airline')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "ada";
		}
	}

	//Search Data Airline
	function search( $key = '', $status = ACTIVE)
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key )){
			$gl_db->where( '( gl_airline.airline_id LIKE "%'.$key.'%" OR gl_airline.airline_name LIKE "%'.$key.'%" )');
		}
		$query = $gl_db->get('airline');
		return $query->result_array();
	}

	//Load All Airline Data
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('airline');
		return $query->result_array();
	}

	function airline_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('airline_id', $key);
		$query = $gl_db->get('airline');
		if( $query->num_rows > 0 ){
			return $query->row('airline_name');
		}else{
			return NULL;
		}
	}



}

