<?php
class Penilaian extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
        redirect('user');
    }
    $this->load->model('penilaian_model');
  }

  function KelolaPenilaianRumah(){
    $data['tambah_penilaian'] = $this->penilaian_model->lihatTambahPenilaian();
    $data['penilaian'] = $this->penilaian_model->lihatPenilaian();
    $data['max'] = $this->penilaian_model->Max();
    $data['min'] = $this->penilaian_model->Min();
    $data['bobot'] = $this->penilaian_model->lihatBobot();
    $this->load->view('DinasSosial/lihat_penilaian', $data);
  }

  function lihatDetailPenilaian(){
    $idPenilaian = $this->input->post('idPenilaian');
    $data['penilaian'] = $this->penilaian_model->lihatDetailPenilaian($idPenilaian);
    $this->load->view('DinasSosial/lihat_detail_penilaian', $data);
  }

  function formTambahPenilaian(){
    $idPenilaian = $this->input->post('idPenilaian');
    $data['penilaian'] = $this->penilaian_model->urutPenilaian($idPenilaian);
    $this->load->view('DinasSosial/form_tambah_penilaian', $data);
  }

  function tambahPenilaian(){
    $idPenilaian = $this->input->post('idPenilaian');
    $noKTP = $this->input->post('noKTP');
    $statusKepemilikanTanah = $this->input->post('statusKepemilikanTanah');
    $penghasilanPerBulan = $this->input->post('penghasilanPerBulan');
    $statusKepemilikanRumah = $this->input->post('statusKepemilikanRumah');
    $pernahMendapatBantuan = $this->input->post('pernahMendapatBantuan');
    $kondisiPondasi = $this->input->post('kondisiPondasi');
    $kondisiSloof = $this->input->post('kondisiSloof');
    $kondisiTiang = $this->input->post('kondisiTiang');
    $kondisiBalok = $this->input->post('kondisiBalok');
    $kondisiStrukturAtap = $this->input->post('kondisiStrukturAtap');
    $lubangCahaya = $this->input->post('lubangCahaya');
    $ventilasi = $this->input->post('ventilasi');
    $kepemilikanKamarMandi = $this->input->post('kepemilikanKamarMandi');
    $jarakSumberAirMinum = $this->input->post('jarakSumberAirMinum');
    $sumberAirMinum = $this->input->post('sumberAirMinum');
    $sumberListrik = $this->input->post('sumberListrik');
    $materialAtapTerluas = $this->input->post('materialAtapTerluas');
    $kondisiPenutupAtap = $this->input->post('kondisiPenutupAtap');
    $materialDindingTerluas = $this->input->post('materialDindingTerluas');
    $kondisiDinding = $this->input->post('kondisiDinding');
    $materialLantaiTerluas = $this->input->post('materialLantaiTerluas');
    $kondisiLantai = $this->input->post('kondisiLantai');
    $swadaya = $this->input->post('swadaya');
    $data = array (
      'idPenilaian' => $idPenilaian,
      'noKTP' => $noKTP,
      'statusKepemilikanTanah' => $statusKepemilikanTanah,
      'penghasilanPerBulan' => $penghasilanPerBulan,
      'statusKepemilikanRumah' => $statusKepemilikanRumah,
      'pernahMendapatBantuan' => $pernahMendapatBantuan  ,
      'kondisiPondasi' => $kondisiPondasi  ,
      'kondisiSloof' => $kondisiSloof  ,
      'kondisiTiang' => $kondisiTiang  ,
      'kondisiBalok' => $kondisiBalok  ,
      'kondisiStrukturAtap' => $kondisiStrukturAtap  ,
      'lubangCahaya' => $lubangCahaya  ,
      'ventilasi' => $ventilasi  ,
      'kepemilikanKamarMandi' => $kepemilikanKamarMandi  ,
      'jarakSumberAirMinum' => $jarakSumberAirMinum  ,
      'sumberAirMinum' => $sumberAirMinum  ,
      'sumberListrik' => $sumberListrik  ,
      'materialAtapTerluas' => $materialAtapTerluas  ,
      'kondisiPenutupAtap' => $kondisiPenutupAtap  ,
      'materialDindingTerluas' => $materialDindingTerluas  ,
      'kondisiDinding' => $kondisiDinding  ,
      'materialLantaiTerluas' => $materialLantaiTerluas  ,
      'kondisiLantai' => $kondisiLantai  ,
      'swadaya' => $swadaya
    );
    if($data == null) {
      $this->session->set_flashdata('tpn',
        '<div class="alert alert-danger">
        <p>Data <strong>Penilaian </strong> Gagal Ditambahkan </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPenilaianRumah();
    }else{
      $this->session->set_flashdata('tpn',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Penilaian </strong> Berhasil Ditambahkan </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->penilaian_model->tambahPenilaian('penilaian',$data,$idPenilaian);
        $this->KelolaPenilaianRumah();
    };


  }

}
