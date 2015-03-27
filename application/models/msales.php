<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msales extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('sales_code', $id);
		$query = $this->db->get('msales');
		return $query->num_rows > 0;
	}
	//Membuat Data sales
	function create( $data )
	{
		if( ! $this->is_exist( $data['sales_code'] ) ){
			$data = array(
				'sales_code' => $data['sales_code']
				, 'nama_sales' => $data['nama_sales']
				, 'address' => $data['address']
				, 'address1' => $data['address1']
				, 'address2' => $data['address2']
				, 'phone' => $data['phone']
				, 'team' => $data['team']
				, 'title' => $data['title']
				, 'no_ktp' => $data['no_ktp']
			);
			if ($this->db->insert('msales', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data sales
	function read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('sales_code', $key);
		$query = $gl_db->get('msales');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data sales
	function update( $data )
	{
		if( $this->is_exist( $data['sales_code'] ) ){
			$this->db->set('nama_sales', $data['nama_sales']);
			$this->db->set('address', $data['address']);
			$this->db->set('address1', $data['address1']);
			$this->db->set('address2', $data['address2']);
			$this->db->set('phone', $data['phone']);
			$this->db->set('team', $data['team']);
			$this->db->set('title', $data['title']);
			$this->db->set('no_ktp', $data['no_ktp']);
			$this->db->where('sales_code', $data['sales_code']);
			if( $this->db->update('msales')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data sales
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('sales_code', $key);
			if ($this->db->delete('msales')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data sales
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_msales.sales_code LIKE "%'.$key.'%" OR gl_msales.nama_sales LIKE "%'.$key.'%" )' );
		}
		$query = $gl_db->get('msales');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all sales data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('msales');
		return $query->result_array();
	}
	function nama_sales( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('sales_code', $key);
		$query = $gl_db->get('msales');
		if( $query->num_rows > 0 ){
			return $query->row('nama_sales');
		} else {
			return NULL;
		}
	}
	
	function ketsales( $key )
	{
		$sql="select s.sales_code,s.nama_sales,d.sales_code as sales_com,if(isnull(d.sales_code),'SALES','SUPERVISOR') as tipe from gl_msales as s left join gl_msales as d on s.sales_code=d.sales_code where s.sales_code='". $key ."' and nonaktif=0";
		$query=$this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
}
