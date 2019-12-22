<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $judul; ?></title>
  <!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/util.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/shop-homepage.css">
    <link href="<?php echo base_url(); ?>bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!--===============================================================================================-->

    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
<header>
   <div class="container">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="<?php echo site_url('welcome') ?>">Unit Sertifikasi Akakom</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('welcome') ?>"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('profil') ?>">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('kontak') ?>">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pengumuman') ?>">Pengumuman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login') ?>">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

</header>