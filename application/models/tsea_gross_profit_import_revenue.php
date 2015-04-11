<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tsea_gross_profit_import_revenue extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create Sea Gross Profit Import transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('sea_gross_profit_import_revenue', $data);
	}

	/**
	 * Load Sea Gross Profit Import transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $gp_no )
	{
		$this->db->where('gp_no', $gp_no);
		$query = $this->db->get('sea_gross_profit_import_revenue');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Sea Gross Profit Import data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $gp_no )
	{
		$this->db->where('gp_no', $gp_no);
		return $this->db->delete('sea_gross_profit_import_revenue');
	}

}
?>