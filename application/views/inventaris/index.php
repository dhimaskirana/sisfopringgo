<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card">
            <div class="card-header bg-white font-weight-bold">
                <a href="<?php echo base_url('inventaris/tambah'); ?>" class="btn btn-sm btn btn-success">Tambah Data Inventaris</a>
            </div>
            <div class="card-body">
                <?php echo $this->session->flashdata('tambah'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Kategori Barang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                        if( ! empty($inventaris)){ // Jika data data_pengguna tidak sama dengan kosong, artinya jika data siswa ada
                          foreach($inventaris as $data){
                              echo "<tr>
                              <td>".$no."</td>
                              <td>".$data->nama_barang."</td>
                              <td>".$data->kode_barang."</td>
                              <td>".$data->jumlah_barang."</td>
                              <td>".$data->nama."</td>
                              <td>
                              <a href=".base_url("inventaris/data/".$data->id)." data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lihat Data\" data-sub-html=".$data->nama_barang."><i class=\"fas fa-fw fa-eye\"></i></a>
                              <a href='".base_url("inventaris/perbarui/".$data->id)."' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Perbarui Data\"><i class=\"fas fa-fw fa-edit\"></i></a>
                              <a href='".base_url("inventaris/hapus/".$data->id)."' data-toggle=\"tooltip\" data-placement=\"top\" title=\"Hapus Data\" data-toggle=\"confirmation\" data-btn-ok-label=\"HAPUS!\" data-btn-ok-class=\"btn-success\" data-btn-ok-icon-class=\"material-icons\" data-btn-cancel-label=\"BATAL!\" data-btn-cancel-class=\"btn-danger\" data-btn-cancel-icon-class=\"material-icons\" data-title=\"Konfirmasi hapus data?\" data-content=\"Apakah anda yakin ingin menghapus data ini?\"><i class=\"fas fa-fw fa-trash\"></i></a>
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