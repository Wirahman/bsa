<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	/*
	* Seluruh data yang hendak di-passing ke view
	*/
	private $data = Array('user' => '', 'message' => '', 'xlog' => '', 'site' => '');

	/*
	* Self initialization
	*/
	function __construct()
	{
		parent::__construct();
		if ( $this->tank_auth->is_logged_in() ) {
			$this->data['user']['id']	= $this->tank_auth->get_user_id();
			$this->data['user']['name']	= $this->tank_auth->get_username();
			$this->data['user']['capabilities']	= $this->tank_auth->get_capabilities();
			$this->data['user']['user_cap']	= $this->tank_auth->get_capabilities();
			$this->data['user']['user_role']	= $this->tank_auth->get_role();

			// Load models
			$this->load->model('tank_auth/users', 'users');
		} else {
			$this->data['message']['error'][] = 'Unauthorized access';
		}
	}

	public function index()
	{
		$this->data['site']['title'] = 'User Management';
		if( empty( $this->data['message']['error'] ) ){
			if ($message = $this->session->flashdata('message')) {
				$this->load->view('auth/general_message', array('message' => $message));
			} else {

				$this->load->view('header', $this->data['site']);
				$this->load->view('menu', $this->data['user']);
				if( in_array( 'read_user', unserialize( $this->data['user']['user_cap'] ) ) ){
					$this->load->view('fasilitas/user/index', $this->data['user']);
				} else {
					$this->load->view('unauthorized', $this->data['user']);
				}
				$this->load->view('footer');

				$this->xlog->record( 'view', 'user' );
			}
		} else {
			redirect('/auth/login/');
		}
	}

	public function db_user()
	{
		if( empty( $this->data['message']['error'] ) ){
			if( $users = $this->users->get_all_users() ){
				$this->data['message']['result'] = $users;
			} else {
				$this->data['message']['success'] = 'Tidak ada data yang cocok';
			}
		}

		echo json_encode( $this->data['message'] );
	}

	/**
	 * Change user capabilities
	 *
	 * @return void
	 */
	function change_capabilities()
	{
		$this->data['site']['title'] = 'Change Capabilities';
		if( empty( $this->data['message']['error'] ) ){
			if( isset( $_POST['id'] ) && ! empty( $_POST['id'] ) ){
				$this->load->helper(array('form', 'url'));

				if( isset( $_POST['change'] ) && isset( $_POST['id'] ) && isset( $_POST['capabilities'] ) ){
					$this->xlog->record( 'update', 'capabilities', $this->input->post() );

					// if( $this->users->change_capabilities( $_POST['id'], json_encode( $_POST['capabilities'] ) ) ){
					if( $this->users->change_capabilities( $_POST['id'], serialize( $_POST['capabilities'] ) ) ){
						if (isset($_POST['role'])){
							$this->users->change_role( $_POST['id'], $_POST['role'] );
						}

						$param['message'] = '<div class="alert alert-success" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Success!</strong> Succeeded to update data.</div>';
						$this->data['xlog'] = 'success';
					} else {
						$param['message'] = '<div class="alert alert-error" data-dismiss="alert"><a href="#" class="close">&times;</a><strong>Error!</strong> Failed to update data.</div>';
						$this->data['xlog'] = 'failed';
					}

					$this->xlog->record( 'update', 'capabilities', $this->data['xlog'] );

				} else {
					$this->xlog->record( 'view', 'capabilities' );
				}

				$param['capabilities']	= $this->users->get_user_cap_by_id( $_POST['id'] );
				$param['level']	= $this->users->get_user_role_by_id( $_POST['id'] );
				if ($param['level']==''){
					$param['level']=1;
				}elseif (intval($param['level'])==0){
					$param['level']=99;
				}
				
				if( empty( $param['capabilities'] ) ){
					$param['capabilities'] = serialize( array() );
				}

				$this->load->view('header', $this->data['site']);
				$this->load->view('menu', $this->data['user']);
				$this->load->view('auth/change_capabilities_form', $param);
				$this->load->view('footer');

			} else {
				
			}
		} else {
			redirect('/auth/login/');
		}
	}

	/**
	 * Delete user
	 *
	 * @return void
	 */
	function delete()
	{
		if( empty( $this->data['message']['error'] ) ){
			if( isset( $_POST['id'] ) && ! empty( $_POST['id'] ) ){
				if( $this->users->delete_user( $_POST['id'] ) ){
					$message = 'Yes, user has been deleted.';
				} else{
					$message = 'Failed, user still exist.';
				}
				$this->session->set_flashdata('message', $message.' '.anchor('/fasilitas/user/', 'Take me back'));
				redirect('fasilitas/user');
			}
		} else {
			redirect('/auth/login/');
		}
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */