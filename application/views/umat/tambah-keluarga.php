<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <?php echo form_open("umat/tambah"); ?>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group"><div class="form-line">
                  <label for="np">Nomor Keluarga</label>
                  <input readonly class="form-control" type="text" name="np" value="<?php echo set_value('np', $no_kk_baru->np + 1); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="nmkk">Nama Kepala Keluarga</label>
                  <input class="form-control" type="text" name="nmkk" value="<?php echo set_value('nmkk'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="jenkel">Jenis Kelamin Kepala Keluarga</label>
                  <?php
                  $jenkel_attribute = 'class="form-control"';
                  echo form_dropdown('jenkel', $jenkel, null, $jenkel_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="agama">Agama Kepala Keluarga</label>
                  <?php
                  $agama_attribute = 'class="form-control"';
                  echo form_dropdown('agama', $agama, null, $agama_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="kondisi_ekonomi">Kondisi Ekonomi Keluarga</label>
                  <?php
                  $kondisi_ekonomi_attribute = 'class="form-control"';
                  echo form_dropdown('kondisi_ekonomi', $ekonomi, null, $kondisi_ekonomi_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="5" type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"></textarea>
                </div></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><div class="form-line">
                  <label for="telp">No. Telp</label>
                  <input class="form-control" type="text" name="telp" value="<?php echo set_value('telp'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="stskwn">Status Pernikahan</label>
                  <?php
                  $status_kawin_attribute = 'class="form-control"';
                  echo form_dropdown('stskwn', $status_kawin, null, $status_kawin_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="tmpnikah">Tempat Menikah</label>
                  <input class="form-control" type="text" name="tmpnikah" value="<?php echo set_value('tmpnikah'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="tglnikah">Tanggal Menikah</label>
                  <input class="form-control" type="date" name="tglnikah" value="<?php echo set_value('tglnikah'); ?>">
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="jenkk">Jenis Rumah Tangga</label>
                  <?php
                  $jenis_kk_attribute = 'class="form-control"';
                  echo form_dropdown('jenkk', $jenis_kk, null, $jenis_kk_attribute);
                  ?>
                </div></div>
                <div class="form-group"><div class="form-line">
                  <label for="libermat">Liber Matrimoni Keluarga</label>
                  <input class="form-control" type="text" name="libermat" value="<?php echo set_value('libermat'); ?>">
                </div></div>
              </div>
              <div class="col-md-12"> 
                <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                <a href="<?php echo base_url("umat"); ?>"><input type="button" class="btn btn-default" value="Batal"></a>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        
    </div>