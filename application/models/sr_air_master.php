<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sr_air_master extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Create Selling Rate Master Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('sr_air_master', $data);
	}

	
	/**
	 * Load Selling Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		$query = $this->db->get('sr_air_master');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	//tgl_from, tgl_until, charges, cus_id, portawal, portakhir
	function load_buying_rate($cus_id, $tgl_from, $tgl_until, $charges, $portawal, $portakhir)
	{
		$this->db->where('cus_id', $cus_id);
		$this->db->where('date_from', $tgl_from);
		$this->db->where('date_until', $tgl_until);
		$this->db->where('charges_code', $charges);
		$this->db->where('code_awal', $portawal);
		$this->db->where('code_akhir', $portakhir);
		$query = $this->db->get('br_air_master');
		if( $query->num_rows > 0){
			return $query ->result_array();
		} else {
			return Null;
		}
	}
	
	
	/**
	 * Delete Selling Rate Master Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $cus_id)
	{
		$this->db->where('cus_id', $cus_id);
		return $this->db->delete('sr_air_master');
		// return $this->db->affected_rows() > 0;
	}

	function all()
	{
		
		$this->db->order_by("cus_id", "asc"); 
		$this->db->order_by("date_from", "asc"); 
		$query=$this->db->get('sr_air_master');
		return $query->result_array();
	}

}
?>
