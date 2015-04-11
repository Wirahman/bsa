<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tair_gross_profit_export_revenue extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create Air Gross Profit Export transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('air_gross_profit_export_revenue', $data);
	}

	/**
	 * Load Air Gross Profit Export transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $gp_no )
	{
		$this->db->where('gp_no', $gp_no);
		$query = $this->db->get('air_gross_profit_export_revenue');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Air Gross Profit Export data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $gp_no )
	{
		$this->db->where('gp_no', $gp_no);
		return $this->db->delete('air_gross_profit_export_revenue');
	}

}
?>