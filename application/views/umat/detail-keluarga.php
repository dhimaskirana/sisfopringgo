<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

  <div class="row">
    <div class="col-md-6">
      <h2 class="mb-4">Detail KK No. <?php echo $data_pengguna->np; ?> <a href="<?php echo base_url('umat/perbarui/'.$data_pengguna->np.'/') ?>" class="btn btn-sm btn btn-success">Edit Keluarga</a></h2>

      <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
      </div>

      <div class="card mb-3">
        <div class="card-header bg-white font-weight-bold">Data Keluarga</div>
        <div class="card-body">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <th scope="row">Lingkungan / Wilayah</th>
                <td><?php foreach ($data_lingkungan as $lingkungan) {
                      $daftar_lingkungan[$lingkungan->lingkungan] = $lingkungan->ket;
                    }
                    echo $daftar_lingkungan[$data_pengguna->lingkungan]; ?> / <?php foreach ($data_wilayah as $wilayah) {
                      $daftar_wilayah[$wilayah->wilayah] = $wilayah->ket;
                    }
                    echo $daftar_wilayah[$data_pengguna->wilayah]; ?></td>
              </tr>
              <tr>
                <th scope="row">Nomor Keluarga</th>
                <td><?php echo $data_pengguna->np; ?></td>
              </tr>
              <tr>
                <th scope="row">Nama Kepala Keluarga</th>
                <td><?php echo $data_pengguna->nmkk; ?></td>
              </tr>
              <tr>
                <th scope="row">Jenis Kelamin Kepala Keluarga</th>
                <td><?php echo $jenkel[$data_pengguna->jenkel]; ?></td>
              </tr>
              <tr>
                <th scope="row">Agama Kepala Keluarga</th>
                <td><?php echo $agama[$data_pengguna->agama]; ?></td>
              </tr>
              <tr>
                <th scope="row">Suku Kepala Keluarga</th>
                <td><?php echo $suku[$data_pengguna->suku]; ?></td>
              </tr>
              <tr>
                <th scope="row">Alamat</th>
                <td><?php echo $data_pengguna->alamat; ?></td>
              </tr>
              <tr>
                <th scope="row">No. Telp</th>
                <td><?php echo $data_pengguna->telp; ?></td>
              </tr>
              <tr>
                <th scope="row">Status Pernikahan</th>
                <td><?php echo $status_kawin[$data_pengguna->stskwn]; ?></td>
              </tr>
              <tr>
                <th scope="row">Tempat Menikah</th>
                <td><?php echo $data_pengguna->tmpnikah; ?></td>
              </tr>
              <tr>
                <th scope="row">Tanggal Menikah</th>
                <td><?php echo $data_pengguna->tglnikah; ?></td>
              </tr>
              <tr>
                <th scope="row">Liber Matrimoni Keluarga</th>
                <td><?php echo $data_pengguna->libermat; ?></td>
              </tr>
              <tr>
                <th scope="row">Kondisi Ekonomi Keluarga</th>
                <td><?php echo $ekonomi[$data_pengguna->ekonomi]; ?></td>
              </tr>
              <tr>
                <th scope="row">Jenis Rumah Tangga</th>
                <td><?php echo $jenis_kk[$data_pengguna->jenkk]; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

    <div class="col-md-6">
      <h2 class="mb-4">Anggota Keluarga <button type="button" class="btn btn-sm btn btn-success" data-toggle="modal" data-target=".tambah-anggota">Tambah Anggota</button></h2>

      <?php $this->load->view('umat/modal-tambah-anggota'); ?>

      <?php
      if(!empty($data_kk)){
        $i = 0;
        foreach($data_kk as $data){
          $i++;?>
          <div class="accordion" id="accordion-<?php echo $i; ?>">
            <div class="card mb-3">
              <div class="card-header bg-white font-weight-bold">
                <a href="#" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>" class="collapsed">
                  <div class="row">
                    <div class="col">
                      <?php echo $i; ?>. <?php echo $data->nama; ?> (<?php echo $data->ket2; ?>)
                    </div>
                    <div class="col-auto collapse-icon"></div>
                  </div>
                </a>
              </div>
              <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#accordion-<?php echo $i; ?>">
                <div class="card-body">
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td><?php echo $data->nama; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Agama</th>
                        <td><?php echo $agama[$data->agama]; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Tempat dan Tanggal Lahir</th>
                        <td><?php echo $data->tmplahir; ?>, <?php echo date("j F Y",strtotime($data->tgllahir)); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Jenis Kelamin</th>
                        <td><?php echo $jenkel[$data->jenkel]; ?> (<?php echo $data->ket1; ?>)</td>
                      </tr>
                      <tr>
                        <th scope="row">Hubungan Keluarga</th>
                        <td><?php echo $data->ket2; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Suku</th>
                        <td><?php echo $data->ket3; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Pendidikan</th>
                        <td><?php echo $data->ket4; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Bidang Studi</th>
                        <td><?php echo $data->ket5; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Pekerjaan</th>
                        <td><?php echo $data->ket6; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Golongan Darah</th>
                        <td><?php echo $data->ket7; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Status Kesehatan</th>
                        <td><?php echo $data->ket8; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Waktu Baptis</th>
                        <td><?php echo $data->ket9; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Tempat dan Tanggal Baptis</th>
                        <td><?php echo $data->tmpbaptis; ?>, <?php echo date("j F Y",strtotime($data->tglbaptis)); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Tempat dan Tanggal Penguatan</th>
                        <td><?php echo $data->tmpkrisma; ?>, <?php echo date("j F Y",strtotime($data->tglkrisma)); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Status Perkawinan</th>
                        <td><?php echo $data->ket10; ?> (<?php echo $data->ket11; ?>)</td>
                      </tr>
                      <tr>
                        <th scope="row">Jabatan Sosial</th>
                        <td><?php echo $data->ket12; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Tempat Tinggal</th>
                        <td><?php echo $data->ket13; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Status Gerejawi</th>
                        <td><?php echo $data->ket14; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Keterlibatan</th>
                        <td><?php echo $data->ket15; ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Liber Baptizatorum</th>
                        <td><?php echo $data->liberbap; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer" style="border-bottom: 1px solid rgba(0,0,0,.125);">

                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo base_url('umat/perbarui/anggota/'.$data->np.'/'.$data->nourut.'/') ?>" class="btn btn-sm btn btn-success">Edit Keluarga</a>
                    <button type="button" class="btn btn-sm btn btn-danger" data-toggle="modal" data-target=".tambah-anggota">Hapus Anggota</button>
                  </div>

                </div>
              </div>
            </div>
          </div>


        <?php }} else 
        echo 'Tidak ada data!'; ?>
      </div>
    </div>

  </div>