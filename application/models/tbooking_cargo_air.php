<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tbooking_cargo_air extends CI_Model {

	function __construct()
	{
		//Call The Model Constructor
		parent::__construct();
	}

	/**
	* Check data is exist or not 
	* 
	* @param string
	* @return bool
	*/
	function is_exist( $order_no)
	{
		$this->db->where('order_no', $order_no);
		$query = $this->db->get('booking_cargo_air');
		return $query->num_rows > 0;
	}


	/**
	* Create Booking Cargo Air Data
	* 
	* @param array
	* @return bool
	*/

	function create( $data )
	{
		if( ! $this->is_exist( $data['order_no'])){
			if($this->db->insert('booking_cargo_air', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return 'ada';
		}
	}

	/**
	* Read Booking Cargo Air Data
	* 
	* @param string 
	* @param int
	* @return array
	*/

	function read( $order_no)
	{
		$this->db->where('order_no', $order_no);
		$query = $this->db->get('booking_cargo_air');
		if( $query->num_rows > 0){
			return $query->row_array();
		} else {
			return NULL;
		}
	}


	/**
	* Update Booking Cargo Air Data
	* 
	* @param array 
	* @return bool
	*/
	function update( $data )
	{
		if( $this->is_exist( $data['order_no'])){
			$this->db->where('order_no', $data['order_no']);
			if ($this->db->update('booking_cargo_air', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}


	/**
	* Delete Booking Cargo Air Data
	* 
	* @param string
	* @return bool
	*/
	function delete( $order_no)
	{
		$this->db->where('order_no', $order_no);
		return $this->db->delete('booking_cargo_air');
		//return $this->db->affected_rows() > 0;
	}

	/**
	 * Search Booking Cargo Air Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Booking Cargo Air Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(order_no) as order_no from gl_booking_cargo_air where ((month(order_date)='".$pecah[1]."' and year(order_date)='".$pecah[2]."') or left(order_date,6)='".$pecah[2].$pecah[1]."' or left(order_date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('order_no');
		} else {
			return NULL;
		}
	}

	/**
	 * Load all Booking Cargo Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('booking_cargo_air');
		return $query->result_array();
	}

	//Agar variable mawb_no bisa dipanggil kelas lain...
	function mawb_no( $key )
	{
		$sql="select MAWB_no from gl_booking_cargo_air where order_no='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0){
			return $query->row('MAWB_no');
		} else {
			return NULL;
		}
	}
}
/* End of file tbooking_cargo_air.php */
/* Location: ./application/models/tbooking_cargo_air.php */
