<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-danger text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-male"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_laki_laki; ?></h3>
                        <p class="text-uppercase text-secondary mb-0">Umat <br>Laki-Laki</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-info text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-female"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_perempuan; ?></h3>
                        <p class="text-uppercase text-secondary mb-0">Umat <br>Perempuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-primary text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-user"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_kk; ?></h3>
                        <p class="text-uppercase text-secondary mb-0">Kepala <br>Keluarga</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="d-flex border">
                    <div class="bg-success text-light p-4">
                        <div class="d-flex align-items-center h-100">
                            <i class="fa fa-3x fa-fw fa-users"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 bg-white p-4">
                        <h3 class="font-weight-bold mb-0"><?php echo $jumlah_umat; ?></h3>
                        <p class="text-uppercase text-secondary mb-0">Umat <br>Lingkungan</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>