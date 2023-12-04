<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card">
            <div class="card-header bg-white font-weight-bold">
                <a href="<?php echo base_url('pengguna/tambah'); ?>" class="btn btn-sm btn btn-success">Tambah Pengguna</a>
            </div>
            <div class="card-body">
                <?php echo $this->session->flashdata('tambah'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <?php echo $this->session->flashdata('update'); ?>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Admin</th>
                              <th scope="col">Username</th>
                              <th scope="col">Level</th>
                              <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                        if( ! empty($data_pengguna)){ // Jika data data_pengguna tidak sama dengan kosong, artinya jika data siswa ada
                          foreach($data_pengguna as $data){
                            echo "<tr>
                            <td>".$no."</td>
                            <td>".$data->namalengkap."</td>
                            <td>".$data->username."</td>
                            <td>".$jenis_admin[$data->level]."</td>
                            <td>
                            <a href=".base_url("pengguna/ubah/".$data->id)." class=\"btn btn-info btn-sm\">Perbarui Pengguna</a>
                            <a href=".base_url("pengguna/hapus/".$data->id)." class=\"btn btn-danger btn-sm\" data-toggle=\"confirmation\" data-btn-ok-label=\"HAPUS!\" data-btn-ok-class=\"btn-success\" data-btn-ok-icon-class=\"material-icons\" data-btn-cancel-label=\"BATAL!\" data-btn-cancel-class=\"btn-danger\" data-btn-cancel-icon-class=\"material-icons\" data-title=\"Konfirmasi hapus pengguna?\" data-content=\"Apakah anda yakin ingin menghapus pengguna ini?\">Hapus Pengguna</a>
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
        </div>
        
    </div><!-- .content p-4 -->