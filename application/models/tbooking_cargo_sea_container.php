<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tbooking_cargo_sea_container extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create booking cargo sea transaksi data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('booking_cargo_sea_container', $data);
	}

	/**
	 * Load booking cargo sea transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $order_no )
	{
		$this->db->where('order_no', $order_no);
		$query = $this->db->get('booking_cargo_sea_container');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete booking cargo sea data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $order_no )
	{
		$this->db->where('order_no', $order_no);
		return $this->db->delete('booking_cargo_sea_container');
	}

}
?>