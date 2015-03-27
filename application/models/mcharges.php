<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcharges extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	// Check Data sudah ada atau belum
	function  is_exist( $id )
	{
		$this->db->where('charges_code', $id);
		$query = $this->db->get('charges');
		return $query->num_rows > 0;
	}
	//Membuat Data charges
	function  create( $data )
	{
		if( ! $this->is_exist( $data['charges_code'] ) ){
			$data = array(
				'charges_code' => $data['charges_code']
				, 'description' => $data['description']
				, 'traffic_lane' => $data['traffic_lane']
				, 'gl_code' => $data['gl_code']
				, 'gl_description' => $data['gl_description']
				, 'lintas' => $data['lintas']
				, 'type' => $data['type']
				, 'ket2' => $data['ket2']
										
			);
			if ($this->db->insert('charges', $data)){
				return "1";
			}else{
				return "0";
			}
		} else {
			return "ada";
		}

	}
	//coba fungsi cekbox
	
					
	// Membaca nilai Data charges
	function  read( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('charges_code', $key);
		$query = $gl_db->get('charges');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Update Data charges
	function  update( $data )
	{
		if( $this->is_exist( $data['charges_code'] ) ){
			$this->db->set('description', $data['description']);
			$this->db->set('traffic_lane', $data['traffic_lane']);
			$this->db->set('gl_code', $data['gl_code']);
			$this->db->set('gl_description', $data['gl_description']);
			$this->db->set('type', $data['type']);
			$this->db->set('ket2', $data['ket2']);
			$this->db->set('lintas', $data['lintas']);
			$this->db->where('charges_code', $data['charges_code']);
			if( $this->db->update('charges')){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "2";
		}
	}
	//Delete Data charges
	function  delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('charges_code', $key);
			if ($this->db->delete('charges')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	//Search Data charges
	function  search( $key = '', $status = ACTIVE )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( !empty( $key ) ){
			$gl_db->where( '( gl_charges.charges_code LIKE "%'.$key.'%" OR gl_charges.description LIKE "%'.$key.'%" )' );
		}
		$query = $gl_db->get('charges');
		// return $gl_db->last_query();
		return $query->result_array();
	}
	/**
	 * Load all charges data
	 *
	 * @return	array
	 */
	function  all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('charges');
		return $query->result_array();
	}
	function  nama_charges( $key )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('charges_code', $key);
		$query = $gl_db->get('charges');
		if( $query->num_rows > 0 ){
			return $query->row('description');
		} else {
			return NULL;
		}
	}
	
//	function  ketcharges( $key )
	//{
	//	$sql="select s.charges_code,s.nama_charges,d.charges_code as charges_com,if(isnull(d.charges_code),'charges','SUPERVISOR') as tipe from gl_charges as s left join gl_charges as d on s.charges_code=d.charges_code where s.charges_code='". $key ."' and nonaktif=0";
	//	$query=$this->db->query($sql,array());
	//	if( $query->num_rows > 0 ){
	//		return $query->row_array();
//		} else {
	//		return NULL;
	//	}
//	}
	
}
