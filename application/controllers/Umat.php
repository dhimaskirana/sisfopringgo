<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url('login'));
		}
		$this->load->model('Models_Umat');
		$this->load->helper('form_helper');
	}

	public function index() {
		$data = array(
            'data_umat' => $this->Models_Umat->view(),
            'kodelingkungan' => $this->session->userdata('kodelingkungan'),
            'username' => $this->session->userdata('username'),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Data Umat Gereja'
		);
		$this->load->view('header', $data);
		$this->load->view('umat/index', $data);
		$this->load->view('footer');		
	}

    public function keluarga($np) {
    	$data = array(
			'data_pengguna' => $this->Models_Umat->view_by($np),
			'data_kk' => $this->Models_Umat->data_kk($np),
			'hubungan_kk' => $this->Models_Umat->list_hubungan_kk(),
			'pekerjaan' => $this->Models_Umat->list_pekerjaan(),
			'ekonomi' => $this->Models_Umat->list_ekonomi(),
			'jenkel' => $this->Models_Umat->list_jenis_kelamin(),
			'agama' => $this->Models_Umat->list_jenis_agama(),
			'status_kawin' => $this->Models_Umat->list_status_kawin(),
			'jenis_kk' => $this->Models_Umat->list_jenis_kk(),
			'suku' => $this->Models_Umat->list_suku_bangsa(),
			'pendidikan' => $this->Models_Umat->list_pendidikan(),
			'data_lingkungan' => $this->Models_Umat->list_lingkungan(),
			'data_wilayah' => $this->Models_Umat->list_wilayah(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'title_page' => 'Detail KK'
		);
		$this->load->view('header', $data);
    	$this->load->view('umat/detail-keluarga', $data);
		if ($np == null) {
			redirect('umat');
		}
    	$this->load->view('footer');
    }

    public function tambah() {
    	$data = array(
    		'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'pekerjaan' => $this->Models_Umat->list_pekerjaan(),
			'ekonomi' => $this->Models_Umat->list_ekonomi(),
			'jenkel' => $this->Models_Umat->list_jenis_kelamin(),
			'agama' => $this->Models_Umat->list_status_kawin(),
			'status_kawin' => $this->Models_Umat->list_status_kawin(),
			'jenis_kk' => $this->Models_Umat->list_jenis_kk(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'no_kk_baru' => $this->Models_Umat->no_kk_terakhir(),
            'title_page' => 'Tambah Keluarga Baru'
		);
		$this->load->view('header', $data);
		if ($this->uri->segment(3) == 'keluarga') {
			if($this->input->post('submit')) {
					$this->Models_Umat->tambahkeluarga();
					$this->Models_Umat->tambahkepalakeluarga();
					$this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert">Sukses menambahkan keluarga baru.</div>');
					redirect('umat');
			}
	    	$this->load->view('umat/tambah-keluarga', $data);
		}
		if ($this->uri->segment(3) == 'anggota') {
			echo $this->uri->segment(4);
		}
		$this->load->view('footer');
    }

    public function perbarui($np) {
    	$np = $this->uri->segment(3);
    	$data = array(
			'data_pengguna' => $this->Models_Umat->view_by($np),
    		'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'pekerjaan' => $this->Models_Umat->list_pekerjaan(),
			'ekonomi' => $this->Models_Umat->list_ekonomi(),
			'jenkel' => $this->Models_Umat->list_jenis_kelamin(),
			'agama' => $this->Models_Umat->list_jenis_agama(),
			'status_kawin' => $this->Models_Umat->list_status_kawin(),
			'jenis_kk' => $this->Models_Umat->list_jenis_kk(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'no_kk_baru' => $this->Models_Umat->no_kk_terakhir(),
            'title_page' => 'Edit Data Keluarga'
		);
		if ($this->uri->segment(3) !== null) {
		$this->load->view('header', $data);
			if($this->input->post('submit')) {
					$this->Models_Umat->updatekeluarga($np);
					$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Sukses memperbarui data keluarga.</div>');
					redirect('umat/perbarui/'.$np.'/');
			}
    		$this->load->view('umat/update-keluarga', $data);
		}
		$this->load->view('footer');
    }

    public function update_anggota($np) {
    	$data = array(
    		'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'pekerjaan' => $this->Models_Umat->list_pekerjaan(),
			'ekonomi' => $this->Models_Umat->list_ekonomi(),
			'jenkel' => $this->Models_Umat->list_jenis_kelamin(),
			'agama' => $this->Models_Umat->list_jenis_agama(),
			'status_kawin' => $this->Models_Umat->list_status_kawin(),
			'jenis_kk' => $this->Models_Umat->list_jenis_kk(),
            'nama_user' => $this->session->userdata('nama'),
            'level_user' => $this->session->userdata('level'),
            'no_kk_baru' => $this->Models_Umat->no_kk_terakhir(),
            'title_page' => 'Edit Data Keluarga'
		);
		if($this->input->post('submit')) {
				$this->Models_Umat->updatekeluarga($np);
				$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Sukses memperbarui data keluarga.</div>');
				redirect('umat/keluarga/'.$np.'/edit/');
		}
    	$this->load->view('umat/update-anggota', $data);
    }

	public function hapus($np) {
    	$this->Models_Umat->hapuskeluarga($np);
    	$this->Models_Umat->hapuskepalakeluarga($np);
	    $this->session->set_flashdata('hapus', '<div class="alert alert-danger" role="alert">Sukses menghapus keluarga.</div>');
    	redirect('umat');
	}

}

/* End of file Umat.php */
/* Location: ./application/controllers/Umat.php */