<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tju extends CI_Model {

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
	function is_exist( $id_jurnal, $id_transaksi )
	{
		$this->db->where('id_jurnal', $id_jurnal);
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get('tju');
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
		if( ! $this->is_exist( $data['id_jurnal'], $data['id_transaksi'] ) ){
			$data = array(
				'id_jurnal' => $data['id_jurnal']
				, 'id_transaksi' => $data['id_transaksi']
				, 'tanggal' => $data['tanggal']
				, 'adjustment' => $data['adjustment']
				, 'keterangan' => $data['keterangan']
				, 'id_currency' => $data['id_currency']
				, 'total_debet' => $data['total_debet']
				, 'total_kredit' => $data['total_kredit']
				, 'created' => $data['created']
				, 'creator' => $data['creator']
			);
			if($this->db->insert('tju', $data)){
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
	function read( $id_jurnal, $id_transaksi )
	{
		// $this->db->where('id_jurnal', $id_jurnal);
		// $this->db->where('id_transaksi', $id_transaksi);
		// $query = $this->db->get('tju');
		$sql="select t.*,mu.`username` as user_name,mu2.`username` as user_name2 from (gl_tju as t left join gl_xusers as mu on t.`creator`=mu.`id`)left join gl_xusers as mu2 on t.`modifier`=mu2.`id` where t.id_jurnal='". $id_jurnal ."' and t.id_transaksi='". $id_transaksi ."'";
		$query=$this->db->query($sql,array());
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
		if( $this->is_exist( $data['id_jurnal'], $data['id_transaksi'] ) ){
			$this->db->set('tanggal', $data['tanggal']);
			$this->db->set('adjustment', $data['adjustment']);
			$this->db->set('keterangan', $data['keterangan']);
			$this->db->set('id_currency', $data['id_currency']);
			$this->db->set('total_debet', $data['total_debet']);
			$this->db->set('total_kredit', $data['total_kredit']);
			$this->db->set('modified', $data['modified']);
			$this->db->set('modifier', $data['modifier']);
			$this->db->where('id_jurnal', $data['id_jurnal']);
			$this->db->where('id_transaksi', $data['id_transaksi']);
			if ($this->db->update('tju')){
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
	function delete( $id_jurnal, $id_transaksi )
	{
		$this->db->where('id_jurnal', $id_jurnal);
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->delete('tju');
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
	function lastid( $id_jurnal )
	{
		$this->db->where('id_jurnal', $id_jurnal);
		$this->db->order_by('id_transaksi', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('tju');
		if( $query->num_rows > 0 ){
			return $query->row('id_transaksi');
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
		$query = $this->db->get('tju');
		return $query->result_array();
	}
}
/* End of file tju.php */
/* Location: ./application/models/tju.php */