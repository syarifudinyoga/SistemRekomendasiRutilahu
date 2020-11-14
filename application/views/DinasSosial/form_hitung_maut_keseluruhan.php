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
                <h3>Form Hitung Kriteria</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <form action="<?php echo base_url(); ?>index.php/maut/hitungMautKeseluruhan" method="post">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <button type='submit' class="btn btn-primary">Hitung Multi Attribute Utility Theory</button>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <div class="ln_solid">
                      <div class="field item form-group">
                          
                        </div>
                      </div>
                      <div class="field item form-group">
                      </div>
                    <?php foreach($hitung_maut as $maut){ ?>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">ID Penilaian<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="idPenilaian[]" type="hidden" value="<?php echo $maut->idPenilaian;?>" required />
                          <input class="form-control" name="idPenilaian[]" type="number" value="<?php echo $maut->idPenilaian;?>" disabled />
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">NoKTP<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="noKTP[]" type="hidden" value="<?php echo $maut->noKTP;?>"/>
                          <input class="form-control" name="noKTP[]" type="text" value="<?php echo $maut->noKTP;?>" disabled/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Status Kepemilikan Tanah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="statusKepemilikanTanah[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->statusKepemilikanTanah;?>" required/>
                          <input class="form-control" placeholder="Masukkan No KTP" type="number" value="<?php echo $maut->statusKepemilikanTanah;?>"/>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Penghasilan Per Bulan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="penghasilanPerBulan[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->penghasilanPerBulan;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->penghasilanPerBulan;?>" required/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Status Kepemilikan Rumah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="statusKepemilikanRumah[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->statusKepemilikanRumah;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->statusKepemilikanRumah;?>"/>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Pernah Mendapat Bantuan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="pernahMendapatBantuan[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->pernahMendapatBantuan;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->pernahMendapatBantuan;?>" required/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Pondasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiPondasi[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiPondasi;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiPondasi;?>" required/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Sloof<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiSloof[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiSloof;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiSloof;?>" required/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Tiang<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiTiang[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiTiang;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiTiang;?>" required/>
                      </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Balok<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiBalok[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiBalok;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiBalok;?>" required/>
                      </div>
                      </div>
                      
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Struktur Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiStrukturAtap[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiStrukturAtap;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiStrukturAtap;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Lubang Cahaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="lubangCahaya[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->lubangCahaya;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->lubangCahaya;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Ventilasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="ventilasi[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->ventilasi;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->ventilasi;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kepemilikan Kamar Mandi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kepemilikanKamarMandi[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kepemilikanKamarMandi;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kepemilikanKamarMandi;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Jarak Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="jarakSumberAirMinum[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->jarakSumberAirMinum;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->jarakSumberAirMinum;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="sumberAirMinum[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->sumberAirMinum;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->sumberAirMinum;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="sumberListrik[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->sumberListrik;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->sumberListrik;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Atap Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="materialAtapTerluas[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->materialAtapTerluas;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->materialAtapTerluas;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Penutup Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiPenutupAtap[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiPenutupAtap;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiPenutupAtap;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Dinding Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="materialDindingTerluas[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->materialDindingTerluas;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->materialDindingTerluas;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Dinding<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiDinding[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiDinding;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiDinding;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Material Lantai Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="materialLantaiTerluas[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->materialLantaiTerluas;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->materialLantaiTerluas;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kondisi Lantai<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="kondisiLantai[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->kondisiLantai;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->kondisiLantai;?>" required/>
                      </div>
                      </div>

                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Swadaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="swadaya[]" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maut->swadaya;?>" required/>
                          <input class="form-control" placeholder="Masukkan Nilai" type="number" value="<?php echo $maut->swadaya;?>" required/>
                      </div>
                      </div>
                      <hr color="black">
                    <?php }?>
                      <!-- -----------------------------------------------------------------------------Nilai Max -->
                      <h2>Nilai Max</h2>
                      <hr>

                      <?php foreach($max as $maxskp){ ?>
                      <?php $maxskp=$maxskp->statusKepemilikanTanah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Status Kepemilikan Tanah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxstatusKepemilikanTanah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxskp ;?>" required/>
                          <input class="form-control" name="maxstatusKepemilikanTanah" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxskp;?>" required Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      
                      <?php foreach($max as $maxppb){ ?>
                      <?php $maxppb=$maxppb->penghasilanPerBulan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Penghasilan Per Bulan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxpenghasilanPerBulan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxppb ;?>" required/>
                          <input class="form-control" name="maxpenghasilanPerBulan" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxppb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxskr){ ?>
                          <?php $maxskr=$maxskr->statusKepemilikanRumah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Status Kepemilikan Rumah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxstatusKepemilikanRumah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxskr ;?>" required/>
                          <input class="form-control" name="maxstatusKepemilikanRumah" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxskr;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxpmb){ ?>
                          <?php $maxpmb=$maxpmb->pernahMendapatBantuan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Pernah Mendapat Bantuan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxpernahMendapatBantuan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxpmb ;?>" required/>
                          <input class="form-control" name="maxpernahMendapatBantuan" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxpmb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkp){ ?>
                          <?php $maxkp=$maxkp->kondisiPondasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Pondasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiPondasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkp ;?>" required/>
                          <input class="form-control" name="maxkondisiPondasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkp;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxks){ ?>
                          <?php $maxks=$maxks->kondisiSloof ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Sloof<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiSloof" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxks ;?>" required/>
                          <input class="form-control" name="maxkondisiSloof" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxks;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkt){ ?>
                          <?php $maxkt=$maxkt->kondisiTiang; ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Tiang<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiTiang" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkt ;?>" required/>
                          <input class="form-control" name="maxkondisiTiang" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkb){ ?>
                          <?php $maxkb=$maxkb->kondisiBalok ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Balok<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiBalok" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkb ;?>" required/>
                          <input class="form-control" name="maxkondisiBalok" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxksa){ ?>
                          <?php $maxksa=$maxksa->kondisiStrukturAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Struktur Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiStrukturAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxksa ;?>" required/>
                          <input class="form-control" name="maxkondisiStrukturAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxksa;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxlc){ ?>
                          <?php $maxlc=$maxlc->lubangCahaya ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Lubang Cahaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxlubangCahaya" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxlc ;?>" required/>
                          <input class="form-control" name="maxlubangCahaya" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxlc;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxv){ ?>
                          <?php $maxv=$maxv->ventilasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Ventilasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxventilasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxv ;?>" required/>
                          <input class="form-control" name="maxventilasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxv;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkkm){ ?>
                          <?php $maxkkm=$maxkkm->kepemilikanKamarMandi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kepemilikan Kamar Mandi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkepemilikanKamarMandi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkkm ;?>" required/>
                          <input class="form-control" name="maxkepemilikanKamarMandi" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkkm;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxjsam){ ?>
                          <?php $maxjsam=$maxjsam->jarakSumberAirMinum ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Jarak Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxjarakSumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxjsam ;?>" required/>
                          <input class="form-control" name="maxjarakSumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxjsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxsam){ ?>
                          <?php $maxsam=$maxsam->sumberAirMinum; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxsumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxsam ;?>" required/>
                          <input class="form-control" name="maxsumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxsl){ ?>
                          <?php $maxsl=$maxsl->sumberListrik ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxsumberListrik" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxsl ;?>" required/>
                          <input class="form-control" name="maxsumberListrik" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxsl;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxmat){ ?>
                          <?php $maxmat=$maxmat->materialAtapTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxmaterialAtapTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxmat ;?>" required/>
                          <input class="form-control" name="maxmaterialAtapTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxmat;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkpa){ ?>
                          <?php $maxkpa=$maxkpa->kondisiPenutupAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Penutup Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiPenutupAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkpa ;?>" required/>
                          <input class="form-control" name="maxkondisiPenutupAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkpa;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxmdt){ ?>
                          <?php $maxmdt=$maxmdt->materialDindingTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Material Dinding Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxmaterialDindingTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxmdt ;?>" required/>
                          <input class="form-control" name="maxmaterialDindingTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxmdt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($max as $maxkd){ ?>
                          <?php $maxkd=$maxkd->kondisiDinding ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Dinding<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiDinding" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkd ;?>" required/>
                          <input class="form-control" name="maxkondisiDinding" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkd;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      
                      <?php foreach($max as $maxmlt){ ?>
                          <?php $maxmlt=$maxmlt->materialLantaiTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Material Lantai Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxmaterialLantaiTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxmlt ;?>" required/>
                          <input class="form-control" name="maxmaterialLantaiTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxmlt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      
                      <?php foreach($max as $maxkl){ ?>
                          <?php $maxkl=$maxkl->kondisiLantai ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Kondisi Lantai<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxkondisiLantai" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxkl ;?>" required/>
                          <input class="form-control" name="maxkondisiLantai" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxkl;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      
                      <?php foreach($max as $maxs){ ?>
                          <?php $maxs=$maxs->swadaya ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Max Swadaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="maxswadaya" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $maxs ;?>" required/>
                          <input class="form-control" name="maxswadaya" placeholder="Masukkan Nilai" type="text" value="<?php echo $maxs;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <!-- -----------------------------------------------------------------------------Nilai min -->
                      <h2>Nilai Min</h2>
                      <hr>

                      <?php foreach($min as $minskp){ ?>
                      <?php $minskp=$minskp->statusKepemilikanTanah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Status Kepemilikan Tanah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minstatusKepemilikanTanah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minskp ;?>"/>
                          <input class="form-control" name="minstatusKepemilikanTanah" placeholder="Masukkan Nilai" type="text" value="<?php echo $minskp;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      
                      <?php foreach($min as $minppb){ ?>
                      <?php $minppb=$minppb->penghasilanPerBulan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Penghasilan Per Bulan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minpenghasilanPerBulan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minppb ;?>"/>
                          <input class="form-control" name="minpenghasilanPerBulan" placeholder="Masukkan Nilai" type="text" value="<?php echo $minppb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($min as $minskr){ ?>
                          <?php $minskr=$minskr->statusKepemilikanRumah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Status Kepemilikan Rumah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minstatusKepemilikanRumah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minskr ;?>"/>
                          <input class="form-control" name="minstatusKepemilikanRumah" placeholder="Masukkan Nilai" type="text" value="<?php echo $minskr;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>

                      <?php foreach($min as $minpmb){ ?>
                          <?php $minpmb=$minpmb->pernahMendapatBantuan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Pernah Mendapat Bantuan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minpernahMendapatBantuan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minpmb ;?>"/>
                          <input class="form-control" name="minpernahMendapatBantuan" placeholder="Masukkan Nilai" type="text" value="<?php echo $minpmb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkp){ ?>
                          <?php $minkp=$minkp->kondisiPondasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Pondasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiPondasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkp ;?>"/>
                          <input class="form-control" name="minkondisiPondasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkp;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minks){ ?>
                          <?php $minks=$minks->kondisiSloof ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Sloof<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiSloof" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minks ;?>"/>
                          <input class="form-control" name="minkondisiSloof" placeholder="Masukkan Nilai" type="text" value="<?php echo $minks;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkt){ ?>
                          <?php $minkt=$minkt->kondisiTiang; ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Tiang<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiTiang" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkt ;?>"/>
                          <input class="form-control" name="minkondisiTiang" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkb){ ?>
                          <?php $minkb=$minkb->kondisiBalok ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Balok<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiBalok" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkb ;?>"/>
                          <input class="form-control" name="minkondisiBalok" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkb;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minksa){ ?>
                          <?php $minksa=$minksa->kondisiStrukturAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Struktur Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiStrukturAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minksa ;?>"/>
                          <input class="form-control" name="minkondisiStrukturAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $minksa;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minlc){ ?>
                          <?php $minlc=$minlc->lubangCahaya ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Lubang Cahaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minlubangCahaya" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minlc ;?>"/>
                          <input class="form-control" name="minlubangCahaya" placeholder="Masukkan Nilai" type="text" value="<?php echo $minlc;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minv){ ?>
                          <?php $minv=$minv->ventilasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Ventilasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minventilasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minv ;?>"/>
                          <input class="form-control" name="minventilasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $minv;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkkm){ ?>
                          <?php $minkkm=$minkkm->kepemilikanKamarMandi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kepemilikan Kamar Mandi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkepemilikanKamarMandi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkkm ;?>"/>
                          <input class="form-control" name="minkepemilikanKamarMandi" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkkm;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minjsam){ ?>
                          <?php $minjsam=$minjsam->jarakSumberAirMinum ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Jarak Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minjarakSumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minjsam ;?>"/>
                          <input class="form-control" name="minjarakSumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $minjsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minsam){ ?>
                          <?php $minsam=$minsam->sumberAirMinum; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minsumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minsam ;?>"/>
                          <input class="form-control" name="minsumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $minsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minsl){ ?>
                          <?php $minsl=$minsl->sumberListrik ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minsumberListrik" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minsl ;?>"/>
                          <input class="form-control" name="minsumberListrik" placeholder="Masukkan Nilai" type="text" value="<?php echo $minsl;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minmat){ ?>
                          <?php $minmat=$minmat->materialAtapTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minmaterialAtapTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minmat ;?>"/>
                          <input class="form-control" name="minmaterialAtapTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $minmat;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkpa){ ?>
                          <?php $minkpa=$minkpa->kondisiPenutupAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Penutup Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiPenutupAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkpa ;?>"/>
                          <input class="form-control" name="minkondisiPenutupAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkpa;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minmdt){ ?>
                          <?php $minmdt=$minmdt->materialDindingTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Material Dinding Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minmaterialDindingTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minmdt ;?>"/>
                          <input class="form-control" name="minmaterialDindingTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $minmdt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minkd){ ?>
                          <?php $minkd=$minkd->kondisiDinding ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Dinding<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiDinding" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkd ;?>"/>
                          <input class="form-control" name="minkondisiDinding" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkd;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <?php foreach($min as $minmlt){ ?>
                          <?php $minmlt=$minmlt->materialLantaiTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Material Lantai Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minmaterialLantaiTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minmlt ;?>"/>
                          <input class="form-control" name="minmaterialLantaiTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $minmlt;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?> 
                      <?php foreach($min as $minkl){ ?>
                          <?php $minkl=$minkl->kondisiLantai ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Kondisi Lantai<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minkondisiLantai" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $minkl ;?>"/>
                          <input class="form-control" name="minkondisiLantai" placeholder="Masukkan Nilai" type="text" value="<?php echo $minkl;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?> 
                      <?php foreach($min as $mins){ ?>
                          <?php $mins=$mins->swadaya ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nilai Min Swadaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="minswadaya" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $mins ;?>"/>
                          <input class="form-control" name="minswadaya" placeholder="Masukkan Nilai" type="text" value="<?php echo $mins;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <!-- -----------------------------------------------------------------------------Nilai Bobot -->
                      <h2>Nilai Bobot</h2>
                      <hr>
                      <?php foreach($bobot as $b){ ?>
                      <?php $bskt=$b->bobot_statusKepemilikanTanah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Status Kepemilikan Tanah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_statusKepemilikanTanah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bskt ;?>"/>
                          <input class="form-control" name="bobot_statusKepemilikanTanah" placeholder="Masukkan Nilai" type="text" value="<?php echo $bskt;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bppb=$b->bobot_penghasilanPerBulan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Penghasilan Per Bulan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_penghasilanPerBulan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bppb ;?>"/>
                          <input class="form-control" name="bobot_penghasilanPerBulan" placeholder="Masukkan Nilai" type="text" value="<?php echo $bppb;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bskr=$b->bobot_statusKepemilikanRumah ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Status Kepemilikan Rumah<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_statusKepemilikanRumah" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bskr ;?>"/>
                          <input class="form-control" name="bobot_statusKepemilikanRumah" placeholder="Masukkan Nilai" type="text" value="<?php echo $bskr;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bpmb=$b->bobot_pernahMendapatBantuan ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Pernah Mendapat Bantuan<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_pernahMendapatBantuan" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bpmb ;?>"/>
                          <input class="form-control" name="bobot_pernahMendapatBantuan" placeholder="Masukkan Nilai" type="text" value="<?php echo $bpmb;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkp=$b->bobot_kondisiPondasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Pondasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiPondasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkp ;?>"/>
                          <input class="form-control" name="bobot_kondisiPondasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkp;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bks=$b->bobot_kondisiSloof ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Sloof<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiSloof" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bks ;?>"/>
                          <input class="form-control" name="bobot_kondisiSloof" placeholder="Masukkan Nilai" type="text" value="<?php echo $bks;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkt=$b->bobot_kondisiTiang ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Tiang<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiTiang" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkt ;?>"/>
                          <input class="form-control" name="bobot_kondisiTiang" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkt;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkb=$b->bobot_kondisiBalok ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Balok<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiBalok" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkb ;?>"/>
                          <input class="form-control" name="bobot_kondisiBalok" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkb;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bksa=$b->bobot_kondisiStrukturAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Struktur Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiStrukturAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bksa ;?>"/>
                          <input class="form-control" name="bobot_kondisiStrukturAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $bksa;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bv=$b->bobot_ventilasi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Ventilasi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_ventilasi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bv ;?>"/>
                          <input class="form-control" name="bobot_ventilasi" placeholder="Masukkan Nilai" type="text" value="<?php echo $bv;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkkm=$b->bobot_kepemilikanKamarMandi ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kepemilikan Kamar Mandi<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kepemilikanKamarMandi" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkkm ;?>"/>
                          <input class="form-control" name="bobot_kepemilikanKamarMandi" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkkm;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bjsam=$b->bobot_jarakSumberAirMinum ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Jarak Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_jarakSumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bjsam ;?>"/>
                          <input class="form-control" name="bobot_jarakSumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $bjsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bsam=$b->bobot_sumberAirMinum ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Sumber Air Minum<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_sumberAirMinum" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bsam ;?>"/>
                          <input class="form-control" name="bobot_sumberAirMinum" placeholder="Masukkan Nilai" type="text" value="<?php echo $bsam;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bsl=$b->bobot_sumberListrik ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Sumber Listrik<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_sumberListrik" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bsl ;?>"/>
                          <input class="form-control" name="bobot_sumberListrik" placeholder="Masukkan Nilai" type="text" value="<?php echo $bsl;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bmat=$b->bobot_materialAtapTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Material Atap Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_materialAtapTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bmat ;?>"/>
                          <input class="form-control" name="bobot_materialAtapTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $bmat;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkpa=$b->bobot_kondisiPenutupAtap ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Penutup Atap<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiPenutupAtap" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkpa ;?>"/>
                          <input class="form-control" name="bobot_kondisiPenutupAtap" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkpa;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bmdt=$b->bobot_materialDindingTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Material Dinding Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_materialDindingTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bmdt ;?>"/>
                          <input class="form-control" name="bobot_materialDindingTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $bmdt;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkd=$b->bobot_kondisiDinding ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Dinding<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiDinding" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkd ;?>"/>
                          <input class="form-control" name="bobot_kondisiDinding" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkd;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bmlt=$b->bobot_materialLantaiTerluas ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Material Lantai Terluas<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_materialLantaiTerluas" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bmlt ;?>"/>
                          <input class="form-control" name="bobot_materialLantaiTerluas" placeholder="Masukkan Nilai" type="text" value="<?php echo $bmlt;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bkl=$b->bobot_kondisiLantai ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Kondisi Lantai<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_kondisiLantai" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bkl ;?>"/>
                          <input class="form-control" name="bobot_kondisiLantai" placeholder="Masukkan Nilai" type="text" value="<?php echo $bkl;?>" Disabled/>
                      </div>
                      </div>
                      <?php $bs=$b->bobot_swadaya ; ?>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Bobot Swadaya<span
                            class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                          <input class="form-control" name="bobot_swadaya" placeholder="Masukkan Nilai" type="hidden" value="<?php echo $bs ;?>"/>
                          <input class="form-control" name="bobot_swadaya" placeholder="Masukkan Nilai" type="text" value="<?php echo $bs;?>" Disabled/>
                      </div>
                      </div>
                      <?php } ?>
                      <var>
                      </var>
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