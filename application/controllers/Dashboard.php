<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
		$this->load->model('Models_Dashboard');
	}

	public function index() {
		$data = array(
            'jumlah_laki_laki' => $this->Models_Dashboard->jumlah_laki_laki(),
            'jumlah_perempuan' => $this->Models_Dashboard->jumlah_perempuan(),
            'jumlah_kk' => $this->Models_Dashboard->jumlah_kk(),
            'jumlah_umat' => $this->Models_Dashboard->jumlah_umat(),
            'kodelingkungan' => $this->session->userdata('kodelingkungan'),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Dashboard'
		);
		$this->load->view('header', $data);
		$this->load->view('dashboard/index');
		$this->load->view('footer');
	}
}
