<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tair_import_master extends CI_Model{

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
	function is_exist( $MAWB_no)
	{
		$this->db->where('MAWB_no', $MAWB_no);
		$query = $this->db->get('air_import_master');
		return $query->num_rows > 0;
	}


	/**
	* Create Air Import Master Data
	* 
	* @param array
	* @return bool
	*/

	function create( $data )
	{
		if( ! $this->is_exist( $data['MAWB_no'])){
			if($this->db->insert('air_import_master', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return 'ada';
		}
	}

	/**
	* Read Air Import Master Data
	* 
	* @param string 
	* @param int
	* @return array
	*/

	function read( $MAWB_no)
	{
		$this->db->where('MAWB_no', $MAWB_no);
		$query = $this->db->get('air_import_master');
		if( $query->num_rows > 0){
			return $query->row_array();
		} else {
			return NULL;
		}
	}


	/**
	* Update Air Import Master Data
	* 
	* @param array 
	* @return bool
	*/
	function update( $data )
	{
		if( $this->is_exist( $data['MAWB_no'])){
			$this->db->where('MAWB_no', $data['MAWB_no']);
			if ($this->db->update('air_import_master', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}


	/**
	* Delete Air Import Master Data
	* 
	* @param string
	* @return bool
	*/
	function delete( $MAWB_no)
	{
		$this->db->where('MAWB_no', $MAWB_no);
		return $this->db->delete('air_import_master');
		//return $this->db->affected_rows() > 0;
	}

	/**
	 * Search Air Import Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Air Import Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(MAWB_no) as MAWB_no from gl_air_import_master where ((month(order_date)='".$pecah[1]."' and year(order_date)='".$pecah[2]."') or left(order_date,6)='".$pecah[2].$pecah[1]."' or left(order_date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('MAWB_no');
		} else {
			return NULL;
		}
	}

	/**
	 * Load all Air Import Master Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('air_import_master');
		return $query->result_array();
	}

}
/* End of file tair_import_master.php */
/* Location: ./application/models/tair_import_master.php */
