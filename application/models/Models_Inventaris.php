<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Models_Inventaris extends CI_Model {
  
  public function view(){
    $this->db->select('*');
    $this->db->from('kategori_inventaris');
    $this->db->join('inventaris', 'inventaris.kategori_barang = kategori_inventaris.kode');
    return $this->db->get()->result();
  }
  
  public function view_by($id){
    $this->db->select('*');
    $this->db->from('kategori_inventaris');
    $this->db->join('inventaris', 'inventaris.kategori_barang = kategori_inventaris.kode');
    $this->db->where('id', $id);
    return $this->db->get()->row();
  }

  public function validation($mode){
    $this->load->library('form_validation');
    if($mode == 'save')
      $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
      $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required|max_length[50]');
      $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required');
      $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required');

    if($this->form_validation->run())
      return TRUE;
    else
      return FALSE;
  }
  
  public function save($upload){
    $data = array(
      'nama_barang' => $this->input->post('nama_barang'),
      'kode_barang' => $this->input->post('kode_barang'),
      'jumlah_barang' => $this->input->post('jumlah_barang'),
        'tempat_simpan' => $this->input->post('tempat_simpan'),
      'foto_barang' => $upload['file']['file_name'],
      'kategori_barang' => $this->input->post('kategori_barang')
    );
    
    $this->db->insert('inventaris', $data);
  }

  public function edit($id,$upload){
    if (!empty($upload)) {
      $row = $this->db->where('id', $id)->get('inventaris')->row();
      unlink('./images/'.$row->foto_barang);
      $data = array(
        'nama_barang' => $this->input->post('nama_barang'),
        'kode_barang' => $this->input->post('kode_barang'),
        'jumlah_barang' => $this->input->post('jumlah_barang'),
        'foto_barang' => $upload['file']['file_name'],
        'kategori_barang' => $this->input->post('kategori_barang'),
        'tempat_simpan' => $this->input->post('tempat_simpan')
      );
    } else {
      $data = array(
        'nama_barang' => $this->input->post('nama_barang'),
        'kode_barang' => $this->input->post('kode_barang'),
        'jumlah_barang' => $this->input->post('jumlah_barang'),
        'kategori_barang' => $this->input->post('kategori_barang'),
        'tempat_simpan' => $this->input->post('tempat_simpan')
      );      
    }
    $this->db->where('id', $id);
    $this->db->update('inventaris', $data);
  }

  public function delete($id){
    $row = $this->db->where('id', $id)->get('inventaris')->row();
    unlink('./images/'.$row->foto_barang);
    $this->db->where('id', $id);
    $this->db->delete('inventaris');
  }

  public function upload_gambar() {
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_spaces'] = TRUE;
  
    $this->load->library('upload', $config);

    if($this->upload->do_upload('foto_barang')){
      $return = array(
        'result' => 'success',
        'file' => $this->upload->data(),
        'error' => ''
      );
      return $return;
    } else {
      $return = array(
        'result' => 'failed',
        'file' => '',
        'error' => $this->upload->display_errors()
      );
      return $return;
    }
  }

  public function list_kategori_inventaris() {
    $this->db->order_by('kode', 'asc');
    $result = $this->db->get('kategori_inventaris');

    $data_kategori_inventaris[''] = 'Pilih Kategori Barang';
    if ($result->num_rows() > 0) {
      foreach ($result->result() as $row) {
        $data_kategori_inventaris[$row->kode] = $row->nama;
      }
    }
    return $data_kategori_inventaris;
  }
  
}