<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Halaman Dinas Sosial</title>
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
                  <li><a href="<?php echo base_url(); ?>index.php/pemohon/KelolaPemohonDinsos"><i class="fa fa-users"></i> Kelola Pemohon </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/penilaian/KelolaPenilaianRumah"><i class="fa fa-building-o"></i> Kelola Penilaian Rumah </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPendapatBantuan"><i class="fa fa-gift"></i> Kelola Pendapat Bantuan </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemilihan/KelolaPelaporanBantuan"><i class="fa fa-file-o"></i> Kelola Pelaporan Bantuan </a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/pemohon/KelolaUser"><i class="fa fa-user"></i> Kelola User </a></li>
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
                <h3>Lihat Penilaian</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Detail Penilaian</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">ID Penilaian<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->idPenilaian;?></label>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">NoKTP<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->noKTP;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Status Kepemilikan Tanah<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->statusKepemilikanTanah;?></label>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Penghasilan Per Bulan<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->penghasilanPerBulan;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Status Kepemilikan Rumah<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->statusKepemilikanRumah;?></label>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Pernah Mendapat Bantuan<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->pernahMendapatBantuan;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Pondasi<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiPondasi;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Sloof<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiSloof;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Tiang<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiTiang;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Balok<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiBalok;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Struktur Atap<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiStrukturAtap;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Lubang Cahaya<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->lubangCahaya;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Ventilasi<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->ventilasi;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kepemilikan Kamar Mandi<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kepemilikanKamarMandi;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Jarak Sumber Air Minum<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->jarakSumberAirMinum;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sumber Air Minum<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->sumberAirMinum;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sumber Listrik<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->sumberListrik;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Atap Terluas<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->materialAtapTerluas;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Penutup Atap<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiPenutupAtap;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Dinding Terluas<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->materialDindingTerluas;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Dinding<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiDinding;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Lantai Terluas<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->materialLantaiTerluas;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Lantai<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->kondisiLantai;?></label>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Swadaya<span
                            class="required"> :</span></label>
                            <div class="col-md-1 col-sm-6">
                        <label class="col-form-label col-md-3 col-sm-3  label-align"><?php echo $penilaian[0]->swadaya;?></label>
                      </div>
                      </div>
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
