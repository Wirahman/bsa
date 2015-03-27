<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Xlog extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Create cargo data
	 *
	 * @param	array
	 * @return	bool
	 */
	function record( $action, $module, $user_data = '',$lokal='Asia/Jakarta' )
	{
		date_default_timezone_set($lokal);
		$data = array(
			'user_id' => $this->tank_auth->get_user_id()
			, 'time' => date('Y-m-j H:i:s')
			, 'ip_address' => $this->input->ip_address()
			, 'user_agent' => $this->input->user_agent()
			, 'action' => $action
			, 'module' => $module
			, 'data' => json_encode( $user_data )
		);
		return $this->db->insert('xlog', $data);
	}

	/**
	 * Read cargo data
	 *
	 * @param	string
	 * @param	int
	 * @return	array
	 */
	function read( $param = '' )
	{
		$this->db->select( 'xlog.user_id, time, ip_address, action, module, xusers.username' );
		if( isset( $param['user_id'] ) )
			$this->db->where('user_id', $param['user_id'] );
		if( isset( $param['start'] ) )
			$this->db->where('time >', $param['start'] );
		if( isset( $param['end'] ) )
			$this->db->where('time <', $param['end'] );
		if( isset( $param['module'] ) )
			$this->db->where('module', $param['module'] );
		if( isset( $param['action'] ) )
			$this->db->where('action', $param['action'] );
		if( isset( $param['limit'] ) )
			$this->db->limit( $param['limit'], $param['prev'] );
		if( isset( $param['sort'] ) ){
			$this->db->order_by( $param['sort'], 'asc' );
		} else {
			$this->db->order_by( 'time', 'asc' );
		}
		$this->db->join( 'xusers', 'xusers.id = xlog.user_id' );
		$query = $this->db->get('xlog');
		if( $query->num_rows > 0 ){
			return $query->result_array();
		} else {
			return NULL;
		}
	}
}
/* End of file mcargo.php */
/* Location: ./application/models/mcargo.php */