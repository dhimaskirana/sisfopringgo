<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Lingkungan extends CI_Model {

	// Fungsi untuk menampilkan semua data
	public function view() {
	    $this->db->select('*');     // select all columns
	    $this->db->from('data_lingkungan'); // FROM table
	    return $this->db->get()->result();
	}	

}

/* End of file Models_Lingkungan.php */
/* Location: ./application/models/Models_Lingkungan.php */