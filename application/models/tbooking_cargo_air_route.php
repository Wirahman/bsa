<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tbooking_cargo_air_route extends CI_Model {

	function __construct()
	{
		//Call the Model Constructor
		parent::__construct();
	}

	/**
	 * Create Booking Cargo Air Transaksi Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('booking_cargo_air_route', $data);
	}


	/**
	 * Load Booking Cargo Air Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $order_no)
	{
		$this->db->where('order_no', $order_no);
		$query = $this->db->get('booking_cargo_air_route');
		if( $query->num_rows > 0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Booking Cargo Air Transaksi data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $order_no )
	{
		$this->db->where('order_no', $order_no);
		return $this->db->delete('booking_cargo_air_route');
		// return $this->db->affected_rows() > 0;
	}

}
?>