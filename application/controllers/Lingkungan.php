<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lingkungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
		// Load Model Data_Umat
		$this->load->model('Models_Lingkungan');
	}

	public function index() {
		$data = array(
            'data_lingkungan' => $this->Models_Lingkungan->view(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Data Lingkungan'
		);
		$this->load->view('header', $data);
		$this->load->view('lingkungan/index');
		$this->load->view('footer');
	}

}

/* End of file Lingkungan.php */
/* Location: ./application/controllers/Lingkungan.php */