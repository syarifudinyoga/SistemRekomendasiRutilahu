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
                <h2>Hasil Normalisasi Periode 2019 <?php //echo date('Y'); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">       
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <table id="data-normalisasi" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>No KTP</th>
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
                                <?php 
                                $no=1;
                                foreach($normalisasi as $nilai){ 
                                ?>
                                  <tr>
                                  <td><?php echo $no;?></td><?php $no++;?>    
                                    <td><?php echo $nilai->noKTP ;?></td>
                                    <td><?php echo $nilai->normalisasi_statusKepemilikanTanah;?></td>
                                    <td><?php echo $nilai->normalisasi_penghasilanPerBulan;?></td>
                                    <td><?php echo $nilai->normalisasi_statusKepemilikanRumah;?></td>
                                    <td><?php echo $nilai->normalisasi_pernahMendapatBantuan;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiPondasi;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiSloof;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiTiang;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiBalok;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiStrukturAtap;?></td>
                                    <td><?php echo $nilai->normalisasi_lubangCahaya;?></td>
                                    <td><?php echo $nilai->normalisasi_ventilasi;?></td>
                                    <td><?php echo $nilai->normalisasi_kepemilikanKamarMandi;?></td>
                                    <td><?php echo $nilai->normalisasi_jarakSumberAirMinum;?></td>
                                    <td><?php echo $nilai->normalisasi_sumberAirMinum;?></td>
                                    <td><?php echo $nilai->normalisasi_sumberListrik;?></td>
                                    <td><?php echo $nilai->normalisasi_materialAtapTerluas;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiPenutupAtap;?></td>
                                    <td><?php echo $nilai->normalisasi_materialDindingTerluas;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiDinding;?></td>
                                    <td><?php echo $nilai->normalisasi_materialLantaiTerluas;?></td>
                                    <td><?php echo $nilai->normalisasi_kondisiLantai;?></td>
                                    <td><?php echo $nilai->normalisasi_swadaya;?></td>
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
                <h2>Hasil Multi Attribute Utility Theory Periode 2019 <?php //echo date('Y'); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">       
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <table id="data-maut" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    
                                    <th>No</th>
                                    <th>No KTP</th>
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
                                    <th>Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($pemilihan as $p){ 
                                ?>
                                <tr>
                                    <td><?php echo $no;?></td><?php $no++;?>
                                    <td><?php echo $p->noKTP; ?></td>
                                    <td><?php echo $p->hasil_statusKepemilikanTanah; ?></td>
                                    <td><?php echo $p->hasil_penghasilanPerBulan; ?></td>
                                    <td><?php echo $p->hasil_statusKepemilikanRumah; ?></td>
                                    <td><?php echo $p->hasil_pernahMendapatBantuan; ?></td>
                                    <td><?php echo $p->hasil_kondisiPondasi; ?></td>
                                    <td><?php echo $p->hasil_kondisiSloof; ?></td>
                                    <td><?php echo $p->hasil_kondisiTiang; ?></td>
                                    <td><?php echo $p->hasil_kondisiBalok; ?></td>
                                    <td><?php echo $p->hasil_kondisiStrukturAtap; ?></td>
                                    <td><?php echo $p->hasil_lubangCahaya; ?></td>
                                    <td><?php echo $p->hasil_ventilasi; ?></td>
                                    <td><?php echo $p->hasil_kepemilikanKamarMandi; ?></td>
                                    <td><?php echo $p->hasil_jarakSumberAirMinum; ?></td>
                                    <td><?php echo $p->hasil_sumberAirMinum; ?></td>
                                    <td><?php echo $p->hasil_sumberListrik; ?></td>
                                    <td><?php echo $p->hasil_materialAtapTerluas; ?></td>
                                    <td><?php echo $p->hasil_kondisiPenutupAtap; ?></td>
                                    <td><?php echo $p->hasil_materialDindingTerluas; ?></td>
                                    <td><?php echo $p->hasil_kondisiDinding; ?></td>
                                    <td><?php echo $p->hasil_materialLantaiTerluas; ?></td>
                                    <td><?php echo $p->hasil_kondisiLantai; ?></td>
                                    <td><?php echo $p->hasil_swadaya; ?></td>
                                    <td><?php echo $p->nilaiAkhir; ?></td>
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
                <h2>Pilih Rekomendasi Masyarakat Bantuan Rumah Tidak Layak Huni Periode 2019 <?php //echo date('Y'); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <table id="data-rekomendasi" class="table table-striped table-bordered" style="width:100%">
                            <div id="notifications"><?php echo $this->session->flashdata('rek'); ?></div>
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>No KTP</th>
                                    <th>Nama Pemohon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Nilai Akhir</th>
                                    <th>Status Rekomendasi</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($rekomendasi as $r){ 
                                ?>
                                <tr>
                                  <td><?php echo $no;?></td><?php $no++;?>
                                    <td><?php echo $r->noKTP; ?></td>
                                    <td><?php echo $r->namaPemohon; ?></td>
                                    <td><?php echo $r->jenisKelamin; ?></td>
                                    <td><?php echo $r->alamat; ?></td>
                                    <td><?php echo $r->kecamatan; ?></td>
                                    <td><?php echo $r->nilaiAkhir; ?></td>
                                    <td><?php echo $r->statusRekomendasi; ?></td>                                    
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                          <form method="POST" action="<?php echo base_url(); ?>index.php/pemilihan/pilihRekomendasiPendapatBantuan">
                                            <input type="hidden" name="idPemilihan" value="<?php echo $r->idPemilihan; ?>">
                                            <input type="image" src="<?php echo base_url('assets/gambar/approve.png');?>" style="width:20px"; onclick="return confirm('Yakin merekomendasikan penerima bantuan ?')">
                                          </form>
                                        </div>
                                        <div class="col">
                                        <form method="POST" action="<?php echo base_url(); ?>index.php/pemilihan/lihatDetailPendapatBantuan">
                                          <input type="hidden" name="idPemilihan" value="<?php echo $r->idPemilihan; ?>">
                                          <input type="image" src="<?php echo base_url('assets/gambar/lihat.png');?>" style="width:18px";>
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
                <h2>Pilih Penerima Bantuan Sumber Bantuan Dinas Sosial Periode 2019 <?php //echo date('Y'); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row-sm-12">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <table id="data-pilih-rekomendasi" class="table table-striped table-bordered" style="width:100%">
                            <div id="notifications"><?php echo $this->session->flashdata('pil'); ?></div>
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>No KTP</th>
                                    <th>Nama Pemohon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Nilai Akhir</th>
                                    <th>Pemberi Bantuan</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($pilih as $p){ 
                                ?>
                                <tr>
                                  <td><?php echo $no;?></td><?php $no++;?>
                                    <td><?php echo $p->noKTP; ?></td>
                                    <td><?php echo $p->namaPemohon; ?></td>
                                    <td><?php echo $p->jenisKelamin; ?></td>
                                    <td><?php echo $p->alamat; ?></td>
                                    <td><?php echo $p->kecamatan; ?></td>
                                    <td><?php echo $p->nilaiAkhir; ?></td>
                                    <td><?php echo $p->pemberiBantuan; ?></td>                                    
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                          <form method="POST" action="<?php echo base_url(); ?>index.php/pemilihan/pilihRekomendasiPendapatDinsos">
                                            <input type="hidden" name="idPemilihan" value="<?php echo $p->idPemilihan; ?>">
                                            <input type="image" src="<?php echo base_url('assets/gambar/approve.png');?>" style="width:20px"; onclick="return confirm('Yakin memilih penerima bantuan ?')">
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
    <!-- Datatables -->
    <script>
    $(document).ready(function(){
      $('#data-rekomendasi').DataTable();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('#data-maut').DataTable();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('#data-normalisasi').DataTable();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('#data-pilih-rekomendasi').DataTable();
    });
    </script>
  </body>
</html>
