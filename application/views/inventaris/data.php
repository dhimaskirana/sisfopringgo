<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card">
            <div class="card-header bg-white font-weight-bold">
              <div class="btn-group mr-2">
                <a href="<?php echo base_url('inventaris'); ?>" class="btn btn-sm btn btn-primary">Kembali</a>
                <a href="<?php echo base_url('inventaris/perbarui/'.$inventaris->id); ?>" class="btn btn-success btn-sm">Perbarui Data</a>
                <a href="<?php echo base_url('inventaris/hapus/'.$inventaris->id); ?>" class="btn btn-danger btn-sm" data-toggle="confirmation" data-btn-ok-label="HAPUS!" data-btn-ok-class="btn-success" data-btn-ok-icon-class="material-icons" data-btn-cancel-label="BATAL!" data-btn-cancel-class="btn-danger" data-btn-cancel-icon-class="material-icons" data-title="Konfirmasi hapus data?" data-content="Apakah anda yakin ingin menghapus data ini?">Hapus Data</a>
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-bar"></i>
                      Data Inventaris</div>
                      <div class="card-body">
                        <table class="table table-borderless">
                          <tbody>
                            <tr>
                              <th scope="row">Nama Barang</th>
                              <td><?php echo $inventaris->nama_barang; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Kode Barang</th>
                              <td><?php echo $inventaris->kode_barang; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Jumlah Barang</th>
                              <td><?php echo $inventaris->jumlah_barang; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Kategori Barang</th>
                              <td><?php echo $inventaris->nama; ?></td>
                            </tr>
                            <tr>
                              <th scope="row">Tempat Menyimpan</th>
                              <td><?php echo $inventaris->tempat_simpan; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-pie"></i>
                      Foto Inventaris</div>
                      <div class="card-body">
                        <img style="max-width:100%;" width="300px" src="<?php echo base_url(); ?>images/<?php echo $inventaris->foto_barang; ?>" alt="<?php echo $inventaris->nama_barang; ?>">
                      </div>
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
    </div><!-- .content p-4 -->