<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Login extends CI_Model {

	function cek_login($table,$where) {		
		return $this->db->get_where($table,$where);
	}

	function cek_data($username) {
    	$this->db->from('data_admin'); // FROM table
    	$this->db->where('username', $username);
    	return $this->db->get()->row();
	}

}

/* End of file Models_Login.php */
/* Location: ./application/models/Models_Login.php */