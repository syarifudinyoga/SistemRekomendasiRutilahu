<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" /> 
    <title>Laporan Penerima Bantuan Rumah Tidak Layak Huni Kementrian PUPR</title>
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
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
    <!-- Bagian Header-->
    <div class="row">
        <div class="col"><center>
            <table>
                <tr>
                    <td><img src="<?php echo base_url('assets/gambar/smd.gif');?>" width="180px" height="150px"></td>
                    <td> <center>
                    <h3><b>PEMERINTAH KABUPATEN SUMEDANG</b></h3>
                    <h3><b>DINAS SOSIAL PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK</b></h3>
                    <h6>Jalan Mayor Abdurahman N0.200 Telp (0261) 214 1865 Sumedang - 45322</h6>
                    </center>
                    </td>
                </tr>
            <table>
          </center>
        </div>
        <hr align="center" size="100px" width="100%" color="black">
    </div>
    <center><h4>PENERIMA BANTUAN RUMAH TIDAK LAYAK HUNI PERIODE 2019 <?php //echo date('Y');?></h4></center>
    <table border="1">
    <thead>
        <tr><center><b>
            <th width="5%"><center>No</th>
            <th width="10%"><center>No KTP</th>
            <th width="10%"><center>Nama Pemohon</th>
            <th width="10%"><center>Jenis Kelamin</th>
            <th width="15%"><center>Alamat</th>
            <th width="10%"><center>Kecamatan</th>
            <th width="10%"><center>Nilai Akhir</th>
            <th width="10%"><center>Sumber Bantuan</th></b>
        </center></tr>
    </thead>
    <tbody><center>
    <?php
        $no=1;
        foreach($cetakLaporan as $c){ ?>
        <tr>
            <td><?php echo $no; ?></td><?php $no++; ?>
            <td><?php echo $c->noKTP; ?></td>
            <td><?php echo $c->namaPemohon; ?></td>
            <td><?php echo $c->jenisKelamin; ?></td>
            <td><?php echo $c->alamat; ?></td>
            <td><?php echo $c->kecamatan; ?></td>
            <td><?php echo $c->nilaiAkhir; ?></td>
            <td><?php echo $c->pemberiBantuan; ?></td>                                    
        </tr>
        <?php } ?>
    </tbody>
    </center>
    </table><br>
    <div class="container fluid">
        <div class="col">
            <div class="row-md-7"></div>
            <div class="row-md-1">
                <h5>Jumlah Bantuan</h5>
                <table border="1">
                    <tr>
                        <td>Kementrian PUPR</td>
                        <td><?php echo $kementrianpupr; ?></td>
                    <tr>
                </table>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <div class="pull-right">
            <center>PEJABAT PEMBUAT KOMITMEN</center>
            <center>RUMAH SWADAYA WILAYAH II,</center>
            <br>
            <br>
            <br>
            <center><b><u>SUMARNO, ST</u></b></center>
            <center><b>NIP. 19690513 200212 1 001</b></center>
        </div>
        <div class="clearfix"></div>
    </footer>
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
        window.print();
    </script>
</body>
</html>
