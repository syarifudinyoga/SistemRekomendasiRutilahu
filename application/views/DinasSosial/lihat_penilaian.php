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
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Tambah Penilaian Rumah Pemohon Bantuan RUTILAHU</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="data-tambah-nilai" class="table table-striped table-bordered" style="width:100%">
                            <div id="notifications"><?php echo $this->session->flashdata('tpn'); ?></div>
                            <thead>
                              <tr>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Status Kepemilikan Tanah</th>
                                <th>Penghasilan Per Bulan</th>
                                <th>Status Kepemilikan Rumah</th>
                                <th>Pernah Mendapat Bantuan</th>
                                <th>Kondisi Pondasi</th>
                                <th>Kondisi Sloof</th>
                                <th>Kondisi Tiang</th>
                                <th>Kondisi Balok</th>
                                <th>Kondisi Struktur Atap</th>
                                <th>Lubang Cahaya</th>
                                <th>Ventilasi</th>
                                <th>Kepemilikan Kamar Mandi</th>
                                <th>Jarak Sumber Air Minum</th>
                                <th>Sumber Air Minum</th>
                                <th>Sumber Listrik</th>
                                <th>Material Atap Terluas</th>
                                <th>Kondisi Penutup Atap</th>
                                <th>Material Dinding Terluas</th>
                                <th>Kondisi Dinding</th>
                                <th>Material Lantai Terluas</th>
                                <th>Kondisi Lantai</th>
                                <th>Swadaya</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>                                
                            <tbody>
                            <?php foreach($tambah_penilaian as $p){ ?>
                              <tr>      
                                <td><?php echo $p->noKTP; ?></td>
                                <td><?php echo $p->namaPemohon; ?></td>
                                <td><?php echo $p->statusKepemilikanTanah; ?></td>
                                <td><?php echo $p->penghasilanPerBulan; ?></td>
                                <td><?php echo $p->statusKepemilikanRumah; ?></td>
                                <td><?php echo $p->pernahMendapatBantuan; ?></td>
                                <td><?php echo $p->kondisiPondasi; ?></td>
                                <td><?php echo $p->kondisiSloof; ?></td>
                                <td><?php echo $p->kondisiTiang; ?></td>
                                <td><?php echo $p->kondisiBalok; ?></td>
                                <td><?php echo $p->kondisiStrukturAtap; ?></td>
                                <td><?php echo $p->lubangCahaya; ?></td>
                                <td><?php echo $p->ventilasi; ?></td>
                                <td><?php echo $p->kepemilikanKamarMandi; ?></td>
                                <td><?php echo $p->jarakSumberAirMinum; ?></td>
                                <td><?php echo $p->sumberAirMinum; ?></td>
                                <td><?php echo $p->sumberListrik; ?></td>
                                <td><?php echo $p->materialAtapTerluas; ?></td>
                                <td><?php echo $p->kondisiPenutupAtap; ?></td>
                                <td><?php echo $p->materialDindingTerluas; ?></td>
                                <td><?php echo $p->kondisiDinding; ?></td>
                                <td><?php echo $p->materialLantaiTerluas; ?></td>
                                <td><?php echo $p->kondisiLantai; ?></td>
                                <td><?php echo $p->swadaya; ?></td>
                                <td>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <form method="POST" action="<?php echo base_url(); ?>index.php/penilaian/formTambahPenilaian">
                                        <input type="hidden" name="idPenilaian" value="<?php echo $p->idPenilaian; ?>">
                                        <input type="image" src="<?php echo base_url('assets/gambar/edit.png');?>" style="width:20px";>
                                      </form>
                                    </div>    
                                  </div>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>    
                          </table>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="x_panel">
              <div class="x_title">
                <h2>Hitung Penilaian Rumah Pemohon Bantuan RUTILAHU</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="data-hitung-nilai" class="table table-striped table-bordered" style="width:100%">
                            <div id="notifications"><?php echo $this->session->flashdata('hhm'); ?></div>
                            <thead>
                                    <tr>                  
                                    <th>No KTP</th>
                                    <th>Nama</th>
                                    <th>Status Kepemilikan Tanah</th>
                                    <th>Penghasilan Per Bulan</th>
                                    <th>Status Kepemilikan Rumah</th>
                                    <th>Pernah Mendapat Bantuan</th>
                                    <th>Kondisi Pondasi</th>
                                    <th>Kondisi Sloof</th>
                                    <th>Kondisi Tiang</th>
                                    <th>Kondisi Balok</th>
                                    <th>Kondisi Struktur Atap</th>
                                    <th>Lubang Cahaya</th>
                                    <th>Ventilasi</th>
                                    <th>Kepemilikan Kamar Mandi</th>
                                    <th>Jarak Sumber Air Minum</th>
                                    <th>Sumber Air Minum</th>
                                    <th>Sumber Listrik</th>
                                    <th>Material Atap Terluas</th>
                                    <th>Kondisi Penutup Atap</th>
                                    <th>Material Dinding Terluas</th>
                                    <th>Kondisi Dinding</th>
                                    <th>Material Lantai Terluas</th>
                                    <th>Kondisi Lantai</th>
                                    <th>Swadaya</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($penilaian as $p){ ?>
                                    <tr>
                                    <td><?php echo $p->noKTP; ?></td>
                                    <td><?php echo $p->namaPemohon; ?></td>
                                    <td><?php echo $p->statusKepemilikanTanah; ?></td>
                                    <td><?php echo $p->penghasilanPerBulan; ?></td>
                                    <td><?php echo $p->statusKepemilikanRumah; ?></td>
                                    <td><?php echo $p->pernahMendapatBantuan; ?></td>
                                    <td><?php echo $p->kondisiPondasi; ?></td>
                                    <td><?php echo $p->kondisiSloof; ?></td>
                                    <td><?php echo $p->kondisiTiang; ?></td>
                                    <td><?php echo $p->kondisiBalok; ?></td>
                                    <td><?php echo $p->kondisiStrukturAtap; ?></td>
                                    <td><?php echo $p->lubangCahaya; ?></td>
                                    <td><?php echo $p->ventilasi; ?></td>
                                    <td><?php echo $p->kepemilikanKamarMandi; ?></td>
                                    <td><?php echo $p->jarakSumberAirMinum; ?></td>
                                    <td><?php echo $p->sumberAirMinum; ?></td>
                                    <td><?php echo $p->sumberListrik; ?></td>
                                    <td><?php echo $p->materialAtapTerluas; ?></td>
                                    <td><?php echo $p->kondisiPenutupAtap; ?></td>
                                    <td><?php echo $p->materialDindingTerluas; ?></td>
                                    <td><?php echo $p->kondisiDinding; ?></td>
                                    <td><?php echo $p->materialLantaiTerluas; ?></td>
                                    <td><?php echo $p->kondisiLantai; ?></td>
                                    <td><?php echo $p->swadaya; ?></td>
                                    <td>
                                    <div class="row">
                                      <div class="col-sm-2">
                                        <form method="POST" action="<?php echo base_url(); ?>index.php/penilaian/lihatDetailPenilaian">
                                          <input type="hidden" name="idPenilaian" value="<?php echo $p->idPenilaian; ?>">
                                          <input type="image" src="<?php echo base_url('assets/gambar/lihat.png');?>" style="width:20px";>
                                        </form>
                                      </div>    
                                    </div>
                                  </td>
                                    </tr>
                                    <?php } ?>
                                    <strong class="card-title"><a class="btn btn-success" href="<?php echo base_url(); ?>index.php/maut/formHitungMautKeseluruhan">Hitung Penilaian Rumah</a></strong>
                                    <br>
                                    <?php 
                                      $time_start = microtime(true); //waktu mulai
                                      sleep(1);
                                      $time_end = microtime(true); //waktu akhir
                                      $time = $time_end-$time_start;
                                      echo "<b>Kecepatan Compile : {$time} detik";
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="x_panel">
              <div class="x_title">
                <h2>Bobot, Nilai Minimum, Nilai Maksimum</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="card-box table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status Kepemilikan Tanah</th>
                                    <th>Penghasilan Per Bulan</th>
                                    <th>Status Kepemilikan Rumah</th>
                                    <th>Pernah Mendapat Bantuan</th>
                                    <th>Kondisi Pondasi</th>
                                    <th>Kondisi Sloof</th>
                                    <th>Kondisi Tiang</th>
                                    <th>Kondisi Balok</th>
                                    <th>Kondisi Struktur Atap</th>
                                    <th>Lubang Cahaya</th>
                                    <th>Ventilasi</th>
                                    <th>Kepemilikan Kamar Mandi</th>
                                    <th>Jarak Sumber Air Minum</th>
                                    <th>Sumber Air Minum</th>
                                    <th>Sumber Listrik</th>
                                    <th>Material Atap Terluar</th>
                                    <th>Kondisi Penutup Atap</th>
                                    <th>Material Dinding Terluar</th>
                                    <th>Kondisi Dinding</th>
                                    <th>Material Lantai Terluar</th>
                                    <th>Kondisi Lantai</th>
                                    <th>Swadaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($bobot as $b){ ?>
                                  <tr>
                                    <td><?php echo $b->idBobot; ?></td>
                                    <td>Bobot</td>
                                    <td><?php echo $b->bobot_statusKepemilikanTanah; ?></td>
                                    <td><?php echo $b->bobot_penghasilanPerBulan; ?></td>
                                    <td><?php echo $b->bobot_statusKepemilikanRumah; ?></td>
                                    <td><?php echo $b->bobot_pernahMendapatBantuan; ?></td>
                                    <td><?php echo $b->bobot_kondisiPondasi; ?></td>
                                    <td><?php echo $b->bobot_kondisiSloof; ?></td>
                                    <td><?php echo $b->bobot_kondisiTiang; ?></td>
                                    <td><?php echo $b->bobot_kondisiBalok; ?></td>
                                    <td><?php echo $b->bobot_kondisiStrukturAtap; ?></td>
                                    <td><?php echo $b->bobot_lubangCahaya; ?></td>
                                    <td><?php echo $b->bobot_ventilasi; ?></td>
                                    <td><?php echo $b->bobot_kepemilikanKamarMandi; ?></td>
                                    <td><?php echo $b->bobot_jarakSumberAirMinum; ?></td>
                                    <td><?php echo $b->bobot_sumberAirMinum; ?></td>
                                    <td><?php echo $b->bobot_sumberListrik; ?></td>
                                    <td><?php echo $b->bobot_materialAtapTerluas; ?></td>
                                    <td><?php echo $b->bobot_kondisiPenutupAtap; ?></td>
                                    <td><?php echo $b->bobot_materialDindingTerluas; ?></td>
                                    <td><?php echo $b->bobot_kondisiDinding; ?></td>
                                    <td><?php echo $b->bobot_materialLantaiTerluas; ?></td>
                                    <td><?php echo $b->bobot_kondisiLantai; ?></td>
                                    <td><?php echo $b->bobot_swadaya; ?></td>
                                    <?php } ?>
                                  </tr>
                                  <!-- Looping Nilai Max-->
                                <tbody>
                                <?php foreach($max as $max){ ?>
                                  <tr>
                                    <td>2</td>
                                    <td>Max</td>
                                    <td><?php echo $max->statusKepemilikanTanah ; ?></td><br>
                                    <td><?php echo $max->penghasilanPerBulan; ?></td>
                                    <td><?php echo $max->statusKepemilikanRumah; ?></td>
                                    <td><?php echo $max->pernahMendapatBantuan; ?></td>
                                    <td><?php echo $max->kondisiPondasi; ?></td>
                                    <td><?php echo $max->kondisiSloof; ?></td>
                                    <td><?php echo $max->kondisiTiang; ?></td>
                                    <td><?php echo $max->kondisiBalok; ?></td>
                                    <td><?php echo $max->kondisiStrukturAtap; ?></td>
                                    <td><?php echo $max->lubangCahaya; ?></td>
                                    <td><?php echo $max->ventilasi; ?></td>
                                    <td><?php echo $max->kepemilikanKamarMandi; ?></td>
                                    <td><?php echo $max->jarakSumberAirMinum; ?></td>
                                    <td><?php echo $max->sumberAirMinum; ?></td>
                                    <td><?php echo $max->sumberListrik; ?></td>
                                    <td><?php echo $max->materialAtapTerluas; ?></td>
                                    <td><?php echo $max->kondisiPenutupAtap; ?></td>
                                    <td><?php echo $max->materialDindingTerluas; ?></td>
                                    <td><?php echo $max->kondisiDinding; ?></td>
                                    <td><?php echo $max->materialLantaiTerluas; ?></td>
                                    <td><?php echo $max->kondisiLantai; ?></td>
                                    <td><?php echo $max->swadaya; ?></td>
                                    <?php } ?>
                                  </tr>
                                  <!-- Looping Nilai Max-->
                                <tbody>
                                <?php foreach($min as $min){ ?>
                                  <tr>
                                    <td>3</td>
                                    <td>Min</td>
                                    <td><?php echo $min->statusKepemilikanTanah ; ?></td><br>
                                    <td><?php echo $min->penghasilanPerBulan; ?></td>
                                    <td><?php echo $min->statusKepemilikanRumah; ?></td>
                                    <td><?php echo $min->pernahMendapatBantuan; ?></td>
                                    <td><?php echo $min->kondisiPondasi; ?></td>
                                    <td><?php echo $min->kondisiSloof; ?></td>
                                    <td><?php echo $min->kondisiTiang; ?></td>
                                    <td><?php echo $min->kondisiBalok; ?></td>
                                    <td><?php echo $min->kondisiStrukturAtap; ?></td>
                                    <td><?php echo $min->lubangCahaya; ?></td>
                                    <td><?php echo $min->ventilasi; ?></td>
                                    <td><?php echo $min->kepemilikanKamarMandi; ?></td>
                                    <td><?php echo $min->jarakSumberAirMinum; ?></td>
                                    <td><?php echo $min->sumberAirMinum; ?></td>
                                    <td><?php echo $min->sumberListrik; ?></td>
                                    <td><?php echo $min->materialAtapTerluas; ?></td>
                                    <td><?php echo $min->kondisiPenutupAtap; ?></td>
                                    <td><?php echo $min->materialDindingTerluas; ?></td>
                                    <td><?php echo $min->kondisiDinding; ?></td>
                                    <td><?php echo $min->materialLantaiTerluas; ?></td>
                                    <td><?php echo $min->kondisiLantai; ?></td>
                                    <td><?php echo $min->swadaya; ?></td>
                                    <?php } ?>
                                  </tr>
                                </tbody>
                                </table>
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
    <script>
    $(document).ready(function(){
      $('#data-tambah-nilai').DataTable();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('#data-hitung-nilai').DataTable();
    });
    </script>
  </body>
</html>
