<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Dashboard extends CI_Model {

	// Fungsi untuk menampilkan semua data
	public function jumlah_kk() {
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$namalingkungan = $this->session->userdata('kodelingkungan');
			$this->db->where('lingkungan', $namalingkungan);
		}		
	    $this->db->select('*');     // select all columns
	    $this->db->from('data_umat_kk'); // FROM table
	    $this->db->order_by('np', 'ASC');
	    $query = $this->db->get();
	    return $query->num_rows();
	}

	// Fungsi untuk menampilkan semua data
	public function jumlah_umat() {
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$namalingkungan = $this->session->userdata('kodelingkungan');
			$this->db->where('lingkungan', $namalingkungan);
		}		
	    $this->db->select('*');     // select all columns
	    $this->db->from('data_umat'); // FROM table
	    $this->db->order_by('np', 'ASC');
	    $query = $this->db->get();
	    return $query->num_rows();
	}

	// Fungsi untuk menampilkan semua data
	public function jumlah_laki_laki() {
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$namalingkungan = $this->session->userdata('kodelingkungan');
			$this->db->where('lingkungan', $namalingkungan);
		}		
		$this->db->where('jenkel', '1');
	    $this->db->select('*');     // select all columns
	    $this->db->from('data_umat'); // FROM table
	    $this->db->order_by('np', 'ASC');
	    $query = $this->db->get();
	    return $query->num_rows();
	}

	// Fungsi untuk menampilkan semua data
	public function jumlah_perempuan() {
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$namalingkungan = $this->session->userdata('kodelingkungan');
			$this->db->where('lingkungan', $namalingkungan);
		}		
		$this->db->where('jenkel', '2');
	    $this->db->select('*');     // select all columns
	    $this->db->from('data_umat'); // FROM table
	    $this->db->order_by('np', 'ASC');
	    $query = $this->db->get();
	    return $query->num_rows();
	}

}

/* End of file Models_Dashbord.php */
/* Location: ./application/models/Models_Dashbord.php */