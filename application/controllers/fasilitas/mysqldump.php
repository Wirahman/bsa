<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mysqldump extends CI_Controller {
	function __construct() {
		parent::__construct();

		if(!function_exists('mdate')) {
			$this->load->helper('date');
		}
	}

	function index() {
		$fileName = $this->db->database . '_' . mdate('%Y%m%d%H%i%s');
		$data = mysqldump(
			$this->db->hostname,
			$this->db->username,
			$this->db->password,
			$this->db->database,
			$this->config->item('mysqldump_bin'),
			$this->config->item('mysqldump_dump_data'));

		$this->output->set_content_type('text/plain');
		$this->output->set_header("Content-disposition: attachment; filename=\"" . $fileName . ".sql\"");
		$this->output->set_output($data);
	}
}

