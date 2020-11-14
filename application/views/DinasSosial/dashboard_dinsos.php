<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Halaman Dinsos</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('assets/vendors/jqvmap/dist/jqvmap.min.css');?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css');?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/jquery.dataTables.min.css');?>">
    <!-- Chart.js -->
    <script src="<?php echo base_url('vendors/chart.js/dist/Chart.js');?>"></script>
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css');?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url(); ?>index.php/user/DinasSosial" class="site_title"><img src="<?php echo base_url('assets/gambar/smd.gif');?>" width="50px"></i> <img src="<?php echo base_url('assets/gambar/dinsos.png');?>" width="155px"></a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <hr color="white">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>index.php/pemohon/KelolaPemohonDinsos"><i class="fa fa-users"></i> Kelola Pemohon </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/penilaian/KelolaPenilaianRumah"><i class="fa fa-building-o"></i> Kelola Penilaian Rumah </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPendapatBantuan"><i class="fa fa-gift"></i> Kelola Pendapat Bantuan </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPelaporanBantuan"><i class="fa fa-file-o"></i> Kelola Pelaporan Bantuan </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemohon/KelolaUser"><i class="fa fa-user"></i> Kelola User </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $this->session->userdata('nama');?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item"  href="<?php echo site_url('user/logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
              <h2>Dashboard Dinas Sosial</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
              <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <div class="row-sm-12">
              <!-- Isi Konten Disini -->
                <!-- Kolom Card Box-->
                <div class="col-sm-3 col-sm-3">
                  <div class="card"><center>
                    <div class="card-body">
                    <i class="fa fa-users fa-5x"></i>
                    <h4><b><br>Pemohon Bantuan</b></h4>
                    <h3><b><?php echo $jumlahPemohon; ?></b></h3>
                    </div>
                    <div class="card-footer ">
                    <a href="<?php echo base_url(); ?>index.php/pemohon/KelolaPemohonDinsos">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>          
                <!-- Akhir Card -->
                <!-- Kolom Card Box-->
                <div class="col-sm-3 col-sm-3">
                  <div class="card"><center>
                    <div class="card-body">
                    <i class="fa fa-building fa-5x"></i>
                    <h4><b><br>Penilaian Rumah Belum Dilaksanakan</b></h4>
                    <h3><b><?php echo $jumlahPenilaian; ?></b></h3>
                    </div>
                    <div class="card-footer ">
                    <a href="<?php echo base_url(); ?>index.php/penilaian/KelolaPenilaianRumah">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>          
                <!-- Akhir Card -->
                <!-- Kolom Card Box-->
                <div class="col-sm-3 col-sm-3">
                  <div class="card"><center>
                    <div class="card-body">
                    <i class="fa fa-gift fa-5x"></i>
                    <h4><b><br>Penerima Bantuan DINSOS</b></h4>
                    <h3><b><?php echo $jumlahPenerimaBantuanDinsos; ?></b></h3>
                    </div>
                    <div class="card-footer ">
                    <a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPendapatBantuan">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>          
                <!-- Akhir Card -->
                <!-- Kolom Card Box-->
                <div class="col-sm-3 col-sm-3">
                  <div class="card"><center>
                    <div class="card-body">
                    <i class="fa fa-user fa-5x"></i>
                    <h4><b><br>User Sistem</b></h4>
                    <h3><b><?php echo $jumlahUser; ?></b></h3>
                    </div>
                    <div class="card-footer ">
                    <a href="<?php echo base_url(); ?>index.php/pemohon/KelolaUser">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>          
                <!-- Akhir Card -->
              </div>
            </div>
          </div>
          <div class="x_panel">
            <div class="x_title">
              <h2>Grafik Sistem Rekomendasi Rumah Tidak Layak Huni Kabupaten Sumedang</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">    
                  </div>
                  </div>
                  <div class="x_content">
                  <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-2"></div>
                      <div class="col-md-7">
                        <h4><center>Statistik Pemohon Bantuan Tahun 2019<?php //echo date('Y');?></center></h4><br>
                        <div style="width:100%;height: 20%">
		                    <canvas id="pemohonBantuan"></canvas>
    	                </div>
                      </div>
                  </div>
                  </div>
                  <?php
                  //Inisialisasi nilai variabel awal
                  $kecamatan= "";
                  $jumlah=null;
                  foreach ($chart as $hasil)
                  {
                      $kec=$hasil->kecamatan;
                      $kecamatan .= "'$kec'". ", ";
                      $jum=$hasil->total;
                      $jumlah .= "$jum". ", ";
                  }
                  ?>
                  <script>
                    var ctx = document.getElementById("pemohonBantuan").getContext('2d');
                      var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                          labels: [
                            <?php echo $kecamatan;?>
                          ],
                          datasets: [{
                            label: 'Pemohon Bantuan' ,
                            data: [
                              <?php echo $jumlah; ?>
                            ],
                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            ],
                            borderColor: [
                              'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            ],
                            borderWidth: 3
                          }]
                        },
                        options: {
                          scales: {
                            yAxes: [{
                              ticks: {
                                beginAtZero:true
                              }
                            }]
                          }
                        }
                      });
                    </script>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <p>Dinas Sosial Kabupaten Sumedang</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js');?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js');?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('vendors/chart.js/dist/Chart.bundle.min.js');?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('assets/vendors/gauge.js/dist/gauge.min.js');?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js');?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js');?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('assets/vendors/skycons/skycons.js');?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.time.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.stack.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.resize.js');?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js');?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets/vendors/DateJS/build/date.js');?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js');?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js');?>"></script>
  </body>
</html>
