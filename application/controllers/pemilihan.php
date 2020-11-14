<?php
class Pemilihan extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
        redirect('user');
    }
    $this->load->model('pemilihan_model');
  }

  //Fungsi Kelola Pendapat bantuan
  function KelolaPendapatBantuan(){
    $data['bobot'] = $this->pemilihan_model->lihatPendapatBantuan();
    $data['pemilihan'] = $this->pemilihan_model->lihatPemilihanBantuan();
    $data['normalisasi'] = $this->pemilihan_model->lihatPemilihanBantuan();
    $data['rekomendasi'] = $this->pemilihan_model->lihatRekomendasiPendapatBantuan();
    $data['pilih'] = $this->pemilihan_model->pilihRekomendasiPendapatBantuanDinsos();
    $data['max'] = $this->pemilihan_model->Max();
    $data['min'] = $this->pemilihan_model->Min();
    $this->load->view('DinasSosial/lihat_pendapat_bantuan', $data);
  } 

  //Fungsi Kelola Pendapat Bantuan Kementrian PUPR
  function KelolaPendapatBantuanKementrianPUPR(){
    $data['pendapat'] = $this->pemilihan_model->lihatPendapatBantuan();
    $data['pemilihan'] = $this->pemilihan_model->lihatPemilihanBantuanKementrianPUPR();
    $data['rekomendasi'] = $this->pemilihan_model->lihatRekomendasiPendapatBantuanKementrianPUPR();
    $data['max'] = $this->pemilihan_model->Max();
    $data['min'] = $this->pemilihan_model->Min();
    $this->load->view('KementrianPUPR/lihat_pendapat_bantuan_KementrianPUPR', $data);
  }

  //Redirect Ke Halaman Laporan Dinas Sosial
  function KelolaPelaporanBantuan(){
    $data['periode']= $this->pemilihan_model->lihatPemohon();
    $data['tahun']= $this->pemilihan_model->lihatPeriode();
    $this->load->view('DinasSosial/lihat_pelaporan_bantuan',$data);
  }

  //Redirect Ke Halaman Laporan Kementrian PUPR
  function KelolaPelaporanBantuanKementrianPUPR(){
    $data['periode']= $this->pemilihan_model->lihatPemohon();
    $data['tahun']= $this->pemilihan_model->lihatPeriode();
    $this->load->view('KementrianPUPR/lihat_pelaporan_bantuan',$data);
  }

  function cetakLaporan(){
    $data['cetakLaporan']= $this->pemilihan_model->cetakLaporan();
    $data['dinsos']= $this->pemilihan_model->totalBantuanDinsos();
    $data['kementrianpupr']= $this->pemilihan_model->totalBantuanKementrianPUPR();
    $this->load->view('DinasSosial/cetak_laporan', $data);
  }

  //fungsi cetak laporan kementrian pupr
  function cetakLaporanKementrianPUPR(){
    $data['cetakLaporan']= $this->pemilihan_model->cetakLaporanKementrianPUPR();
    $data['dinsos']= $this->pemilihan_model->totalBantuanDinsos();
    $data['kementrianpupr']= $this->pemilihan_model->totalBantuanKementrianPUPR();
    $this->load->view('KementrianPUPR/cetak_laporan', $data);
  }
  
  
  //Fungsi Tambah Rekomendasi Aktor Dinas Sosial
  function pilihRekomendasiPendapatBantuan(){
    $idPemilihan = $this->input->post('idPemilihan');
    $statusRekomendasi = "Dinas Sosial";
    $data = array (
      'idPemilihan' => $idPemilihan,
      'statusRekomendasi' => $statusRekomendasi
    );
    if($data == null) {
      $this->session->set_flashdata('rek',
        '<div class="alert alert-danger">
        <p>Data Pemohon <strong>Pendapat Bantuan </strong> Gagal Dipilih </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPendapatBantuan();
    }else{
      $this->session->set_flashdata('rek',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data Pemohon<strong>Pendapat Bantuan </strong> Berhasil Dipilih </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemilihan_model->pilihRekomendasiPendapatBantuan('pemilihan',$data,$idPemilihan);
        $this->KelolaPendapatBantuan();
    };
  }

  //Fungsi Tambah Penerima Bantuan Aktor Kementrian PUPR
  function pilihRekomendasiPendapatBantuanPUPR(){
    $idPemilihan = $this->input->post('idPemilihan');
    $PemberiBantuan = "Kementrian PUPR";
    $data = array (
      'idPemilihan' => $idPemilihan,
      'pemberiBantuan' => $PemberiBantuan
    );
    if($data == null) {
      $this->session->set_flashdata('rek',
        '<div class="alert alert-danger">
        <p>Data Pemohon <strong>Pendapat Bantuan </strong> Gagal Dipilih </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPendapatBantuanKementrianPUPR();
    }else{
      $this->session->set_flashdata('rek',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data Pemohon<strong>Pendapat Bantuan </strong> Berhasil Dipilih </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemilihan_model->pilihRekomendasiPendapatBantuan('pemilihan',$data,$idPemilihan);
        $this->KelolaPendapatBantuanKementrianPUPR();
    };
  }

  //Fungsi Tambah Penerima Bantuan Aktor Dinas Sosial
  function pilihRekomendasiPendapatDinsos(){
    $idPemilihan = $this->input->post('idPemilihan');
    $PemberiBantuan = "Dinas Sosial";
    $data = array (
      'idPemilihan' => $idPemilihan,
      'pemberiBantuan' => $PemberiBantuan
    );
    if($data == null) {
      $this->session->set_flashdata('pil',
        '<div class="alert alert-danger">
        <p>Data Pemohon <strong>Pendapat Bantuan </strong> Gagal Dipilih </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPendapatBantuan();
    }else{
      $this->session->set_flashdata('pil',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data Pemohon<strong>Pendapat Bantuan </strong> Berhasil Dipilih </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemilihan_model->pilihRekomendasiPendapatBantuan('pemilihan',$data,$idPemilihan);
        $this->KelolaPendapatBantuan();
    };
  }

  


  //fungsi untuk kelola pendapat bantuan Pemohon Bantuan
  function lihatPendapatBantuan(){
    $data['rekomendasi'] = $this->pemilihan_model->lihatRekomendasiPendapatBantuanPemohonBantuan();
    $this->load->view('PemohonBantuan/lihat_pendapat_bantuan', $data);
  }

  //fungsi untuk lihat detail pendapat bantuan dinas sosial
  function lihatDetailPendapatBantuan(){
    //$idPemilihan = $this->input->post('idPemilihan');
    //$data['rekomendasi'] = $this->pemilihan_model->lihatDetailPendapatBantuan($idPemilihan);
    $idPemilihan = $this->input->post('idPemilihan');
    $data['rekomendasi'] = $this->pemilihan_model->lihatDetailPendapatBantuan($idPemilihan);
    $this->load->view('DinasSosial/lihat_detail_pendapat_bantuan', $data);
  }

  //fungsi untuk lihat detail pendapat bantuan aktor Pemohon Bantuan
  function lihatDetailPendapatBantuanPemohonBantuan(){
    //$idPemilihan = $this->input->post('idPemilihan');
    //$data['rekomendasi'] = $this->pemilihan_model->lihatDetailPendapatBantuan($idPemilihan);
    $idPemilihan = $this->input->post('idPemilihan');
    $data['rekomendasi'] = $this->pemilihan_model->lihatDetailPendapatBantuan($idPemilihan);
    $this->load->view('PemohonBantuan/lihat_detail_pendapat_bantuan', $data);
  }

}
