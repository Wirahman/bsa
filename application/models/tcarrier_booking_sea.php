<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tcarrier_booking_sea extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Check data is exist or not
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_exist( $si_no )
	{
		$this->db->where('si_no', $si_no);
		$query = $this->db->get('carrier_booking_sea');
		return $query->num_rows > 0;
	}

	/**
	 * Create jurnal umum data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['si_no'] ) ){
			if($this->db->insert('carrier_booking_sea', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}

	/**
	 * Read jurnal umum data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $si_no)
	{
		$this->db->where('si_no', $si_no);
		$query = $this->db->get('carrier_booking_sea');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Update jurnal umum data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['si_no']) ){
			
			$this->db->where('si_no', $data['si_no']);
			if ($this->db->update('carrier_booking_sea', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}

	/**
	 * Delete jurnal umum data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $si_no)
	{
		$this->db->where('si_no', $si_no);
		return $this->db->delete('carrier_booking_sea');
		// return $this->db->affected_rows() > 0;
	}

	/**
	 * Search jurnal umum data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read jurnal umum data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(si_no) as si_no from gl_carrier_booking_sea where ((month(order_date)='".$pecah[1]."' and year(order_date)='".$pecah[2]."') or left(order_date,6)='".$pecah[2].$pecah[1]."' or left(order_date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('si_no');
		} else {
			return NULL;
		}
	}
	/**
	 * Load all jurnal umum data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('carrier_booking_sea');
		return $query->result_array();
	}
}
/* End of file tju.php */
/* Location: ./application/models/tju.php */