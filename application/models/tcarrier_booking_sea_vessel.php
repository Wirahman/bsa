<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tcarrier_booking_sea_vessel extends CI_Model {

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
		return $this->db->insert_batch('carrier_booking_sea_vessel', $data);
	}

	/**
	 * Load booking cargo sea transaksi data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function load( $si_no)
	{
		$this->db->where('si_no', $si_no);
		$query = $this->db->get('carrier_booking_sea_vessel');
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
	function clean( $si_no )
	{
		$this->db->where('si_no', $si_no);
		return $this->db->delete('carrier_booking_sea_vessel');
		// return $this->db->affected_rows() > 0;
	}

}
?>