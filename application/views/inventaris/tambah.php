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
                <a href="<?php echo base_url('inventaris'); ?>" class="btn btn-sm btn btn-success">Kembali</a>
            </div>
          <div class="card-body">
            <?php echo form_open("inventaris/tambah", array('enctype'=>'multipart/form-data','onSubmit'=>'return validate()')); ?>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group"><div class="form-line">
                  <label for="nama_barang">Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" value="<?php echo set_value('nama_barang'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="kode_barang">Kode Barang</label>
                  <input class="form-control" type="text" name="kode_barang" value="<?php echo set_value('kode_barang'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="jumlah_barang">Jumlah Barang</label>
                  <input class="form-control" type="text" name="jumlah_barang" value="<?php echo set_value('jumlah_barang'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="tempat_simpan">Tempat Menyimpan Inventaris</label>
                  <input class="form-control" type="text" name="tempat_simpan" value="<?php echo set_value('tempat_simpan'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="jumlah_barang">Kategori Barang</label>
                  <?php
                  $kategori_inventaris_attribute = 'class="form-control"';
                  echo form_dropdown('kategori_barang', $data_kategori_inventaris, null, $kategori_inventaris_attribute);
                  ?>
                </div></div>
              </div>
              <div class="col-md-6">                  
                <div class="form-group"><div class="form-line">
                  <label for="foto_barang">Foto Barang</label>
                  <input type="file" name="foto_barang" class="filestyle foto_barang" data-text="browse..." data-placeholder="Tidak ada foto yang dipilih">
                  <small class="form-text text-muted">Ukuran foto maksimal 2mb.</small>
                </div></div>
              </div>
              <div class="col-md-12"> 
                <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                <a href="<?php echo base_url("inventaris"); ?>"><input type="button" class="btn btn-default" value="Batal"></a>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>

  </div>