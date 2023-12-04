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
            <?php echo form_open('pengguna/ubah/'.$data_pengguna->id); ?>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group"><div class="form-line">
                  <label for="jenis_admin">Level Admin</label>
                  <input disabled class="form-control" type="text" name="jenis_admin" value="<?php echo set_value('jenis_admin', $data_pengguna->level); ?>">
                  <small class="form-text text-muted">Level akun tidak dapat diubah</small>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="namalengkap">Nama Admin</label>
                  <input class="form-control" type="text" name="namalengkap" value="<?php echo set_value('namalengkap', $data_pengguna->namalengkap); ?>">
                  <small class="form-text text-muted">Ubah nama akun.</small>
                </div></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><div class="form-line">
                  <label for="username">Username</label>
                  <input disabled class="form-control" type="text" name="username" value="<?php echo set_value('username', $data_pengguna->username); ?>">
                  <small class="form-text text-muted">Username tidak dapat diubah</small>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>">
                  <small for="form-text-password" class="form-text text-muted">Masukan password baru anda!</small>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="repassword">Repeat Password</label>
                  <input class="form-control" type="password" name="repassword" value="<?php echo set_value('repassword'); ?>">
                  <small for="form-text-repassword" class="form-text text-muted">Masukan kembali password baru anda!</small>
                </div></div>
              </div>
              <div class="col-md-12"> 
                <input type="submit" name="submit" value="Perbarui" class="btn btn-primary">
                <a href="<?php echo base_url('pengguna'); ?>"><input type="button" class="btn btn-default" value="Batal"></a>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>

  </div>