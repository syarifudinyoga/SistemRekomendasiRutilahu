<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Halaman Pemohon Bantuan</title>

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
    <!-- Validasi dengan JavaScript -->
    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }
      function goodchars(e, goods, field)
      {
      var key, keychar;
      key = getkey(e);
        if (key == null) return true;
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
      // check goodkeys
      if (goods.indexOf(keychar) != -1)
          return true;
      // control keys
      if ( key==null || key==0 || key==8 || key==9 || key==27 )
        return true;
      if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
              if (field == field.form.elements[i])
                  break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
          };
      // else return false
      return false;
      }
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>index.php/user/PemohonBantuan" class="site_title"><img src="<?php echo base_url('assets/gambar/smd.gif');?>" width="50px"></i> <img src="<?php echo base_url('assets/gambar/dinsos.png');?>" width="155px"></a>
            </div>
            <div class="clearfix"></div>
            <br />
            <!-- Menu Samping -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <hr color="white">
                <ul class="nav side-menu">
                <li><a href="<?php echo base_url(); ?>index.php/pemohon/KelolaPemohon"><i class="fa fa-users"></i> Kelola Pemohon </a></li>
                <li><a href="<?php echo base_url(); ?>index.php/pemilihan/lihatPendapatBantuan"><i class="fa fa-home"></i> Lihat Pendapat Bantuan </a></li>
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
              <h3>Form Edit Pemohon</h3>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Pemohon</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form action="<?php echo base_url(); ?>index.php/pemohon/ubahPemohon" method="post" enctype="multipart/form-data">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">No KTP<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="noKTP" placeholder="Masukkan No KTP" type="hidden" value="<?php echo $pemohon[0]->noKTP;?>"/>
                        <input class="form-control" name="noKTP" placeholder="Masukkan No KTP" type="number" value="<?php echo $pemohon[0]->noKTP;?>" disabled />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="namaPemohon" placeholder="Masukkan Nama" type="hidden" value="<?php echo $pemohon[0]->namaPemohon;?>"/>
                        <input class="form-control" name="namaPemohon" placeholder="Masukkan Nama" type="text" value="<?php echo $pemohon[0]->namaPemohon;?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required/>
                    </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <select name="jenisKelamin" class="form-control" required>
        	            <option value="" hidden>--Pilih Jenis Kelamin--</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="alamat" placeholder="Masukkan Alamat" type="hidden" value="<?php echo $pemohon[0]->alamat;?>" />
                        <input class="form-control" name="alamat" placeholder="Masukkan Alamat" type="text" value="<?php echo $pemohon[0]->alamat;?>" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@.1234567890/ ',this)" required />
                    </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Kecamatan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <select name="kecamatan" class="form-control" required>
        	            <option value="" hidden>-- Pilih Kecamatan --</option>
                        <option value="Buahdua">Buahdua</option>
                        <option value="Cibugel">Cibugel</option>
                        <option value="Cimalaka">Cimalaka</option>
                        <option value="Cimanggung">Cimanggung</option>
                        <option value="Cisarua">Cisarua</option>
                        <option value="Cisitu">Cisitu</option>
                        <option value="Conggeang">Conggeang</option>
                        <option value="Darmaraja">Darmaraja</option>
                        <option value="Ganeas">Ganeas</option>
                        <option value="Jatigede">Jatigede</option>
                        <option value="Jatinangor">Jatinangor</option>
                        <option value="Jatinunggal">Jatinunggal</option>
                        <option value="Pamulihan">Pamulihan</option>
                        <option value="Paseh">Paseh</option>
                        <option value="Rancakalong">Rancakalong</option>
                        <option value="Situraja">Situraja</option>
                        <option value="Sukasari">Sukasari</option>
                        <option value="Sumedang Selatan">Sumedang Selatan</option>
                        <option value="Sumedang Utara">Sumedang Utara</option>
                        <option value="Surian">Surian</option>
                        <option value="Tanjungkerta">Tanjungkerta</option>
                        <option value="Tanjungmedar">Tanjungmedar</option>
                        <option value="Tanjungsari">Tanjungsari</option>
                        <option value="Tomo">Tomo</option>
                        <option value="Ujung Jaya">Ujung Jaya</option>
                        <option value="Wado">Wado</option>
                      </select>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input class="form-control" name="email" type="email" value="<?php echo $this->session->userdata('email');?>" disabled/>
                    </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Periode<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <input class="form-control" name="periode" type="text" value="2019" disabled/>
                    </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Status Persetujuan<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="statusPersetujuan" placeholder="Masukkan Status persetujuan" type="hidden" value="<?php echo $pemohon[0]->statusPersetujuan;?>" />
                        <input class="form-control" name="statusPersetujuan" placeholder="Masukkan Status Persetujuan" type="text" value="<?php echo $pemohon[0]->statusPersetujuan;?>" disabled />
                    </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Proposal<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="proposal" placeholder="Masukkan Proposal" type="hidden" value="<?php echo $pemohon[0]->proposal;?>" />
                        <input class="form-control" name="proposal" placeholder="Masukkan Proposal" type="file" value="<?php echo $pemohon[0]->proposal;?>" required />
                    </div>
                    </div>
                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                    <button type='submit' class="btn btn-primary" onclick="return confirm('Yakin Mengubah Data Pemohon ?')">Submit</button>
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
