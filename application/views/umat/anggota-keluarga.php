<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2><?php echo $data_umat_kk->nama; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card mb-3">
            <div class="card-body">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <th scope="row">Nama Lengkap</th>
                          <td><?php echo $data_umat_kk->nama; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Tempat Lahir</th>
                          <td><?php echo $data_umat_kk->tmplahir; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Tanggal Lahir</th>
                          <td><?php echo $data_umat_kk->tgllahir; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Jenis Kelamin</th>
                          <td><?php echo $jenis_kelamin[$data_umat_kk->jenkel]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Hubungan Keluarga</th>
                          <td><?php echo $hubungan_kk[$data_umat_kk->hubkk]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Suku</th>
                          <td><?php echo $data_umat_kk->suku; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Pendidikan</th>
                          <td><?php echo $data_umat_kk->pendidikan; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Bidang Studi</th>
                          <td><?php echo $data_umat_kk->bidstudi; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Pekerjaan</th>
                          <td><?php echo $pekerjaan[$data_umat_kk->pekerjaan]; ?></td>
                        </tr>
                      </tbody>
                    </table>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        
    </div>