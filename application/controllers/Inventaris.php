<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
        if ($this->session->userdata('level') != 'administrator') {
            redirect(base_url('dashboard'));
        }
		$this->load->model('Models_Inventaris');
		$this->load->helper('form_helper');
	}

	public function index() {
		$data = array(
            'inventaris' => $this->Models_Inventaris->view(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Inventaris Gereja'
		);
		$this->load->view('header', $data);
		$this->load->view('inventaris/index', $data);
		$this->load->view('footer');
	}

	public function tambah() {
		$data = array(
            'data_kategori_inventaris' => $this->Models_Inventaris->list_kategori_inventaris(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Tambah Inventaris'
		);
		$this->load->view('header', $data);
		if($this->input->post('submit')) {
    		$upload = $this->Models_Inventaris->upload_gambar();
			if($this->Models_Inventaris->validation('save') && $upload['result'] == 'success'){
				$this->Models_Inventaris->save($upload);
	        	$this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Sukses menambahkan inventaris.</div>');
				redirect('inventaris');
	    	} else {
	        	$data['message'] = $upload['error'];
	    	}
		}
    	$this->load->view('inventaris/tambah', $data);
		$this->load->view('footer');
    }

    public function perbarui($id) {
    	$data = array(
			'inventaris' => $this->Models_Inventaris->view_by($id),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'data_kategori_inventaris' => $this->Models_Inventaris->list_kategori_inventaris(),
            'kategori_inventaris_terpilih' => $this->db->where('id', $id)->get('inventaris')->row('kategori_barang'),
            'title_page' => 'Perbarui Inventaris'
		);
		$this->load->view('header', $data);
    	if($this->input->post('submit')){
    		$upload = $this->Models_Inventaris->upload_gambar();
    		if($upload['result'] == 'success'){
    			$this->Models_Inventaris->edit($id,$upload);
    			redirect('inventaris/data/'.$id);
    		} else {
    			$this->Models_Inventaris->edit($id);
    			redirect('inventaris/data/'.$id);
    		}
    	}
    	$this->load->view('inventaris/perbarui', $data);
		$this->load->view('footer');
    }

    public function data($id) {
    	$data = array(
			'inventaris' => $this->Models_Inventaris->view_by($id),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Detail Inventaris'
		);
		$this->load->view('header', $data);
    	$this->load->view('inventaris/data', $data);
		$this->load->view('footer');
    }

    public function hapus($id) {
    	$this->Models_Inventaris->delete($id);
	    $this->session->set_flashdata('hapus', '<div class="alert alert-danger" role="alert">Sukses menghapus inventaris.</div>');
    	redirect('inventaris');
    }

}