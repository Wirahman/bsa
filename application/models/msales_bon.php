<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msales_bon extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('date', $id);
		$query = $this->db->get('sales_bon');
		return $query->num_rows > 0;
	}
	//Membuat Data sales_bon
	function create( $data )
	{
		if( ! $this->is_exist( $data['date'] ) ){
			$data = array(
				'date' => $data['date']
				, 'target' => $data['target']
				, 'min_target' => $data['min_target']
				, 'percentage_bonus' => $data['percentage_bonus']
			);
			if ($this->db->insert('sales_bon', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data sales_bonus
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('date', $key);
		$query = $gl_db->get('sales_bon');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data sales_bonus
	function update( $data )
	{
		if( $this->is_exist( $data['date'] ) ){
			$this->db->set('min_target', $data['min_target']);
			$this->db->set('target', $data['target']);
			$this->db->set('percentage_bonus', $data['percentage_bonus']);
			$this->db->where('date', $data['date']);
			if( $this->db->update('sales_bon')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data sales_bon
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('date', $key);
			if ($this->db->delete('sales_bon')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data sales_bonus
	function search_date( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(date) as date from gl_sales_bon where ((day(date)='".$pecah[1]."' and month(date)='".$pecah[2]."' and year(date)='".$pecah[3]."') or left(date,6)='".$pecah[3].$pecah[2].$pecah[1]."' or left(date,4)=right('".$pecah[3].$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('date');
		} else {
			return NULL;
		}
	}
	
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_sales_bon.date LIKE "%'.$key.'%" OR gl_sales_bon.target LIKE "%'.$key.'%" )' );
		}
		$query = $gl_db->get('sales_bon');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all sales_bon data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('sales_bon');
		return $query->result_array();
	}
	function min_target( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('date', $key);
		$query = $gl_db->get('sales_bon');
		if( $query->num_rows > 0 ){
			return $query->row('target');
		} else {
			return NULL;
		}
	}
	
}
