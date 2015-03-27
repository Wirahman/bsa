<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mairport extends CI_Model {

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
		$gl_db->where('port_kode', $id);
		$query = $gl_db->get('airport');
		return $query->num_rows > 0;
	}
	
	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function country_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('country_code', $key);
		$query = $gl_db->get('country_name');
		if( $query->num_rows > 0 ){
			return $query->row('namacountry');
		} else {
			return NULL;
		}
	}
	function region_name( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('region_code', $key);
		$query = $gl_db->get('region_name');
		if( $query->num_rows > 0 ){
			return $query->row('namaregion');
		} else {
			return NULL;
		}
	}
	
	function create( $data )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( ! $this->is_exist( $data['port_kode'] ) ){
			$data = array(
				'port_kode' => $data['port_kode']
				, 'port_name' => $data['port_name']
				, 'country_code' => $data['country_code']
				, 'region_code' => $data['region_code']
				
			);
			if($gl_db->insert('airport', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	function read( $key )
	{
	$sql="select p.*,c.country_name as country_name,r.region_name as region_name from (gl_airport as p left join gl_country as c on p.country_code=c.country_code)left join gl_region as r on p.region_code=r.region_code where p.port_kode='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function readcountry( $key )
	{
	$sql="select p.*,c.country_name as country_name from gl_airport as p left join gl_country as c on p.country_code=c.country_code where p.port_kode='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	function readregion( $key )
	{
	$sql="select p.*,c.region_name as region_name from gl_airport as p left join gl_region as c on p.region_code=c.region_code where p.port_kode='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	function all()
	{
	
	$sql="select p.*,c.country_name as country_name, r.region_name as region_name from (gl_airport as p left join gl_country as c on p.country_code=c.country_code) left join gl_region as r on p.region_code=r.region_code order by p.port_kode";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	function allcountry()
	{
	$sql="select p.*,c.country_name as country_name from gl_airport as p left join gl_country as c on p.country_code=c.country_code order by p.port_kode";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	function allregion()
	{
	$sql="select p.*,c.region_name as region_name from gl_airport as p left join gl_region as c on p.region_code=c.region_code order by p.port_kode";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	function airport_name( $key )
	{
	$sql="select port_kode from gl_airport where port_kode='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('port_kode');
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
		if( !$this->is_exist( $data['port_kode'] ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->set('port_name', $data['port_name']);
			$gl_db->set('country_code', $data['country_code']);
			$gl_db->set('region_code', $data['region_code']);
			$gl_db->where('port_kode', $data['port_kode']);
			if ($gl_db->update('airport')){
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
			$gl_db->where('port_kode', $key);
			if ($gl_db->delete('airport')){
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
/* End of file maccount.php */
/* Location: ./application/models/maccount.php */