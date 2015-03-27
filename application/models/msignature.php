<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msignature extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('signature_code', $id);
		$query = $this->db->get('signature');
		return $query->num_rows > 0;
	}
	//Membuat Data signature
	function create( $data )
	{
		if( ! $this->is_exist( $data['signature_code'] ) ){
			$data = array(
				'signature_code' => $data['signature_code']
				, 'nama' => $data['nama']
				, 'title' => $data['title']
			);
			if ($this->db->insert('signature', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data signature
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('signature_code', $key);
		$query = $gl_db->get('signature');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data signature
	function update( $data )
	{
		if( $this->is_exist( $data['signature_code'] ) ){
			$this->db->set('nama', $data['nama']);
			$this->db->set('title', $data['title']);
			$this->db->where('signature_code', $data['signature_code']);		
			if( $this->db->update('signature')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data signature
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('signature_code', $key);
			if ($this->db->delete('signature')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data signature
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_signature.signature_code LIKE "%'.$key.'%" OR gl_signature.nama LIKE "%'.$key.'%" )' );
		}

	
		$query = $gl_db->get('signature');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all signature data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('signature');
		return $query->result_array();
	}
	function nama_signature( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('signature_code', $key);
		$query = $gl_db->get('signature');
		if( $query->num_rows > 0 ){
			return $query->row('nama');
		} else {
			return NULL;
		}
	}
	
}
