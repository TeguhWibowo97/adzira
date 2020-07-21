<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul?></title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/dist/jos.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url();?>assetAdmin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"> <?= $user['username'];?>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item">Setting <i class="fas fa-cog float-right"></i></span>         
          <a href="<?= base_url() ;?>c_login/logout"><span class="dropdown-item">Log Out <i class="fas fa-sign-out-alt float-right"></i></span></a>         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="<?= base_url();?>" class="brand-link">
      <img src="<?= base_url();?>assetAdmin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">ADZIRA PRIVATE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar froge">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>c_home" class="nav-link <?= $aktifdashboard;?>">
              <i class="nav-icon fas fa-home"></i>              
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>c_siswa" class="nav-link <?= $aktifsiswa;?>">
              <i class="nav-icon fas fa-user"></i>              
              <p>Data Siswa</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url();?>c_tentor" class="nav-link <?= $aktiftentor;?>">
              <i class="nav-icon fas fa-user-graduate"></i>              
              <p>Data Tentor</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $aktifjadwal;?>">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Jadwal Les
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url();?>c_jadwal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siswa</p>                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>c_jadwal/index2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tentor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $aktifkeuangan;?>">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ;?>c_keuangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gaji Tentor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ;?>c_keuangan/tagihan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tagihan Orang Tua</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url() ;?>c_absensi" class="nav-link <?= $aktifabsensi;?>">
              <i class="nav-icon fas fa-user-edit"></i>              
              <p> Absensi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
