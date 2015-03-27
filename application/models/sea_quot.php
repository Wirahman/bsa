<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sea_quot extends CI_Model {

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
	function is_exist( $quot_id )
	{
		$this->db->where('quot_id', $quot_id);
		$query = $this->db->get('sea_quot');
		return $query->num_rows > 0;
	}
	
	/**
	 * Create Quotation Transaksi Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		if( ! $this->is_exist( $data['quot_id'] ) ){
			$data = array(
				'quot_id' => $data['quot_id']
				, 'date' => $data['date']
				, 'type' => $data['type']
				, 'attn' => $data['attn']
				, 're' => $data['re']
				, 'valid_from' => $data['valid_from']
				, 'valid_until' => $data['valid_until']
				, 'cus_id' => $data['cus_id']
				, 'customer_name' => $data['customer_name']
				, 'sales_code' => $data['sales_code']
				, 'term_cond' => $data['term_cond']
				, 'sales_note' => $data['sales_note']
				, 'manager_note' => $data['manager_note']
				, 'director_note' => $data['director_note']
				, 'notes1' => $data['notes1']
				, 'notes2' => $data['notes2']
				, 'notes3' => $data['notes3']
				, 'notes4' => $data['notes4']
				, 'notes5' => $data['notes5']
				, 'notes6' => $data['notes6']
				, 'notes7' => $data['notes7']
				, 'notes8' => $data['notes8']
				, 'notes9' => $data['notes9']
				, 'notes10' => $data['notes10']
				, 'notes11' => $data['notes11']
				, 'notes12' => $data['notes12']
				, 'notes13' => $data['notes13']
				, 'notes14' => $data['notes14']
				, 'notes15' => $data['notes15']
				, 'notes_export1' => $data['notes_export1']
				, 'notes_export2' => $data['notes_export2']
				, 'notes_export3' => $data['notes_export3']
				, 'notes_export4' => $data['notes_export4']
				, 'notes_export5' => $data['notes_export5']
				, 'notes_export6' => $data['notes_export6']
				, 'notes_export7' => $data['notes_export7']
				
				
			);
			if($this->db->insert('sea_quot', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}
	
	/**
	 * Read Quotation Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $key )
	{
	$sql="select p.*,
	c.name as customer_name,
	r.nama_sales as nama_sales from 
	(gl_sea_quot as p left join gl_customer as c on p.cus_id=c.cus_id)
	left join gl_msales as r on p.sales_code=r.sales_code where p.quot_id='".$key."'";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	//Katanya gw harus get nilai dari selling rate disini......
	
	function all()
	{
	$sql="select p.*,
	c.name as customer_name,
	r.nama_sales as nama_sales from
	(gl_sea_quot as p left join gl_customer as c on p.cus_id=c.cus_id)
	left join gl_msales as r on p.sales_code=r.sales_code order by p.quot_id";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	/**
	 * Update Quotation Transaksi Data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( $this->is_exist( $data['quot_id']) ){
			$this->db->set('date', $data['date']);
			$this->db->set('type', $data['type']);
			$this->db->set('attn', $data['attn']);
			$this->db->set('re', $data['re']);
			$this->db->set('valid_from', $data['valid_from']);
			$this->db->set('valid_until', $data['valid_until']);
			$this->db->set('cus_id', $data['cus_id']);
			$this->db->set('customer_name', $data['customer_name']);
			$this->db->set('sales_code', $data['sales_code']);
			$this->db->set('term_cond', $data['term_cond']);
			$this->db->set('sales_note', $data['sales_note']);
			$this->db->set('manager_note', $data['manager_note']);
			$this->db->set('director_note', $data['director_note']);
			$this->db->set('notes1', $data['notes1']);
			$this->db->set('notes2', $data['notes2']);
			$this->db->set('notes3', $data['notes3']);
			$this->db->set('notes4', $data['notes4']);
			$this->db->set('notes5', $data['notes5']);
			$this->db->set('notes6', $data['notes6']);
			$this->db->set('notes7', $data['notes7']);
			$this->db->set('notes8', $data['notes8']);
			$this->db->set('notes9', $data['notes9']);
			$this->db->set('notes10', $data['notes10']);
			$this->db->set('notes11', $data['notes11']);
			$this->db->set('notes12', $data['notes12']);
			$this->db->set('notes13', $data['notes13']);
			$this->db->set('notes14', $data['notes14']);
			$this->db->set('notes15', $data['notes15']);
			$this->db->set('notes_export1', $data['notes_export1']);
			$this->db->set('notes_export2', $data['notes_export2']);
			$this->db->set('notes_export3', $data['notes_export3']);
			$this->db->set('notes_export4', $data['notes_export4']);
			$this->db->set('notes_export5', $data['notes_export5']);
			$this->db->set('notes_export6', $data['notes_export6']);
			$this->db->set('notes_export7', $data['notes_export7']);
			$this->db->where('quot_id', $data['quot_id']);
			if ($this->db->update('sea_quot')){
				return '1';
			}else{
				return '0';
			}
		}else{
			return '0';
		}
	}
	
	
	/**
	 * Delete Quotation Transaksi Data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $quot_id)
	{
		$this->db->where('quot_id', $quot_id);
		return $this->db->delete('sea_quot');
		// return $this->db->affected_rows() > 0;
	}
	/**
	 * Search Quotation Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	 
	/**
	 * Read Quotation Transaksi Data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function lastid( $tanggal)
	{
		$pecah=explode('-',$tanggal);
		$sql="select max(quot_id) as quot_id from gl_sea_quot where ((month(date)='".$pecah[1]."' and year(date)='".$pecah[2]."') or left(date,6)='".$pecah[2].$pecah[1]."' or left(date,4)=right('".$pecah[2].$pecah[1]."',4))";
		$query = $this->db->query($sql,array());
		if( $query->num_rows > 0 ){
			return $query->row('quot_id');
		} else {
			return NULL;
		}
	}
	/**
	 * Load all Quotation Transaksi Data
	 *
	 * @return	array
	 */
	// function all()
	// {
		// $query = $this->db->get('sea_quot');
		// return $query->result_array();
	// }
}
/* End of file sea_quot.php */
/* Location: ./application/models/sea_quot.php */