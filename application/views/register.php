<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Sertifikiasi</title>
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>bootstrap/css/shop-homepage.css"
    />
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Unit Sertifikasi Akakom</a>
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
                <a class="nav-link" href="#"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('profile') ?>">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pengumuman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login') ?>">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <p class="sign" align="center">Sign Up</p>
      <form action="<?php echo base_url('auth/post_register') ?>" method="post" accept-charset="utf-8">
        <input class="un " type="text" align="center" name="username" placeholder="first name">
        <?php echo form_error('username'); ?>
  
        <input class="pass" type="password" align="center" name="password" placeholder="Password">
        <?php echo form_error('password'); ?> 
        <button type="submit" align="center" class="submit">Sign Up</button>
      </form>

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">
            Copyright &copy; Unit Sertifikasi Akakom 2019
          </p>
        </div>
        <!-- /.container -->
      </footer>
    </div>
  </body>
</html>
