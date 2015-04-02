<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tcarrier_booking_air_route extends CI_Model {

	function __construct()
	{
		//Call the Model Constructor
		parent::__construct();
	}

	/**
	 * Create Carrier Booking Air Transaksi Data
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		return $this->db->insert_batch('carrier_booking_air_route', $data);
	}

	/**
	 * Load Carrier Booking Air Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $si_no)
	{
		$this->db->where('si_no', $si_no);
		$query = $this->db->get('carrier_booking_air_route');
		if( $query->num_rows > 0){
			return $query->result_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Delete Carrier Booking Air Transaksi data
	 *
	 * @param	string
	 * @return	bool
	 */
	function clean( $si_no )
	{
		$this->db->where('si_no', $si_no);
		return $this->db->delete('carrier_booking_air_route');
		// return $this->db->affected_rows() > 0;
	}

}
?>