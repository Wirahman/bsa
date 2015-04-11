<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tsea_invoice_ap_charges extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create Sea Invoice Ar transaksi Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('sea_invoice_ap_charges', $data);
	}

	/**
	 * Load Sea Invoice Ar transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $invoice_no)
	{
		$this->db->where('invoice_no', $invoice_no);
		$query = $this->db->get('sea_invoice_ap_charges');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		}else{
			return NULL;
		}
	}

	/**
	 * Delete Sea Invoice Ar Transaksi Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $invoice_no )
	{
		$this->db->where('invoice_no', $invoice_no);
		return $this->db->delete('sea_invoice_ap_charges');
	}
	
}
?>