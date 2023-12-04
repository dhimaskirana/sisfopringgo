<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/fullcalendar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootadmin.min.css'); ?>">

    <title>Login - Sistem Informasi Pringgolayan</title>
</head>
<body class="bg-light">

        <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <h1 class="text-center mb-4">Sistem Informasi Pringgolayan</h1>
                <div class="card">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('login_error'); ?>
                        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="row">
                                <div class="col pr-2">
                                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                                </div>
                                <!-- <div class="col pl-2">
                                    <a class="btn btn-block btn-info" href="#">Forgot Password</a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <span>2018 &copy; Sistem Informasi Pringgolayan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="<?php echo base_url('bootadmin/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/fullcalendar.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootadmin.min.js'); ?>"></script>
</body>
</html>