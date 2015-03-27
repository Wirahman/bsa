<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Air_quot_transaksi extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Create Air Quotation Transaksi Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('air_quot_transaksi', $data);
	}
  
  /**
	 * Load Air Quotation Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	 
	function load( $quot_id)
	{
		$this->db->where('quot_id', $quot_id);
		$query = $this->db->get('air_quot_transaksi');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	// load_selling_rate( $_POST['vendor_id'], $_POST['tgl_from'], $_POST['tgl_until'], $_POST['charges'], $_POST['portawal'], $_POST['portakhir'] );
	function load_selling_rate($vendor_id, $tgl_from, $tgl_until, $charges, $portawal, $portakhir)
	{
		$this->db->where('vendor_id', $vendor_id);
		$this->db->where('date_from', $tgl_from);
		$this->db->where('date_until', $tgl_until);
		$this->db->where('charges_code',$charges);
		$this->db->where('code_awal', $portawal);
		$this->db->where('code_akhir', $portakhir);
		$query = $this->db->get('sr_air_master');
		if( $query->num_rows >0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	/**
	 * Delete Air Quotation Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $quot_id )
	{
		$this->db->where('quot_id', $quot_id);
		return $this->db->delete('air_quot_transaksi');
		// return $this->db->affected_rows() > 0;
	}
	
	function all()
	{
		
		$this->db->order_by("quot_id", "asc"); 
		$this->db->order_by("date", "asc"); 
		$query=$this->db->get('air_quot_transaksi');
		return $query->result_array();
	}

}
?>
