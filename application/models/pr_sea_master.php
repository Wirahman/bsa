<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pr_sea_master extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Create Publish Rate Master Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('pr_sea_master', $data);
	}

	
	/**
	 * Load Publish Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $vendor_id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('vendor_id', $vendor_id);
		$query = $gl_db->get('pr_sea_master');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	//Lantas, bagaimana gw harus deklarasikan nilai tgl_from, tgl_until, charges, vendor_id, portawal, dan portakhir
	//Itu yang gw bingung *Done
	// gw lagi mikir dulu ya bro, ganti
	// temen lu bilang lu disuruh ngapain tadi? ganti
	function load( $vendor_id)
	{
		$this->db->where('vendor_id', $vendor_id);
		$query = $this->db->get('pr_sea_master');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	//tgl_from , tgl_until , charges, vendor_id, portawal, portakhir
	// -vendor_id,
	// -date_from,
	// -date_until,
	// -charges_code,
	// -code_awal,
	// -code_akhir,
	// -unit_code,
	// -currency_code
	function load_br($vendor_id, $tgl_from, $tgl_until, $charges, $portawal, $portakhir)
	{
		$this->db->where('vendor_id', $vendor_id);
		$this->db->where('date_from', $tgl_from);
		$this->db->where('date_until', $tgl_until);
		$this->db->where('charges_code', $charges);
		$this->db->where('code_awal', $portawal);
		$this->db->where('code_akhir', $portakhir);
		$query = $this->db->get('pr_sea_master');
		if( $query->num_rows > 0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	/**
	 * Delete Publish Rate Master Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $vendor_id )
	{
		$this->db->where('vendor_id', $vendor_id);
		return $this->db->delete('pr_sea_master');
		// return $this->db->affected_rows() > 0;
	}

	function all()
	{
		
		$this->db->order_by("vendor_id", "asc"); 
		$this->db->order_by("date_from", "asc"); 
		$query=$this->db->get('pr_sea_master');
		return $query->result_array();
	}

}
?>
