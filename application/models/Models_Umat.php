<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Umat extends CI_Model {

	public function view() {
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('kodelingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}		
		$this->db->select('*');
		$this->db->from('data_umat_kk');
		$this->db->order_by('np', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function view_by($np){
    	$this->db->select('*');
    	$this->db->from('data_umat_kk');
    	$this->db->where('np', $np);
		$query = $this->db->get();
    	return $query->row();
  	}

	public function no_kk_terakhir() {
		$namalingkungan = $this->session->userdata('kodelingkungan');
		$this->db->where('lingkungan', $namalingkungan);
		$this->db->select('*');
		$this->db->from('data_umat_kk');
		$this->db->order_by('np', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	public function no_urut_terakhir($np) {
		$this->db->where('np', $np);
		$this->db->select('*');
		$this->db->from('data_umat');
		$this->db->order_by('nourut', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	public function nama_lingkungan() {
    	$this->db->from('data_lingkungan');
    	$this->db->where('lingkungan', $this->session->userdata('kodelingkungan'));
    	return $this->db->get()->row('ket');
	}

	public function nama_wilayah() {
    	$this->db->from('data_lingkungan');
    	$this->db->where('lingkungan', $this->session->userdata('kodelingkungan'));
    	return $this->db->get()->row('nmwilayah');
	}

	public function kode_wilayah() {
    	$this->db->from('data_lingkungan');
    	$this->db->where('lingkungan', $this->session->userdata('kodelingkungan'));
    	return $this->db->get()->row('wilayah');
	}

	public function kode_paroki() {
    	$this->db->from('data_lingkungan');
    	$this->db->where('lingkungan', $this->session->userdata('kodelingkungan'));
    	return $this->db->get()->row('paroki');
	}

	public function kode_keuskupan() {
    	$this->db->from('data_lingkungan');
    	$this->db->where('lingkungan', $this->session->userdata('kodelingkungan'));
    	return $this->db->get()->row('keuskupan');
	}

	public function tambahkeluarga() {
		$this->load->helper('array');
		$data = array(
			'keuskupan' => $this->Models_Umat->kode_keuskupan(),
			'paroki' => $this->Models_Umat->kode_paroki(),
			'wilayah' => $this->Models_Umat->kode_wilayah(),
			'lingkungan' => $this->session->userdata('kodelingkungan'),
			'nmuskup' => 'Keuskupan Agung Semarang',
			'nmparoki' => 'St. Paulus - Pringgolayan',
			'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'nmlingkungan' => $this->Models_Umat->nama_lingkungan(),
			'np' => $this->input->post('np'),
			'npvalue' => '0',
			'nmkk' => strtoupper($this->input->post('nmkk')),
			'jenkel' => $this->input->post('jenkel'),
			'ketjenkel' => element($this->input->post('jenkel'), $this->Models_Umat->list_jenis_kelamin()),
			'agama' => $this->input->post('agama'),
			'ketagama' => element($this->input->post('agama'), $this->Models_Umat->list_jenis_agama()),
			'alamat' => $this->input->post('alamat'),
			'ekonomi' => $this->input->post('kondisi_ekonomi'),
			'keteko' => element($this->input->post('kondisi_ekonomi'), $this->Models_Umat->list_ekonomi()),
			'telp' => $this->input->post('telp'),
			'stskwn' => $this->input->post('stskwn'),
			'ketstskwn' => element($this->input->post('stskwn'), $this->Models_Umat->list_status_kawin()),
			'tmpnikah' => $this->input->post('tmpnikah'),
			'tglnikah' => $this->input->post('tglnikah'),
			'jenkk' => $this->input->post('jenkk'),
			'ketjenkk' => element($this->input->post('jenkk'), $this->Models_Umat->list_jenis_kk()),
			'libermat' => $this->input->post('libermat')
		);
		$this->db->insert('data_umat_kk', $data);
	}

	public function tambahkepalakeluarga() {
		$this->load->helper('array');
		$data = array(
			'keuskupan' => $this->Models_Umat->kode_keuskupan(),
			'paroki' => $this->Models_Umat->kode_paroki(),
			'wilayah' => $this->Models_Umat->kode_wilayah(),
			'lingkungan' => $this->session->userdata('kodelingkungan'),
			'nmuskup' => 'Keuskupan Agung Semarang',
			'nmparoki' => 'St. Paulus - Pringgolayan',
			'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'nmlingkungan' => $this->Models_Umat->nama_lingkungan(),
			'np' => $this->input->post('np'),
			'nama' => strtoupper($this->input->post('nmkk')),
			'nourut' => '1',
			'jenkel' => $this->input->post('jenkel'),
			'hubkk' => '1',
			'stskwn' => $this->input->post('stskwn'),
			'agama' => $this->input->post('agama'),
			'ket1' => $this->input->post('jenkel'),
			'ket2' => element('1', $this->Models_Umat->list_status_keluarga())
		);
		$this->db->insert('data_umat', $data);
	}

	public function updatekeluarga($np) {
		$this->load->helper('array');
		$data = array(
			'keuskupan' => $this->Models_Umat->kode_keuskupan(),
			'paroki' => $this->Models_Umat->kode_paroki(),
			'wilayah' => $this->Models_Umat->kode_wilayah(),
			'lingkungan' => $this->session->userdata('kodelingkungan'),
			'nmuskup' => 'Keuskupan Agung Semarang',
			'nmparoki' => 'St. Paulus - Pringgolayan',
			'nmwilayah' => $this->Models_Umat->nama_wilayah(),
			'nmlingkungan' => $this->Models_Umat->nama_lingkungan(),
			'npvalue' => '0',
			'nmkk' => strtoupper($this->input->post('nmkk')),
			'jenkel' => $this->input->post('jenkel'),
			'ketjenkel' => element($this->input->post('jenkel'), $this->Models_Umat->list_jenis_kelamin()),
			'agama' => $this->input->post('agama'),
			'ketagama' => element($this->input->post('agama'), $this->Models_Umat->list_jenis_agama()),
			'alamat' => $this->input->post('alamat'),
			'ekonomi' => $this->input->post('kondisi_ekonomi'),
			'keteko' => element($this->input->post('kondisi_ekonomi'), $this->Models_Umat->list_ekonomi()),
			'telp' => $this->input->post('telp'),
			'stskwn' => $this->input->post('stskwn'),
			'ketstskwn' => element($this->input->post('stskwn'), $this->Models_Umat->list_status_kawin()),
			'tmpnikah' => $this->input->post('tmpnikah'),
			'tglnikah' => $this->input->post('tglnikah'),
			'jenkk' => $this->input->post('jenkk'),
			'ketjenkk' => element($this->input->post('jenkk'), $this->Models_Umat->list_jenis_kk()),
			'libermat' => $this->input->post('libermat')
		);
	    $this->db->where('np', $np);
		$this->db->update('data_umat_kk', $data);
	}

	public function data_kk($np) {
		$this->db->select('*');
		$this->db->from('data_umat');
		$this->db->where('np', $np);
		$this->db->order_by('nourut', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function data_umat_kk($np,$nourut) {
		$this->db->select('*');
		$this->db->from('data_umat');
		$this->db->where('np', $np);
		$this->db->where('nourut', $nourut);
		$query = $this->db->get();
		return $query->row();
	}

	public function list_pekerjaan() {
		$data_pekerjaan = array(
			'1' => 'Ahli Ekonomi',
			'2' => 'Ahli Hukum',
			'3' => 'Ahli Perpustakaan',
			'4' => 'Apoteker',
			'5' => 'Bidan Ahli',
			'6' => 'Buruh Tani dan Ternak',
			'7' => 'Dokter Gigi',
			'8' => 'Dokter Hewan',
			'9' => 'Dokter Umum / Ahli',
			'10' => 'Guide Turis',
			'11' => 'Juru Masak',
			'12' => 'Kontraktor',
			'13' => 'Olahragawan',
			'14' => 'Pandai Besi',
			'15' => 'Pedagang kecil',
			'16' => 'Pejabat DPR',
			'17' => 'Pejabat Pelaksana',
			'18' => 'Pekerja kasar / Buruh',
			'19' => 'Pemahat / Pelukis / Seniman',
			'20' => 'Pekerja Rumah Tangga',
			'56' => 'Swasta',
			'62' => 'Ibu Rumah Tangga',
			'64' => 'Pelajar',
			'88' => 'Belum Bekerja'
		);
		return $data_pekerjaan;
	}

	public function list_ekonomi() {
		$data_ekonomi = array(
			'1' => 'Bisa membantu',
			'2' => 'Biasa/cukup',
			'3' => 'Memerlukan bantuan'
		);
		return $data_ekonomi;
	}

	public function list_jenis_kelamin() {
		$data_jenis_kelamin = array(
			'1' => 'Laki-laki',
			'2' => 'Perempuan'
		);
		return $data_jenis_kelamin;
	}

	public function list_jenis_agama() {
		$data_jenis_agama = array(
			'1' => 'Islam',
			'2' => 'Kristen',
			'3' => 'Katolik',
			'4' => 'Hindu',
			'5' => 'Budha',
			'6' => 'Konghucu',
			'7' => 'Lainnya',
			'8' => 'Kato > NK',
			'9' => 'Kato > Kristen',
			'10' => 'Katekumen'
		);
		return $data_jenis_agama;
	}

	public function list_status_kawin() {
		$data_status_kawin = array(
			'1' => 'Cerai',
			'2' => 'Janda'
		);
		return $data_status_kawin;
	}

	public function list_status_keluarga() {
		$data_status_keluarga = array(
			'1' => 'Kepala RT',
			'2' => 'Pasangan',
			'3' => 'Anak'
		);
		return $data_status_keluarga;
	}

	public function list_jenis_kk() {
		$data_jenis_kk = array(
			'1' => 'Rumah Tangga Biasa',
			'2' => 'Rumah Tangga Khusus'
		);
		return $data_jenis_kk;
	}

	public function list_hubungan_kk() {
		$data_hubungan_kk = array(
			'1' => 'Kepala Rumah Tangga',
			'2' => 'Pasangan',
			'3' => 'Anak',
			'4' => 'Kakak/Adik',
			'5' => 'Anak Adopsi/Anak tiri',
			'6' => 'Cucu',
			'7' => 'Orang tua/Mertua',
			'8' => 'Famili lain',
			'9' => 'Pembantu/Sopir/Tukang Kebun',
			'10' => 'Lain-lain'
		);
		return $data_hubungan_kk;
	}

	public function list_suku_bangsa() {
		$data_suku_bangsa = array(
			'2' => 'Bali',
			'3' => 'Batak',
			'4' => 'Betawi',
			'5' => 'Bugis',
			'6' => 'Dayak',
			'7' => 'Flores',
			'8' => 'Papua',
			'9' => 'Jawa',
			'10' => 'Madura',
			'11' => 'Makassar',
			'12' => 'Minangkabau',
			'13' => 'Nias',
			'14' => 'Sumbawa',
			'15' => 'Sunda',
			'16' => 'Timor',
			'17' => 'Tionghoa',
			'18' => 'Toraja',
			'19' => 'Non-Indonesia',
			'20' => 'Lainnya'
		);
		return $data_suku_bangsa;
	}

	public function list_pendidikan() {
		$data_pendidikan = array(
			'1' => 'SD',
			'2' => 'SLTP',
			'3' => 'SLTA',
			'4' => 'Diploma',
			'5' => 'Sarjana',
			'6' => 'S2/Akta 5',
			'7' => 'S3',
			'13' => 'SLTA - K',
			'14' => 'D1-D3 - K',
			'15' => 'S1 - K',
			'16' => 'S2 - K',
			'17' => 'S3 - K',
			'23' => 'SLTA - NK',
			'24' => 'D1-D3 - NK',
			'25' => 'S1/D4 - NK',
			'26' => 'S2 - NK',
			'27' => 'S3 - NK',
			'33' => '7-12 non skl',
			'44' => '13-15 non skl',
			'77' => 'Buta Aksara'
		);
		return $data_pendidikan;
	}

	public function list_lingkungan() {
		$this->db->select('lingkungan, ket');
		$this->db->from('data_lingkungan');
		$query = $this->db->get();
		return $query->result();
	}

	public function list_wilayah() {
		$this->db->select('wilayah, ket');
		$this->db->from('data_wilayah');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapuskeluarga($np){
	    $this->db->where('np', $np);
	    $this->db->delete('data_umat');
	}

	public function hapuskepalakeluarga($np){
	    $this->db->where('np', $np);
	    $this->db->delete('data_umat_kk');
	}

}

/* End of file Data_Umat.php */
/* Location: ./application/models/Data_Umat.php */