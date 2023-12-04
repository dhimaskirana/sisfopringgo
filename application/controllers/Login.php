<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Models_Login');
	}

	public function index(){
		$this->load->view('login/index');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Models_Login->cek_login('data_admin',$where)->num_rows();
		$data_user = $this->Models_Login->cek_data($username);
		if($cek > 0){
			$data_session = array(
				'username' => $data_user->username,
				'kodelingkungan' => $data_user->kodelingkungan,
				'nama' => $data_user->namalengkap,
				'level' => $data_user->level,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));

		}else{
			$this->session->set_flashdata('login_error', '<div class="alert alert-danger" role="alert">Username/Password yang anda masukan salah. Silahkan cek kembali!</div>');
			redirect(base_url('login'));
		}
	}
}