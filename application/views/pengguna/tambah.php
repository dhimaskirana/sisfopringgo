<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">
  
    <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>
        
      <?php if (validation_errors() || isset($message)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo validation_errors(); ?><?php echo (isset($message))? $message : ""; ?>
          </div><?php
        } ?>

        <div class="card">
          <div class="card-header bg-white font-weight-bold">
                <a href="<?php echo base_url('pengguna'); ?>" class="btn btn-sm btn btn-success">Kembali</a>
            </div>
            <div class="card-body">
            <?php echo form_open('pengguna/tambah'); ?>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group"><div class="form-line">
                  <label for="jenis_admin">Level Admin</label>
                  <?php
                    $jenis_admin_attribute = 'class="form-control"';
                    echo form_dropdown('jenis_admin', $jenis_admin, null, $jenis_admin_attribute);
                  ?>
                </div></div>
                <div class="form-group pilihlingkungan"><div class="form-line">
                  <label for="pilihlingkungan">Pilih Lingkungan</label>
                  <?php
                    foreach ($data_lingkungan as $lingkungan) {
                      $daftar_lingkungan[$lingkungan->lingkungan] = $lingkungan->ket;
                    }
                    $data_lingkungan_attribute = 'class="form-control"';
                    echo form_dropdown('pilihlingkungan', $daftar_lingkungan, null, $data_lingkungan_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="kodelingkungan">Kode Lingkungan</label>
                  <input readonly class="form-control" type="text" name="kodelingkungan" value="<?php echo set_value('kodelingkungan'); ?>">
                </div></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><div class="form-line">
                  <label for="namalengkap">Nama Admin</label>
                  <input class="form-control" type="text" name="namalengkap" value="<?php echo set_value('namalengkap'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="username">Username</label>
                  <input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="repassword">Repeat Password</label>
                  <input class="form-control" type="password" name="repassword" value="<?php echo set_value('repassword'); ?>">
                </div></div>
              </div>
              <div class="col-md-12"> 
                <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
                <a href="<?php echo base_url('pengguna'); ?>"><input type="button" class="btn btn-default" value="Batal"></a>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>

  </div>