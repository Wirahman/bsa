<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mcustomer extends CI_Model {

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
	 
	 function is_exist( $id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('cus_id', $id);
		$query = $gl_db->get('customer');
		return $query->num_rows > 0;
	}
	
	
	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	 
	 function kepala_country( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('country_code', $key);
		$query = $gl_db->get('country');
		if( $query->num_rows > 0 ){
			return $query->row('country_name');
		} else {
			return NULL;
		}
	}
	
	function kepala_city( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('city_code', $key);
		$query = $gl_db->get('city');
		if( $query->num_rows > 0 ){
			return $query->row('city_name');
		} else {
			return NULL;
		}
	}
	
	function create( $data )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( ! $this->is_exist( $data['cus_id'] ) ){
			$data = array(
				'cus_id' => $data['cus_id']
				, 'type' => $data['type']
				, 'name' => $data['name']
				, 'npwp' => $data['npwp']
				, 'address' => $data['address']
				, 'address1' => $data['address1']
				, 'address2' => $data['address2']
				, 'address_tax' => $data['address_tax']
				, 'address_tax1' => $data['address_tax1']
				, 'address_tax2' => $data['address_tax2']
				, 'region_code' => $data['region_code']
				, 'zip' => $data['zip']
				, 'fax' => $data['fax']
				, 'phone' => $data['phone']
				, 'email' => $data['email']
				, 'website' => $data['website']
				, 'contack_person' => $data['contack_person']
				, 'dept' => $data['dept']
				, 'credit_term' => $data['credit_term']
				, 'country_code' => $data['country_code']
				, 'city_code' => $data['city_code']
				, 'shipper' => $data['shipper']
				, 'consignee' => $data['consignee']
				, 'agent' => $data['agent']
				, 'shippingline' => $data['shippingline']
				, 'airline' => $data['airline']
				, 'coloader' => $data['coloader']
			);
			if($gl_db->insert('customer', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	function read( $key, $cond='' )
	{
	$sql="select p.*,
	c.country_name as country_name,
	n.city_name as city_name,
	r.region_name as region_name from 
	((gl_customer as p left join gl_country as c on p.country_code=c.country_code)
	left join gl_city as n on p.city_code=n.city_code)
	left join gl_region as r on p.region_code=r.region_code where p.cus_id='".$key."'";
	if($cond!="")
	{
		if($cond=='shipper')
		{
			$sql.=" and shipper='1' ";
		}
		elseif($cond=='consignee')
		{
			$sql.=" and consignee='1'";
		}
		elseif($cond=='agent')
		{
			$sql.=" and agent='1'";
		}
		elseif($cond=='shippingline')
		{
			$sql.=" and shippingline='1'";
		}
		elseif($cond=='airline')
		{
			$sql.=" and airline='1'";
		}
		elseif($cond=='coloader')
		{
			$sql.=" and coloader='1'";
		}
		elseif($cond=='notify')
		{
			$sql.=" and notify='1'";
		}
	}	
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	
	function readcountry( $key )
	{
	$sql="select p.*,c.country_name as nama_country from(gl_customer as p left join gl_country as c on p.country_code=c.country_code)where p.cus_id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function readcity( $key )
	{
	$sql="select p.*,c.city_name as nama_city from(gl_customer as p left join gl_city as c on p.city_code=c.city_code)where p.cus_id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	// function all()
	// {
	// $sql="select p.*,
	// c.name as customer_name,
	// r.nama_sales as nama_sales from
	// (gl_sea_quot as p left join gl_customer as c on p.cus_id=c.cus_id)
	// left join gl_msales as r on p.sales_code=r.sales_code order by p.quot_id";
		// $query = $this->db->query($sql,array());
		// if( $query->num_rows > 0 ){
			// return $query->result_array();
		// } else {
			// return NULL;
		// }
	// }
	
	function all()
	{
	
	$sql="select p.*,
	c.country_name as country_name,
	n.city_name as city_name,
	r.region_name as region_name from 
	((gl_customer as p left join gl_country as c on p.country_code=c.country_code)
	left join gl_city as n on p.city_code=n.city_code)
	left join gl_region as r on p.region_code=r.region_code order by p.cus_id";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	function allcountry()
	{
	$sql="select p.*,c.country_name as country_name from gl_customer as p left join gl_country as c on p.country_code=c.country_code order by p.cus_id";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	function allcity()
	{
	$sql="select p.*,c.city_name as city_name from gl_customer as p left join gl_city as c on p.city_code=c.city_code order by p.cus_id";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	function customer_name( $key )
	{
	$sql="select cus_id from gl_customer where cus_id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('cus_id');
		} else {
			return NULL;
		}
	}
	
	
	/**
	 * Update account data
	 *
	 * @param	array
	 * @return	bool
	 */
	 
	function update( $data )
	{
		if( !$this->is_exist( $data['cus_id'] ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->set('type', $data['type']);
			$gl_db->set('name', $data['name']);
			$gl_db->set('npwp', $data['npwp']);
			$gl_db->set('address', $data['address']);
			$gl_db->set('address1', $data['address1']);
			$gl_db->set('address2', $data['address2']);
			$gl_db->set('address_tax', $data['address_tax']);
			$gl_db->set('address_tax1', $data['address_tax1']);
			$gl_db->set('address_tax2', $data['address_tax2']);
			$gl_db->set('region_code', $data['region_code']);
			$gl_db->set('zip', $data['zip']);
			$gl_db->set('fax', $data['fax']);
			$gl_db->set('phone', $data['phone']);
			$gl_db->set('email', $data['email']);
			$gl_db->set('website', $data['website']);
			$gl_db->set('contack_person', $data['contack_person']);
			$gl_db->set('dept', $data['dept']);
			$gl_db->set('credit_term', $data['credit_term']);
			$gl_db->set('country_code', $data['country_code']);
			$gl_db->set('city_code', $data['city_code']);
			$gl_db->set('shipper', $data['shipper']);
			$gl_db->set('consignee', $data['consignee']);
			$gl_db->set('agent', $data['agent']);
			$gl_db->set('shippingline', $data['shippingline']);
			$gl_db->set('airline', $data['airline']);
			$gl_db->set('coloader', $data['coloader']);
			$gl_db->where('cus_id', $data['cus_id']);
			if ($gl_db->update('customer')){
				return '1';
			}else{
				return '0';
			}
		}
	}
	
	/**
	 * Delete account data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $key )
	{
		if( !$this->is_exist( $key ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->where('cus_id', $key);
			if ($gl_db->delete('customer')){
				return '1';
			}else{
				return '0';
			}
		}
	}

	/**
	 * Search account data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
}
/* End of file mcustomer.php */
/* Location: ./application/models/mcustomer.php */
	
	