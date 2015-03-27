<?php if (!defined('BASEPATH'))exit('No direct script access allowed');
class Tsea_export_master extends CI_Model {


 function __construct()
 {
 	// Call the Model constructor
 	parent::__construct();

 }

/**
*Check data is exist or not
*
*@param string
*@return bool
*/
function is_exist ( $OBL_no)
{
	$this->db->where('OBL_no', $OBL_no);
	$query = $this->db->get('sea_export_master');
	return $query->num_rows > 0;

}

	/**
	 * Create sea_export_master data
	 *
	 * @param	array
	 * @return	bool
	 */


function create( $data )
	{
		if( ! $this->is_exist( $data['OBL_no'] ) ){
			if($this->db->insert('sea_export_master', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}

	/**
	 * Read sea_export_master data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
function read( $OBL_no)
{
	$this->db->where('OBL_no', $OBL_no);
	$query = $this->db->get('sea_export_master');
	if( $query->num_rows > 0){
		return $query->row_array();
	} else {
		return NULL;
	}
}
	/**
	 * Update sea_export_master data
	 *
	 * @param	array
	 * @return	bool
	 */

	function update( $data )
	{
		if( $this->is_exist( $data['OBL_no'])){

			$this->db->where('OBL_no', $data['OBL_no']);
			if ($this->db->update('sea_export_master', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}

	/**
	 * Delete sea_export_master data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $OBL_no)
	{
		$this->db->where('OBL_no', $OBL_no);

		return $this->db->delete('sea_export_master');
		//return $this->db->affected_rows() > 0;
	}

	/**
	 * Search sea_export_master data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read sea_export_master data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
// Tidak menggunakan fungsi ini karena di transaksi booking cargo, OBL_no tidak menggunakan lastid
// 	function lastid( $tanggal)
// 	{
// 		$pecah=explode('-',$tanggal);
// 		$sql="select max(order_no) as order_no from gl_booking_cargo_sea where ((month(order_date)='".$pecah[1]."' and year(order_date)='".$pecah[2]."') or left(order_date,6)='".$pecah[2].$pecah[1]."' or left(order_date,4)=right('".$pecah[2].$pecah[1]."',4))";
// 		$query = $this->db->query($sql,array());
// 		if( $query->num_rows > 0 ){
// 			return $query->row('order_no');
// 		} else {
// 			return NULL;
// 		}
// 	}
	/**
	 * Load all Sea Export Master data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('sea_export_master');
		return $query->result_array();
	}
}

/* End of file sem.php */
/* Location: ./application/models/sem.php */