<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msales_com extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function is_exist( $id )
	{
		$this->db->where('sales_code', $id);
		$query = $this->db->get('sales_com');
		return $query->num_rows > 0;
	}
	//Membuat Data sales_com
	function create( $data )
	{
		if( ! $this->is_exist( $data['sales_code'] , $data['date']) ){
			$data = array(
			      'sales_code' => $data['sales_code']
				, 'nama_sales' => $data['nama_sales']
				, 'date' => $data['date']
				, 'team' => $data['team']
			);
			if ($this->db->insert('sales_com', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	// Membaca nilai Data sales_com
	function read( $key )
	{
	$sql="select p.*,c.nama_sales as nama_sales from gl_sales_com as p left join gl_msales as c on p.sales_code=c.sales_code where p.sales_code='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	//Update Data sales_com
	function update( $data )
	{
		if( $this->is_exist( $data['sales_code'] ) ){
			$this->db->set('nama_sales', $data['nama_sales']);
			$this->db->set('team', $data['team']);
			$this->db->set('date', $data['date']);
			$this->db->where('sales_code', $data['sales_code']);
			if( $this->db->update('sales_com')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data sales_con_con
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('sales_code', $key);
			if ($this->db->delete('sales_com')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data sales_con
	function search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_sales_com.date LIKE "%'.$key.'%"  )' );
		}
		$query = $gl_db->get('sales_com');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	
	/**
	 * Load all sales_con_con data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('sales_com');
		return $query->result_array();
	}
	function nama_sales( $key )
	{
	$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('date', $key);
		$query = $gl_db->get('sales_com');
		if( $query->num_rows > 0 ){
		} else {
			return NULL;
		}
	}
	
}
