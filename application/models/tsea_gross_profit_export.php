<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tsea_gross_profit_export extends CI_Model {

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
	function is_exist( $gp_no )
	{
		$this->db->where('gp_no', $gp_no);
		$query = $this->db->get('sea_gross_profit_export');
		return $query->num_rows > 0;
	}

	/**
	 * Create Sea Gross Profit Export data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['gp_no'] ) ){
			if($this->db->insert('sea_gross_profit_export', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}

	/**
	 * Read Sea Gross Profit Export data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $gp_no)
	{
		$this->db->where('gp_no', $gp_no);
		$query = $this->db->get('sea_gross_profit_export');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Update Sea Gross Profit Export data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['gp_no']) ){
			
			$this->db->where('gp_no', $data['gp_no']);
			if ($this->db->update('sea_gross_profit_export', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}

	/**
	 * Delete Sea Gross Profit Export data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $gp_no)
	{
		$this->db->where('gp_no', $gp_no);
		
		return $this->db->delete('sea_gross_profit_export');
		// return $this->db->affected_rows() > 0;
	}

	/**
	 * Search Sea Gross Profit Export data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Sea Gross Profit Export data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(gp_no) as gp_no from gl_sea_gross_profit_export where ((month(order_date)='".$pecah[1]."' and year(order_date)='".$pecah[2]."') or left(order_date,6)='".$pecah[2].$pecah[1]."' or left(order_date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('gp_no');
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Sea Gross Profit Export data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('sea_gross_profit_export');
		return $query->result_array();
	}

}
/* End of file tju.php */
/* Location: ./application/models/tju.php */