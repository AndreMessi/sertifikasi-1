<!doctype html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/vendor/chartist/css/chartist-custom.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html">UNIT SERTIFIKASI</a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>bootstrap/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('index.php/welcome/index'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="<?php echo site_url('dashboard') ?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Pengumuman</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="<?php echo site_url('jadwal') ?>" class="">Jadwal</a></li>
                  <li><a href="<?php echo site_url('tampilpengumuman') ?>" class="">Pengumuan</a></li>
                </ul>
              </div>
            </li></a></li>
            <li><a href="<?php echo site_url('daftarsertifikasi'); ?>" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Sertifikasi</span></a></li>
            <li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
              <div class="container">
                   <div class="panel-body col-md-10">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Sertifikasi</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">No Hp</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no=1; 
                          foreach ($data as $isi) { ?>
                          <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $isi['nim_mhs'];?></td>
                            <td><?php echo $isi['nama_mhs'];?></td>
                            <td><?php echo $isi['prodi'];?></td>
                            <td><?php echo $isi['sertifikasi'];?></td>
                            <td><?php echo $isi['tgl_lahir'];?></td>
                            <td><?php echo $isi['nohp'];?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </div>
            
      </div>
      <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2019 STMIK AKAKOM YOGYAKARTA</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="<?php echo base_url(); ?>bootstrap/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/assets/vendor/chartist/js/chartist.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/assets/scripts/klorofil-common.js"></script>
  <script>
  $(function() {
    var data, options;

    // headline charts
    data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      series: [
        [23, 29, 24, 40, 25, 24, 35],
        [14, 25, 18, 34, 29, 38, 44],
      ]
    };

    options = {
      height: 300,
      showArea: true,
      showLine: false,
      showPoint: false,
      fullWidth: true,
      axisX: {
        showGrid: false
      },
      lineSmooth: false,
    };

    new Chartist.Line('#headline-chart', data, options);


    // visits trend charts
    data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      series: [{
        name: 'series-real',
        data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
      }, {
        name: 'series-projection',
        data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
      }]
    };

    options = {
      fullWidth: true,
      lineSmooth: false,
      height: "270px",
      low: 0,
      high: 'auto',
      series: {
        'series-projection': {
          showArea: true,
          showPoint: false,
          showLine: false
        },
      },
      axisX: {
        showGrid: false,

      },
      axisY: {
        showGrid: false,
        onlyInteger: true,
        offset: 0,
      },
      chartPadding: {
        left: 20,
        right: 20
      }
    };

    new Chartist.Line('#visits-trends-chart', data, options);


    // visits chart
    data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      series: [
        [6384, 6342, 5437, 2764, 3958, 5068, 7654]
      ]
    };

    options = {
      height: 300,
      axisX: {
        showGrid: false
      },
    };

    new Chartist.Bar('#visits-chart', data, options);


    // real-time pie chart
    var sysLoad = $('#system-load').easyPieChart({
      size: 130,
      barColor: function(percent) {
        return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
      },
      trackColor: 'rgba(245, 245, 245, 0.8)',
      scaleColor: false,
      lineWidth: 5,
      lineCap: "square",
      animate: 800
    });

    var updateInterval = 3000; // in milliseconds

    setInterval(function() {
      var randomVal;
      randomVal = getRandomInt(0, 100);

      sysLoad.data('easyPieChart').update(randomVal);
      sysLoad.find('.percent').text(randomVal);
    }, updateInterval);

    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

  });
  </script>
</body>

</html>
