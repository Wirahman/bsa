<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sr_sea_master extends CI_Model {

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
		return $this->db->insert_batch('sr_sea_master', $data);
	}

	
	/**
	 * Load Selling Rate Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $cus_id)
	{
		$this->db->where('cus_id', $cus_id);
		$query = $this->db->get('sr_sea_master');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	//Ini function yang udah gw buat tapi ga gw pakai karena error
	//dia bilang untuk mengoper nilai tgl_from: tglawal , tgl_until: tglakhir , charges: charges_code , cus_id: cusid , portawal : port_awal, portakhir: port_akhir kedalam database yang ada di selling rate
	function load_buying_rate( $cus_id, $tgl_from, $tgl_until, $charges, $portawal, $portakhir)
	{		
		$this->db->where('cus_id', $cus_id);
		$this->db->where('date_from', $tgl_from);
		$this->db->where('date_until', $tgl_until);
		$this->db->where('charges_code',$charges);
		$this->db->where('code_awal', $portawal);
		$this->db->where('code_akhir', $portakhir);
		$query = $this->db->get('pr_sea_master');
		if( $query->num_rows >0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	function load_quot_id($quot_id)
	{
		$this->db->where('quot_id', $quot_id);
		$query = $this->db->get('sea_quot');
		$query = $this->db->get('sea_quot_transaksi');
		if( $query->num_rows >0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	/**
	 * Delete Selling Rate Master Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $cus_id )
	{
		$this->db->where('cus_id', $cus_id);
		return $this->db->delete('sr_sea_master');
		// return $this->db->affected_rows() > 0;
	}

	function all()
	{
		
		$this->db->order_by("cus_id", "asc"); 
		$this->db->order_by("date_from", "asc"); 
		$query=$this->db->get('sr_sea_master');
		return $query->result_array();
	}

}
?>
