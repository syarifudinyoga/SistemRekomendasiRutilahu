<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Halaman Kementrian</title>
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
            <!-- Menu Samping -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <hr color="white">
                <ul class="nav side-menu">
                <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPendapatBantuanKementrianPUPR"><i class="fa fa-home"></i> Kelola Pendapat Bantuan </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPelaporanBantuanKementrianPUPR"><i class="fa fa-home"></i> Kelola Pelaporan Bantuan </a></li>
                </ul>
              </div>
            </div>
            <!-- /Menu Samping -->
          </div>
        </div>
        <!-- Navigasi Atas -->
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
        <!-- /Navigasi Atas -->
        <!-- Konten Utama -->
        <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Form Cetak Laporan</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cetak Laporan Penerima Bantuan Rumah Tidak Layak Huni Selama Satu Periode</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form action="<?php echo base_url(); ?>index.php/pemilihan/cetakLaporanKementrianPUPR" method="post" target="_BLANK">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Pilih Periode<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <select name="periode" class="form-control" required>
                            <option value="" hidden>-- Pilih Periode --</option>
                            <?php
                              //Inisialisasi nilai variabel awal
                              $periode= "";
                              foreach ($tahun as $hasil)
                              {
                                  $th=$hasil->periode;
                                  $periode = "$th";
                                echo "<option value='".$periode."'>".$periode."</option>";
                              }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <button type='submit' class="btn btn-primary">Submit</button>
                          <button type='reset' class="btn btn-success">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /Konten Utama -->
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
    <script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js');?>"></script>
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
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jszip/dist/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js');?>"></script>
  </body>
</html>
