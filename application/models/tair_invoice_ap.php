<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tair_invoice_ap extends CI_Model {

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
	function is_exist( $invoice_no)
	{
		$this->db->where('invoice_no', $invoice_no);
		$query = $this->db->get('air_invoice_ap');
		return $query->num_rows > 0;
	}

	/**
	 * Create Air Invoice Ar Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['invoice_no'])){
			if($this->db->insert('air_invoice_ap', $data)){
				return '1';
			}else{
				return '0';
			}
		}else{
				return 'ada';
		}
	}

	/**
	 * Read Air Invoice Ar Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $invoice_no)
	{
		$this->db->where('invoice_no', $invoice_no);
		$query = $this->db->get('air_invoice_ap');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		}else{
			return NULL;
		}
	}

	/**
	 * Update Air Invoice Ar Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['invoice_no'])){

			$this->db->where('invoice_no', $data['invoice_no']);
			if ($this->db->update('air_invoice_ap', $data)){
				return '1';
			}
		}else{
				return '0';
		}
	}

	/**
	 * Delete Air Invoice Ar Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $invoice_no)
	{
		$this->db->where('invoice_no', $invoice_no);
		return $this->db->delete('air_invoice_ap');
	}


	/**
	 * Search Air Invoice Ar Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Read Air Invoice Ar Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(invoice_no) as invoice_no from gl_air_invoice_ap where ((month(invoice_date)='".$pecah[1]."' and year(invoice_date)='".$pecah[2]."') or left(invoice_date,6)='".$pecah[2].$pecah[1]."' or left(invoice_date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('invoice_no');
		}else{
			return NULL;
		}
	}

	/**
	 * Load all Air Invoice Ar Data
	 *
	 * @return	array
	 */
	function all()
	{
		$query = $this->db->get('air_invoice_ap');
		return $query->result_array();
	}

}
/* End of file air_invoice_ap.php */
/* Location: ./application/models/air_invoice_ap.php */