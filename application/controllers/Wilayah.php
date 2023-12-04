<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
		// Load Model Data_Umat
		$this->load->model('Models_Wilayah');
	}

	public function index() {
		$data = array(
            'data_wilayah' => $this->Models_Wilayah->view(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Data Wilayah'
		);
		$this->load->view('header', $data);
		$this->load->view('wilayah/index');
		$this->load->view('footer');
	}

}

/* End of file Wilayah.php */
/* Location: ./application/controllers/Wilayah.php */