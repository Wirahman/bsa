<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Maccount extends CI_Model {

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
	function is_exist( $id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('id_perkiraan', $id);
		$query = $gl_db->get('maccount');
		return $query->num_rows > 0;
	}

	function is_used( $id )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('id_perkiraan', $id);
		$query = $gl_db->get('datagl');
		return $query->num_rows > 0;
	}

	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function create( $data )
	{
		$gl_db = $this->load->database('default', TRUE);
		if( ! $this->is_exist( $data['id_perkiraan'] ) ){
			$data = array(
				'id_perkiraan' => $data['id_perkiraan']
				, 'nama' => $data['nama']
				, 'tipe' => $data['tipe']
				, 'level' => $data['level']
				, 'perkiraan_general' => $data['perkiraan_general']
				, 'grup' => $data['grup']
				, 'saldo_awal' => $data['saldo_awal']
				, 'saldo_akumulasi' => $data['saldo_akumulasi']
				, 'created' => $data['created']
				, 'creator' => $data['creator']
			);
			if($gl_db->insert('maccount', $data)){
				return '1';
			}else{
				return '0';
			}
		} else {
			return 'ada';
		}

	}

	/**
	 * Read account data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $key ,$tipe='')
	{
		$sql="select m.*,m2.nama as nama_general,mu1.`username` as user_name,mu2.`username` as user_name2 from ((gl_maccount as m left join gl_maccount as m2 on m.perkiraan_general=m2.id_perkiraan) left join gl_xusers as mu1 on m.`creator`=mu1.`id`) left join gl_xusers as mu2 on m.`creator`=mu2.`id` where m.id_perkiraan='". $key ."'";
		if ($tipe!==''){
			$sql.=" and m.tipe='". $tipe ."'";
		}
		$query = $this->db->query($sql,array());
		// $gl_db = $this->load->database('default', TRUE);
		// if ($tipe!==''){
			// $gl_db->where('tipe', $tipe);
		// }
		// $gl_db->where('id_perkiraan', $key);
		// $query = $gl_db->get('maccount');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}

	/**
	 * Update account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update( $data )
	{
		if( ! $this->is_exist( $data['id_perkiraan'] ) ){
			return '2';
		}else{
			$gl_db = $this->load->database('default', TRUE);
			$gl_db->set('nama', $data['nama']);
			$gl_db->set('tipe', $data['tipe']);
			$gl_db->set('level', $data['level']);
			$gl_db->set('perkiraan_general', $data['perkiraan_general']);
			$gl_db->set('grup', $data['grup']);
			$gl_db->set('saldo_awal', $data['saldo_awal']);
			$gl_db->set('saldo_akumulasi', $data['saldo_akumulasi']);
			$gl_db->set('modified', $data['modified']);
			$gl_db->set('modifier', $data['modifier']);
			$gl_db->where('id_perkiraan', $data['id_perkiraan']);
			if ($gl_db->update('maccount')){
				return '1';
			}else{	
				return '0';
			}
		}
	}

	/**
	 * Delete account data
	 *
	 * @param	string
	 * @return	bool
	 */
	function delete( $key )
	{
		if ($this->is_used($key)){
			return 'ada';
		}else{
			if( ! $this->is_exist( $key ) ){
				return '2';
			}else{
				$gl_db = $this->load->database('default', TRUE);
				$gl_db->where('id_perkiraan', $key);
				if ($gl_db->delete('maccount')){
					return '1';
				}else{
					return '0';
				}
			}
		}
	}

	/**
	 * Search account data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */

	/**
	 * Load all account data
	 *
	 * @return	array
	 */
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('maccount');
		return $query->result_array();
	}

	/**
	 * Get account name
	 *
	 * @return	bool
	 */
	function get_name( $id_perkiraan )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('id_perkiraan', $id_perkiraan);
		$query = $gl_db->get('maccount');
		if( $query->num_rows > 0 ){
			return $query->row('nama');
		} else {
			return NULL;
		}
	}

	/**
	 * Validate account group
	 *
	 * @return	bool
	 */
	function is_grup( $id_perkiraan, $grup )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->select('grup');
		$gl_db->where('id_perkiraan', $id_perkiraan);
		$query = $gl_db->get('maccount');
		return strcmp( $query->row('grup'), $grup ) == 0;
	}

	/**
	 * Reset account saldo
	 *
	 * @return	bool
	 */
	function reset_saldo()
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->set('saldo_akumulasi', 'saldo_awal');
		return $gl_db->update('maccount');
	}

	/**
	 * Update account data
	 *
	 * @param	array
	 * @return	bool
	 */
	function update_saldo( $id_perkiraan, $saldo )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->set('saldo_akumulasi', $saldo);
		$gl_db->where('id_perkiraan', $id_perkiraan);
		return $gl_db->update('maccount');
	}

}
/* End of file maccount.php */
/* Location: ./application/models/maccount.php */