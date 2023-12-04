    <div class="modal fade tambah-anggota" tabindex="-1" role="dialog" aria-labelledby="tambah-anggota" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Anggota Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('umat/keluarga/'.$data_pengguna->np.'/'); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"><div class="form-line">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" value="<?php echo set_value('nama'); ?>">
                            </div></div>
                            <div class="form-group"><div class="form-line">
                              <label for="agama">Agama</label>
                              <?php
                              $agama_attribute = 'class="form-control"';
                              echo form_dropdown('agama', $agama, null, $agama_attribute);
                              ?>
                            </div></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"><div class="form-line">
                                        <label for="tmplahir">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tmplahir" value="<?php echo set_value('tmplahir'); ?>">
                                    </div></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><div class="form-line">
                                      <label for="tgllahir">Tanggal Lahir</label>
                                      <input class="form-control" type="date" name="tgllahir" value="<?php echo set_value('tgllahir'); ?>">
                                    </div></div>
                                </div>
                            </div>
                            <div class="form-group"><div class="form-line">
                              <label for="jenkel">Jenis Kelamin</label>
                              <?php
                              $jenkel_attribute = 'class="form-control"';
                              echo form_dropdown('jenkel', $jenkel, null, $jenkel_attribute);
                              ?>
                            </div></div>
                            <div class="form-group"><div class="form-line">
                              <label for="hubkk">Hubungan dengan Kepala RT</label>
                              <?php
                              $hubkk_attribute = 'class="form-control"';
                              echo form_dropdown('hubkk', $hubkk, null, $hubkk_attribute);
                              ?>
                            </div></div>
                            <div class="form-group"><div class="form-line">
                              <label for="suku">Suku Bangsa</label>
                              <?php
                              $suku_attribute = 'class="form-control"';
                              echo form_dropdown('suku', $suku, null, $suku_attribute);
                              ?>
                            </div></div>
                            <div class="form-group"><div class="form-line">
                              <label for="pendidikan">Pendidikan</label>
                              <?php
                              $pendidikan_attribute = 'class="form-control"';
                              echo form_dropdown('pendidikan', $pendidikan, null, $pendidikan_attribute);
                              ?>
                            </div></div>
                            <div class="form-group"><div class="form-line">
                                <label for="np">Nomor Keluarga</label>
                                <input readonly class="form-control" type="text" name="np" value="<?php echo set_value('np', $no_urut_terakhir->nourut + 1); ?>">
                            </div></div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>