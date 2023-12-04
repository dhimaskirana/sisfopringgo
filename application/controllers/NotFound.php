<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->output->set_status_header('404');
		$data = array(
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Not Found'
		);
		$this->load->view('header', $data);
		$this->load->view('404');
		$this->load->view('footer');
	}

}

/* End of file NotFound.php */
/* Location: ./application/controllers/NotFound.php */