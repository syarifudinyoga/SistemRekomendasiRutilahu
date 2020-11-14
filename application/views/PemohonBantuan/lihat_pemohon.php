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
                <h2>Pengajuan Pemohon Bantuan 2019 <?php //echo date('Y'); ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>  
                </ul>
                  <div class="clearfix">
                  </div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-sm-12">
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                    <div id="notifications"><?php echo $this->session->flashdata('edt'); ?></div>
                      <strong class="card-title"><a class="btn btn-success" href="<?php echo base_url(); ?>index.php/pemohon/idxPemohon">Tambah Data</a></strong>
                            <div class="card-box table-responsive">   
                            <table id="data-pemohon" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>No KTP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Periode</th>
                                    <th>Status Persetujuan</th>
                                    <th>Proposal</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>                
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($pemohon as $pmh){ 
                                ?>
                                    <tr>
                                    <td><?php echo $no;?></td><?php $no++;?>
                                    <td><?php echo $pmh->noKTP; ?></td>
                                    <td><?php echo $pmh->namaPemohon; ?></td>
                                    <td><?php echo $pmh->jenisKelamin; ?></td>
                                    <td><?php echo $pmh->alamat; ?></td>
                                    <td><?php echo $pmh->kecamatan; ?></td>
                                    <td><?php echo $pmh->periode; ?></td>
                                    <td><?php echo $pmh->statusPersetujuan; ?></td>
                                    <td><?php echo $pmh->proposal; ?></td>
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                          <form method="POST" action="<?php echo base_url(); ?>index.php/pemohon/formEditPemohon">
                                            <input type="hidden" name="noKTP" value="<?php echo $pmh->noKTP; ?>">
                                            <input type="image" src="<?php echo base_url('assets/gambar/edit.png');?>" style="width:20px";>
                                          </form>
                                        </div>
                                        <div class="col">
                                            <form method="POST" action="<?php echo base_url(); ?>index.php/pemohon/printProposal" target="blank">
                                                <input type="hidden" name="noKTP" value="<?php echo $pmh->noKTP; ?>">
                                                <input type="image" src="<?php echo base_url('assets/gambar/pdf.png');?>" style="width:18px";>
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
                <h2>Pemohon Bantuan Disetujui 2019 <?php //echo date('Y'); ?></h2>
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
                            <table id="data-pemohon-setuju" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>No KTP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Periode</th>
                                    <th>Status Persetujuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
                                foreach($pemohon_setuju as $pmh_setuju){ 
                                ?>
                                    <tr>
                                    <td><?php echo $no;?></td><?php $no++;?>
                                    <td><?php echo $pmh_setuju->noKTP; ?></td>
                                    <td><?php echo $pmh_setuju->namaPemohon; ?></td>
                                    <td><?php echo $pmh_setuju->jenisKelamin; ?></td>
                                    <td><?php echo $pmh_setuju->alamat; ?></td>
                                    <td><?php echo $pmh_setuju->kecamatan; ?></td>
                                    <td><?php echo $pmh_setuju->periode; ?></td>
                                    <td><?php echo $pmh_setuju->statusPersetujuan; ?></td>
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
    <script>
    $(document).ready(function(){
      $('#data-pemohon').DataTable();
    });
    </script>
    <script>
    $(document).ready(function(){
      $('#data-pemohon-setuju').DataTable();
    });
    </script>
  </body>
</html>
