<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= session()->get('role') ?> | Kedai Kamyusi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(''); ?>/template_admin/assets/img/logo.png" style="width: fit-content;" rel="icon">
  <link href="<?= base_url(''); ?>/template_admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url(''); ?>/template_admin/https://fonts.gstatic.com" rel="preconnect">
  <link href="<?= base_url(''); ?>/template_admin/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>/template_admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Media Print -->
  <style>
    @media print{
      .logo,.rounded-circle, .toggle-sidebar-btn, .form_per{
        display: none;
        width: 30%;
      }
    }
  </style>

<style>
    @media print{
      .logo,.rounded-circle, .toggle-sidebar-btn, .print{
        margin-bottom: 225px;
      }
    }
  </style>
  <!-- Media Print -->

  <!-- Template Main CSS File -->
  <link href="<?= base_url(''); ?>/template_admin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url(''); ?>/template_admin/index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url(''); ?>/template_admin/assets/img/logo.png" style="display: block; width: 30%;" alt="" >
        <img src="<?= base_url(''); ?>/template_admin/assets/img/logo1.png" style="margin-right: -30%; display: block; width: 23%;" alt="" >
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?= base_url(''); ?>/template_admin/#" data-bs-toggle="dropdown">
            <img src="<?=base_url('assets/users/foto.jpg');?>" alt="Cinque Terre" class="rounded">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('name') ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= session()->get('name') ?></h6>
              <span>Login Sebagai <?= session()->get('role') ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url(''); ?>/owner/informasi_akun">
                <i class="bi bi-gear"></i>
                <span>Informasi Akun</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->