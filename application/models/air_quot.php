<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Air_quot extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Check data is exist or not
	 *
	 * @param	string
	 * @return	bool
	 */
	 function is_exist( $quot_id )
	{
		$this->db->where('quot_id', $quot_id);
		$query = $this->db->get('air_quot');
		return $query->num_rows > 0;
	}
	
	/**
	 * Create Air Quotation Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['quot_id'] ) ){
			$data = array(
				  'quot_id' 			=> $data['quot_id']
				, 'date' 				=> $data['date']
				, 'cus_id' 				=> $data['cus_id']
				, 'service' 			=> $data['service']
				, 'attn' 				=> $data['attn']
				, 'route' 				=> $data['route']
				, 're'					=> $data['re']
				, 'commodity' 			=> $data['commodity']
				, 'regards' 			=> $data['regards']
				, 'freight' 			=> $data['freight']
				, 'valid_from'			=> $data['valid_from']
				, 'sales_code' 			=> $data['sales_code']
				, 'term_note' 			=> $data['term_note']
				, 'sales_note' 			=> $data['sales_note']
				, 'manager_note' 		=> $data['manager_note']
				, 'director_note' 		=> $data['director_note']
				
			);
			if($this->db->insert('air_quot', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	/**
	 * Read Air Quotation Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $key )
	{
	$sql="select p.*,c.name as customer_name,
	com.comdesc as commodity_class,
	freight.description as freight_desc,
	r.nama_sales as nama_sales from 
	(((gl_air_quot as p left join gl_customer as c on p.cus_id=c.cus_id)
	left join gl_commodity_class as com on p.commodity=com.comclass)
	left join gl_freight_term as freight on p.freight=freight.term_code)
	left join gl_msales as r on p.sales_code=r.sales_code where p.quot_id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	/**
	 * Update Air Quotation Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['quot_id']) ){
			$this->db->set('date', $data['date']);
			$this->db->set('cus_id', $data['cus_id']);
			$this->db->set('service', $data['service']);
			$this->db->set('attn', $data['attn']);
			$this->db->set('route', $data['route']);
			$this->db->set('re', $data['re']);
			$this->db->set('commodity', $data['commodity']);
			$this->db->set('regards', $data['regards']);
			$this->db->set('freight', $data['freight']);
			$this->db->set('valid_from', $data['valid_from']);
			$this->db->set('sales_code', $data['sales_code']);
			$this->db->set('term_note', $data['term_note']);
			$this->db->set('sales_note', $data['sales_note']);
			$this->db->set('manager_note', $data['manager_note']);
			$this->db->set('director_note', $data['director_note']);
			$this->db->where('quot_id', $data['quot_id']);
			if ($this->db->update('air_quot')){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}
	/**
	 * Delete Air Quotation Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $quot_id)
	{
		$this->db->where('quot_id', $quot_id);
		return $this->db->delete('air_quot');
		
	}
	/**
	 * Read Air Quotation Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(quot_id) as quot_id from gl_air_quot where ((month(date)='".$pecah[1]."' and year(date)='".$pecah[2]."') or left(date,6)='".$pecah[2].$pecah[1]."' or left(date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('quot_id');
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Air Quotation Data
	 *
	 * @return	array
	 */
	function all()
	{
		
		$this->db->order_by("quot_id", "asc"); 
		$this->db->order_by("date", "asc"); 
		$query=$this->db->get('air_quot');
		return $query->result_array();
	}
}
/* End of file air_quot.php */
/* Location: ./application/models/air_quot.php */
