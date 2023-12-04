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

    <title><?php echo $title_page; ?> - Sistem Informasi Pringgolayan</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
        <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">Sistem Informasi Pringgolayan</a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nama_user; ?> (<?php echo $level_user; ?>)</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                        <a href="<?php echo base_url('logout'); ?>" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-dark">
            <ul class="list-unstyled">
                <li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                  </a>
                </li>
                <?php if ($this->session->userdata('level')=='administrator') { ?>
                <li class="nav-item <?php if($this->uri->segment(1)=="pengguna"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('pengguna'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pengguna</span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="inventaris"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('inventaris'); ?>">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Inventaris</span>
                  </a>
                </li>
                <?php } ?>
                <li class="nav-item <?php if($this->uri->segment(1)=="umat"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('umat'); ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Umat</span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="lingkungan"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('lingkungan'); ?>">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Data Lingkungan</span>
                  </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(1)=="wilayah"){echo "active";}?>">
                  <a class="nav-link" href="<?php echo base_url('wilayah'); ?>">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span>Data Wilayah</span>
                  </a>
                </li>
            </ul>
        </div>