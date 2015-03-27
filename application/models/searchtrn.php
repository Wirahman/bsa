<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Searchtrn extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->setlimit=850;
	}
}
/* End of file searchtrn.php */
/* Location: ./application/models/search.php */