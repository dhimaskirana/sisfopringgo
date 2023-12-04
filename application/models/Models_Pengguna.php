<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Pengguna extends CI_Model {

	// Fungsi untuk menampilkan semua data
	public function view() {
	    $this->db->select('*');     // select all columns
	    $this->db->from('admin'); // FROM table
	    return $this->db->get()->result();
	}
  
  	// Fungsi untuk menampilkan data inventaris secara detail
  	public function view_by($id){
    	$this->db->select('*');     // select all columns
    	$this->db->from('admin'); // FROM table
    	$this->db->where('id', $id);
    	return $this->db->get()->row();
  	}

	public function validation($mode) {
		$this->load->library('form_validation');
		if ($mode == 'tambah')
			$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}

	public function list_lingkungan() {
		$this->db->select('lingkungan, ket');
		$this->db->from('data_lingkungan');
		$query = $this->db->get();
		return $query->result();
	}

	public function level_admin() {
		$jenis_akun_admin = array(
			'administrator' => 'Akun Administrator',
			'adminlingkungan' => 'Akun Admin Lingkungan'
		);
		return $jenis_akun_admin;
	}

	public function simpanpengguna(){
	    $data = array(
	      'username' => $this->input->post('username'),
	      'password' => md5($this->input->post('password')),
	      'namalengkap' => $this->input->post('namalengkap'),
	      'kodelingkungan' => $this->input->post('kodelingkungan'),
	      'level' => $this->input->post('jenis_admin')
	    );	    
	    $this->db->insert('admin', $data); // Untuk mengeksekusi perintah insert data
  	}

	public function perbaruipengguna($id){
	    $data = array(
	      'password' => md5($this->input->post('password')),
	      'namalengkap' => $this->input->post('namalengkap')
	    );    
	    $this->db->where('id', $id);
	    $this->db->update('admin', $data); // Untuk mengeksekusi perintah insert data
  	}

	public function delete($id){
	    $this->db->where('id', $id);
	    $this->db->delete('admin'); // Untuk mengeksekusi perintah delete data
	}

}

/* End of file Models_Pengguna.php */
/* Location: ./application/models/Models_Pengguna.php */