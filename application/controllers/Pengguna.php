<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Cek status session
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
		if($this->session->userdata('level') != 'administrator'){
			redirect(base_url('dashboard'));
		}
		// Load Model Data_Umat
		$this->load->model('Models_Pengguna');
		// Load helper
		$this->load->helper('form_helper');
	}

	public function index() {
		$data = array(
            'data_pengguna' => $this->Models_Pengguna->view(),
            'jenis_admin' => $this->Models_Pengguna->level_admin(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Pengguna Sistem Informasi Gereja'
		);
		$this->load->view('header', $data);
		if ($this->input->post('submit')) {
			if ($this->Models_Pengguna->validation('tambah')) {
				$this->Models_Pengguna->save(); // Panggil fungsi save() yang ada di Inventaris_Barang.php
	        	$this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Sukses menambahkan pengguna.</div>');
				redirect('pengguna'); // Redirect kembali ke halaman awal / halaman view
			}
		}
		$this->load->view('pengguna/index', $data);
		$this->load->view('footer');		
	}

	public function tambah() {
		$data = array(
            'data_lingkungan' => $this->Models_Pengguna->list_lingkungan(),
            'jenis_admin' => $this->Models_Pengguna->level_admin(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Tambah Pengguna'
		);
		$this->load->view('header', $data);
		if ($this->input->post('submit')) {
			if ($this->Models_Pengguna->validation('tambah')) {
				$this->Models_Pengguna->simpanpengguna();
				$this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Sukses menambahkan pengguna.</div>');
				redirect('pengguna');
			}
		}
		$this->load->view('pengguna/tambah', $data);
		$this->load->view('footer');		
	}

	public function ubah($id) {
		$data = array(
			'data_pengguna' => $this->Models_Pengguna->view_by($id),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Perbarui Pengguna'
		);
		$this->load->view('header', $data);
		if ($this->input->post('submit')) {
			if ($this->Models_Pengguna->validation('tambah')) {
				$this->Models_Pengguna->perbaruipengguna($id);
				$this->session->set_flashdata('update', '<div class="alert alert-success" role="alert">Sukses perbarui pengguna.</div>');
				redirect('pengguna');
			}
		}
		$this->load->view('pengguna/ubah', $data);
		$this->load->view('footer');		
	}

	public function hapus($id) {
    	$this->Models_Pengguna->delete($id); // Panggil fungsi delete database
	    $this->session->set_flashdata('hapus', '<div class="alert alert-danger" role="alert">Sukses menghapus pengguna.</div>');
    	redirect('pengguna');
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */