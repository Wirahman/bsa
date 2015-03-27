<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mguest_book extends CI_Model {

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
	 
	 function is_exist( $cp )
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('date', $cp);
		$query = $gl_db->get('guest_book');
		return $query->num_rows > 0;
	}
	
	/**
	 * Create account data
	 *
	 * @param	array
	 * @return	bool
	 */
	 
	function create ($data)
	{
		$gl_db = $this->load->database('default', TRUE);
		if (! $this->is_exist($data['date'])){
		$data = array(
		'date'				=> $data['date']
		,'nama'				=> $data['nama']
		,'alamat'			=> $data['alamat']
		,'contack_person'	=> $data['contack_person']
		,'company_name'		=> $data['company_name']
		,'tujuan'			=> $data['tujuan']
		);
		
		if($gl_db->insert('guest_book', $data)){
			return '1';
		}else{
			return '0';
		}
		} else {
		return 'ada';
		}
	}
	
	//Read Guest Book Data
	function read($key)
	{
		$gl_db = $this->load->database('default', TRUE);
		$gl_db->where('date', $key);
		$query = $gl_db->get('guest_book');
		if( $query->num_rows > 0 ){
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	//Upload Guest Book Data
	function update( $data )
	{
		if ($this->is_exist( $data['date']) ){
			$this->db->set('nama',$data['nama']);
			$this->db->set('alamat',$data['alamat']);
			$this->db->set('company_name',$data['company_name']);
			$this->db->set('tujuan',$data['tujuan']);
			$this->db->set('contack_person',$data['contack_person']);
			$this->db->where('date', $data['date']);
			if($this->db->update('guest_book')){
				return "1";
			}else{
				return "0";
			}
		}
	}
	
	//Delete Guest Book Data
	
	function delete( $key )
	{
		if( $this->is_exist( $key ) ){
			$this->db->where('date', $key);
			if ($this->db->delete('guest_book')){
				return "1";	
			}else{
				return "0";				
			}
		}else{
			return "2";
		}
	}
	
	//Menampilkan seluruh data Guest Book
	function all()
	{
		$gl_db = $this->load->database('default', TRUE);
		$query = $gl_db->get('guest_book');
		return $query->result_array();
	}
	
	// function all untuk menampilkan data otomatis dari data base
	// function all()
	// {
		// $gl_db = $this->load->database('default', TRUE);
		// $query = $gl_db->get('guest_book');
		
		// $originalDate = "2010-03-21";
		// $newDate = date("d-m-Y", strtotime($originalDate));


		// $result = $query->result_array();
		// foreach($result as $row_index => $row_data) {
			// $result[$row_index]['date'] = date("d-m-Y", strtotime(	$result[$row_index]['date'])).'haha';
		// }
		// return $result;
		// return $query->result_array();
	// }

}
	