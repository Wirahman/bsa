<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcurrency extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('currency_code', $id);
		$query = $this->db->get('currency');
		return $query->num_rows > 0;
	}
	//Membuat Data currency
	function create( $data )
	{
		if( ! $this->is_exist( $data['currency_code'] ) ){
			$data = array(
				'currency_code' => $data['currency_code']
				, 'description' => $data['description']
				, 'function' => $data['function']
				, 'symbol' => $data['symbol']
				
			);
			if ($this->db->insert('currency', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	//coba fungsi cekbox
	
					
	// Membaca nilai Data currency
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('currency_code', $key);
		$query = $gl_db->get('currency');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data currency
	function update( $data )
	{
		if( $this->is_exist( $data['currency_code'] ) ){
			$this->db->set('description', $data['description']);
			$this->db->set('function', $data['function']);
			$this->db->set('symbol', $data['symbol']);
			$this->db->where('currency_code', $data['currency_code']);
			if( $this->db->update('currency')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data currency
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('currency_code', $key);
			if ($this->db->delete('currency')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data currency
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_currency.currency_code LIKE "%'.$key.'%" OR gl_currency.description LIKE "%'.$key.'%" )' );
		}
		$query = $gl_db->get('currency');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all currency data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('currency');
		return $query->result_array();
	}
	function nama_currency( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('currency_code', $key);
		$query = $gl_db->get('currency');
		if( $query->num_rows > 0 ){
			return $query->row('description');
		} else {
			return NULL;
		}
	}
	
//	function ketcurrency( $key )
	//{
	//	$sql="select s.currency_code,s.nama_currency,d.currency_code as currency_com,if(isnull(d.currency_code),'currency','SUPERVISOR') as tipe from gl_currency as s left join gl_currency as d on s.currency_code=d.currency_code where s.currency_code='". $key ."' and nonaktif=0";
	//	$query=$this->db->query($sql,array());
	//	if( $query->num_rows > 0 ){
	//		return $query->row_array();
//		} else {
	//		return NULL;
	//	}
//	}
	
}
