<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tsea_import_master extends CI_Model {

	//Call the Model constructor
	function __construct()
	{
		parent::__construct();
	}

	//Check data is exist or not
	function is_exist( $OBL_no)
	{
		$this->db->where('OBL_no', $OBL_no);
		$query = $this->db->get('sea_import_master');
		return $query->num_rows > 0;
	}

	//Create Sea Import Mater Data
	function create( $data )
	{
		if( ! $this->is_exist( $data['OBL_no'])){
			if($this->db->insert('sea_import_master', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}
	}

	//Read Sea Import Master Data

	function read( $OBL_no )
	{
		$this->db->where('OBL_no', $OBL_no);
		$query = $this->db->get('sea_import_master');
		if( $query->num_rows > 0){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	//Update Sea Import Master Data

	function update ( $data )
	{
		if($this->is_exist( $data['OBL_no'])){

			$this->db->where('OBL_no', $data['OBL_no']);
			if ($this->db->update('sea_import_master', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}

	//Delete Sea Import Master Data
	function delete( $OBL_no)
	{
		$this->db->where('OBL_no', $OBL_no);

		return $this->db->delete('sea_import_master');
		//return $this->db->affected_rows() > 0;
	}

	/**
	 * Search Sea Import Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Sea Import Master Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */


	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(OBL_no) as OBL_no from gl_sea_import_master where ((month(date)='".$pecah[1]."' and year(date)='".$pecah[2]."') or left(date,6)='".$pecah[2].$pecah[1]."' or left(date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('OBL_no');
		} else {
			return NULL;
		}
	}

	// Load All Sea Import Master Data
	function all()
	{
		$query = $this->db->get('sea_import_master');
		return $query->result_array();
	}
}

// /* End of file sim.php */
// /* Location: ./application/models/sim.php */