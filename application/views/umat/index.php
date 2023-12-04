<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

  <h2 class="mb-4"><?php echo $title_page; ?> - <?php echo $nama_user; ?></h2>

  <div class="alert alert-info" role="alert">
    Halaman ini masih dalam tahap pengembangan!
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo base_url('umat/tambah/keluarga'); ?>" class="btn btn-sm btn btn-success">Tambah Keluarga Baru</a>
    </div>
    <div class="card-body">
      <?php echo $this->session->flashdata('tambah'); ?>
      <?php echo $this->session->flashdata('hapus'); ?>
      <div class="table-responsive">
        <table id="dataTable" class="table table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>No. KK Paroki</th>
              <th>Nama</th>
              <th>Lingkungan</th>
              <th>Wilayah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
              if( ! empty($data_umat)){ // Jika data data_umat tidak sama dengan kosong, artinya jika data siswa ada
                foreach($data_umat as $data){
                  echo "<tr>
                  <td>".$no."</td>
                  <td><a href=".base_url("umat/keluarga/".$data->np).">".$data->np."</a></td>
                  <td>".$data->nmkk."</td>
                  <td>".$data->nmlingkungan."</td>
                  <td>".$data->nmwilayah."</td>
                  <td>
                  <a href=".base_url("umat/keluarga/".$data->np)." class=\"btn btn-icon btn-pill btn-info\" data-toggle=\"tooltip\" title=\"Lihat Data Keluarga\"><i class=\"fa fa-fw fa-eye\"></i></a>
                  <a href=".base_url("umat/keluarga/".$data->np."/edit/")." class=\"btn btn-icon btn-pill btn-primary\" data-toggle=\"tooltip\" title=\"Perbarui Data Keluarga\"><i class=\"fa fa-fw fa-edit\"></i></a>
                  <a href=".base_url("umat/hapus/".$data->np)." class=\"btn btn-icon btn-pill btn-danger\" data-toggle=\"confirmation\" data-btn-ok-label=\"HAPUS!\" data-btn-ok-class=\"btn-success\" data-btn-ok-icon-class=\"material-icons\" data-btn-cancel-label=\"BATAL!\" data-btn-cancel-class=\"btn-danger\" data-btn-cancel-icon-class=\"material-icons\" data-title=\"Hapus data keluarga ini?\" data-content=\"Apakah anda yakin menghapus seluruh data keluarga ini?\"><i class=\"fa fa-fw fa-trash\"></i></a>
                  </td>
                  </tr>";
                  $no++;
                }
                  }else{ // Jika data siswa kosong
                    echo "Data Tidak Ada";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        
      </div>