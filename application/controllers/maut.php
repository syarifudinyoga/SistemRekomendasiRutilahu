<?php
class Maut extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
        redirect('user');
    }
    $this->load->model('maut_model');
  }

  function KelolaPenilaianRumah(){
    $data['tambah_penilaian'] = $this->maut_model->lihatTambahPenilaian();
    $data['penilaian'] = $this->maut_model->lihatPenilaian();
    $data['bobot'] = $this->maut_model->lihatBobot();
    $data['max'] = $this->maut_model->Max();
    $data['min'] = $this->maut_model->Min();
    $this->load->view('DinasSosial/lihat_penilaian', $data);
  }

  function formHitungMautKeseluruhan(){
    $idPenilaian = $this->input->post('idPenilaian');
    $data['hitung_maut'] = $this->maut_model->lihatNilai();
    $data['maut'] = $this->maut_model->urutMaut($idPenilaian);
    $data['max'] = $this->maut_model->Max();
    $data['min'] = $this->maut_model->Min();
    $data['bobot'] = $this->maut_model->lihatBobot();
    $this->load->view('DinasSosial/form_hitung_maut_keseluruhan', $data);
  }

  function HitungMautKeseluruhan(){
    //Kriteria
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

    //Nilai Max
    $maxstatusKepemilikanTanah = $this->input->post('maxstatusKepemilikanTanah');
    $maxpenghasilanPerBulan = $this->input->post('maxpenghasilanPerBulan');
    $maxstatusKepemilikanRumah = $this->input->post('maxstatusKepemilikanRumah');
    $maxpernahMendapatBantuan = $this->input->post('maxpernahMendapatBantuan');
    $maxkondisiPondasi = $this->input->post('maxkondisiPondasi');
    $maxkondisiSloof = $this->input->post('maxkondisiSloof');
    $maxkondisiTiang = $this->input->post('maxkondisiTiang');
    $maxkondisiBalok = $this->input->post('maxkondisiBalok');
    $maxkondisiStrukturAtap = $this->input->post('maxkondisiStrukturAtap');
    $maxlubangCahaya = $this->input->post('maxlubangCahaya');
    $maxventilasi = $this->input->post('maxventilasi');
    $maxkepemilikanKamarMandi = $this->input->post('maxkepemilikanKamarMandi');
    $maxjarakSumberAirMinum = $this->input->post('maxjarakSumberAirMinum');
    $maxsumberAirMinum = $this->input->post('maxsumberAirMinum');
    $maxsumberListrik = $this->input->post('maxsumberListrik');
    $maxmaterialAtapTerluas = $this->input->post('maxmaterialAtapTerluas');
    $maxkondisiPenutupAtap = $this->input->post('maxkondisiPenutupAtap');
    $maxmaterialDindingTerluas = $this->input->post('maxmaterialDindingTerluas');
    $maxkondisiDinding = $this->input->post('maxkondisiDinding');
    $maxmaterialLantaiTerluas = $this->input->post('maxmaterialLantaiTerluas');
    $maxkondisiLantai = $this->input->post('maxkondisiLantai');
    $maxswadaya = $this->input->post('maxswadaya');

    //Nilai Min
    $minstatusKepemilikanTanah = $this->input->post('minstatusKepemilikanTanah');
    $minpenghasilanPerBulan = $this->input->post('minpenghasilanPerBulan');
    $minstatusKepemilikanRumah = $this->input->post('minstatusKepemilikanRumah');
    $minpernahMendapatBantuan = $this->input->post('minpernahMendapatBantuan');
    $minkondisiPondasi = $this->input->post('minkondisiPondasi');
    $minkondisiSloof = $this->input->post('minkondisiSloof');
    $minkondisiTiang = $this->input->post('minkondisiTiang');
    $minkondisiBalok = $this->input->post('minkondisiBalok');
    $minkondisiStrukturAtap = $this->input->post('minkondisiStrukturAtap');
    $minlubangCahaya = $this->input->post('minlubangCahaya');
    $minventilasi = $this->input->post('minventilasi');
    $minkepemilikanKamarMandi = $this->input->post('minkepemilikanKamarMandi');
    $minjarakSumberAirMinum = $this->input->post('minjarakSumberAirMinum');
    $minsumberAirMinum = $this->input->post('minsumberAirMinum');
    $minsumberListrik = $this->input->post('minsumberListrik');
    $minmaterialAtapTerluas = $this->input->post('minmaterialAtapTerluas');
    $minkondisiPenutupAtap = $this->input->post('minkondisiPenutupAtap');
    $minmaterialDindingTerluas = $this->input->post('minmaterialDindingTerluas');
    $minkondisiDinding = $this->input->post('minkondisiDinding');
    $minmaterialLantaiTerluas = $this->input->post('minmaterialLantaiTerluas');
    $minkondisiLantai = $this->input->post('minkondisiLantai');
    $minswadaya = $this->input->post('minswadaya');

    //Nilai Bobot 
    $bobot_statusKepemilikanTanah = $this->input->post('bobot_statusKepemilikanTanah');
    $bobot_penghasilanPerBulan = $this->input->post('bobot_penghasilanPerBulan');
    $bobot_statusKepemilikanRumah = $this->input->post('bobot_statusKepemilikanRumah');
    $bobot_pernahMendapatBantuan = $this->input->post('bobot_pernahMendapatBantuan');
    $bobot_kondisiPondasi = $this->input->post('bobot_kondisiPondasi');
    $bobot_kondisiSloof = $this->input->post('bobot_kondisiSloof');
    $bobot_kondisiTiang = $this->input->post('bobot_kondisiTiang');
    $bobot_kondisiBalok = $this->input->post('bobot_kondisiBalok');
    $bobot_kondisiStrukturAtap = $this->input->post('bobot_kondisiStrukturAtap');
    $bobot_lubangCahaya = $this->input->post('bobot_lubangCahaya');
    $bobot_ventilasi = $this->input->post('bobot_ventilasi');
    $bobot_kepemilikanKamarMandi = $this->input->post('bobot_kepemilikanKamarMandi');
    $bobot_jarakSumberAirMinum = $this->input->post('bobot_jarakSumberAirMinum');
    $bobot_sumberAirMinum = $this->input->post('bobot_sumberAirMinum');
    $bobot_sumberListrik = $this->input->post('bobot_sumberListrik');
    $bobot_materialAtapTerluas = $this->input->post('bobot_materialAtapTerluas');
    $bobot_kondisiPenutupAtap = $this->input->post('bobot_kondisiPenutupAtap');
    $bobot_materialDindingTerluas = $this->input->post('bobot_materialDindingTerluas');
    $bobot_kondisiDinding = $this->input->post('bobot_kondisiDinding');
    $bobot_materialLantaiTerluas = $this->input->post('bobot_materialLantaiTerluas');
    $bobot_kondisiLantai = $this->input->post('bobot_kondisiLantai');
    $bobot_swadaya = $this->input->post('bobot_swadaya');


    //Selisih (Max-Min)
    $selisih_statusKepemilikanTanah =$maxstatusKepemilikanTanah-$minstatusKepemilikanTanah ;
    $selisih_penghasilanPerBulan =$maxpenghasilanPerBulan-$minpenghasilanPerBulan ;
    $selisih_statusKepemilikanRumah =$maxstatusKepemilikanRumah-$minstatusKepemilikanRumah ;
    $selisih_pernahMendapatBantuan =$maxpernahMendapatBantuan-$minpernahMendapatBantuan ;
    $selisih_kondisiPondasi =$maxkondisiPondasi-$minkondisiPondasi ;
    $selisih_kondisiSloof =$maxkondisiSloof-$minkondisiSloof ;
    $selisih_kondisiTiang =$maxkondisiTiang-$minkondisiTiang ;
    $selisih_kondisiBalok =$maxkondisiBalok-$minkondisiBalok ;
    $selisih_kondisiStrukturAtap =$maxkondisiStrukturAtap-$minkondisiStrukturAtap ;
    $selisih_lubangCahaya =$maxlubangCahaya-$minlubangCahaya ;
    $selisih_ventilasi =$maxventilasi-$minventilasi ;
    $selisih_kepemilikanKamarMandi =$maxkepemilikanKamarMandi-$minkepemilikanKamarMandi ;
    $selisih_jarakSumberAirMinum =$maxjarakSumberAirMinum-$minjarakSumberAirMinum ;
    $selisih_sumberAirMinum =$maxsumberAirMinum-$minsumberAirMinum ;
    $selisih_sumberListrik =$maxsumberListrik-$minsumberListrik ;
    $selisih_materialAtapTerluas =$maxmaterialAtapTerluas-$minmaterialAtapTerluas ;
    $selisih_kondisiPenutupAtap =$maxkondisiPenutupAtap-$minkondisiPenutupAtap ;
    $selisih_materialDindingTerluas =$maxmaterialDindingTerluas-$minmaterialDindingTerluas ;
    $selisih_kondisiDinding =$maxkondisiDinding-$minkondisiDinding ;
    $selisih_materialLantaiTerluas =$maxmaterialLantaiTerluas-$minmaterialLantaiTerluas ;
    $selisih_kondisiLantai =$maxkondisiLantai-$minkondisiLantai ;
    $selisih_swadaya =$maxswadaya-$minswadaya ;

    $data= array();
    $index=0;
      foreach($idPenilaian as $idp){
    //Kriteria-Nilai Min (k = kriteria) 
    $k1 = $statusKepemilikanTanah[$index] - $minstatusKepemilikanTanah;
    $k2 = $penghasilanPerBulan[$index] - $minpenghasilanPerBulan;
    $k3 = $statusKepemilikanRumah[$index] - $minstatusKepemilikanRumah;
    $k4 = $pernahMendapatBantuan[$index] - $minpernahMendapatBantuan;
    $k5 = $kondisiPondasi[$index] - $minkondisiPondasi;
    $k6 = $kondisiSloof[$index] - $minkondisiSloof;
    $k7 = $kondisiTiang[$index] - $minkondisiTiang;
    $k8 = $kondisiBalok[$index] - $minkondisiBalok;
    $k9 = $kondisiStrukturAtap[$index] - $minkondisiStrukturAtap;
    $k10 = $lubangCahaya[$index] - $minlubangCahaya;
    $k11 = $ventilasi[$index] - $minventilasi;
    $k12 = $kepemilikanKamarMandi[$index] - $minkepemilikanKamarMandi;
    $k13 = $jarakSumberAirMinum[$index] - $minjarakSumberAirMinum;
    $k14 = $sumberAirMinum[$index] - $minsumberAirMinum;
    $k15 = $sumberListrik[$index] - $minsumberListrik;
    $k16 = $materialAtapTerluas[$index] - $minmaterialAtapTerluas;
    $k17 = $kondisiPenutupAtap[$index] - $minkondisiPenutupAtap;
    $k18 = $materialDindingTerluas[$index] - $minmaterialDindingTerluas ;
    $k19 = $kondisiDinding[$index] - $minkondisiDinding;
    $k20 = $materialLantaiTerluas[$index] - $minmaterialLantaiTerluas ;
    $k21 = $kondisiLantai[$index] - $minkondisiLantai ;
    $k22 = $swadaya[$index] - $minswadaya;

    //Normalisasi (N = Normmalisasi)
    $N1= $k1/$selisih_statusKepemilikanTanah;
    $N2= $k2/$selisih_penghasilanPerBulan;
    $N3= $k3/$selisih_statusKepemilikanRumah;
    $N4= $k4/$selisih_pernahMendapatBantuan ;
    $N5= $k5/$selisih_kondisiPondasi ;
    $N6= $k6/$selisih_kondisiSloof ;
    $N7= $k7/$selisih_kondisiTiang ;
    $N8= $k8/$selisih_kondisiBalok ;
    $N9= $k9/$selisih_kondisiStrukturAtap ;
    $N10= $k10/$selisih_lubangCahaya ;
    $N11= $k11/$selisih_ventilasi ;
    $N12= $k12/$selisih_kepemilikanKamarMandi ;
    $N13= $k13/$selisih_jarakSumberAirMinum ;
    $N14= $k14/$selisih_sumberAirMinum ;
    $N15= $k15/$selisih_sumberListrik ;
    $N16= $k16/$selisih_materialAtapTerluas ;
    $N17= $k17/$selisih_kondisiPenutupAtap ;
    $N18= $k18/$selisih_materialDindingTerluas ;
    $N19= $k19/$selisih_kondisiDinding ;
    $N20= $k20/$selisih_materialLantaiTerluas ;
    $N21= $k21/$selisih_kondisiLantai ;
    $N22= $k22/$selisih_swadaya ;

    //MAUT (A = Alternatif)
    $A1 = $N1*$bobot_statusKepemilikanTanah ;
    $A2 = $N2*$bobot_penghasilanPerBulan ;
    $A3 = $N3*$bobot_statusKepemilikanRumah ;
    $A4 = $N4*$bobot_pernahMendapatBantuan;
    $A5 = $N5*$bobot_kondisiPondasi ;
    $A6 = $N6*$bobot_kondisiSloof ;
    $A7 = $N7*$bobot_kondisiTiang ;
    $A8 = $N8*$bobot_kondisiBalok ;
    $A9 = $N9*$bobot_kondisiStrukturAtap ;
    $A10 = $N10*$bobot_lubangCahaya ;
    $A11 = $N11*$bobot_ventilasi ;
    $A12 = $N12*$bobot_kepemilikanKamarMandi ;
    $A13 = $N13*$bobot_jarakSumberAirMinum ;
    $A14 = $N14*$bobot_sumberAirMinum ;
    $A15 = $N15*$bobot_sumberListrik ;
    $A16 = $N16*$bobot_materialAtapTerluas ;
    $A17 = $N17*$bobot_kondisiPenutupAtap ;
    $A18 = $N18*$bobot_materialDindingTerluas ;
    $A19 = $N19*$bobot_kondisiDinding ;
    $A20 = $N20*$bobot_materialLantaiTerluas ;
    $A21 = $N21*$bobot_kondisiLantai ;
    $A22 = $N22*$bobot_swadaya ;
    $hasilHitung = $A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14+$A15+$A16+$A17+$A18+$A19+$A20+$A21+$A22;

    array_push($data,array(
        'idPenilaian' => $idp,
        'noKTP' => $noKTP[$index],
        'normalisasi_statusKepemilikanTanah' => $N1,
        'normalisasi_penghasilanPerBulan' => $N2,
        'normalisasi_statusKepemilikanRumah' => $N3,
        'normalisasi_pernahMendapatBantuan' => $N4,
        'normalisasi_kondisiPondasi' => $N5,
        'normalisasi_kondisiSloof' => $N6 ,
        'normalisasi_kondisiTiang' => $N7 ,
        'normalisasi_kondisiBalok' => $N8 ,
        'normalisasi_kondisiStrukturAtap' => $N9 ,
        'normalisasi_lubangCahaya' => $N10 ,
        'normalisasi_ventilasi' => $N11 ,
        'normalisasi_kepemilikanKamarMandi' => $N12 ,
        'normalisasi_jarakSumberAirMinum' => $N13 ,
        'normalisasi_sumberAirMinum' => $N14 ,
        'normalisasi_sumberListrik' => $N15 ,
        'normalisasi_materialAtapTerluas' => $N16 ,
        'normalisasi_kondisiPenutupAtap' => $N17 ,
        'normalisasi_materialDindingTerluas' => $N18 ,
        'normalisasi_kondisiDinding' => $N19 ,
        'normalisasi_materialLantaiTerluas' => $N20 ,
        'normalisasi_kondisiLantai' => $N21 ,
        'normalisasi_swadaya' => $N22,
        'hasil_statusKepemilikanTanah' => $A1,
        'hasil_penghasilanPerBulan' => $A2,
        'hasil_statusKepemilikanRumah' => $A3,
        'hasil_pernahMendapatBantuan' => $A4,
        'hasil_kondisiPondasi' => $A5,
        'hasil_kondisiSloof' => $A6 ,
        'hasil_kondisiTiang' => $A7 ,
        'hasil_kondisiBalok' => $A8 ,
        'hasil_kondisiStrukturAtap' => $A9 ,
        'hasil_lubangCahaya' => $A10 ,
        'hasil_ventilasi' => $A11 ,
        'hasil_kepemilikanKamarMandi' => $A12 ,
        'hasil_jarakSumberAirMinum' => $A13 ,
        'hasil_sumberAirMinum' => $A14 ,
        'hasil_sumberListrik' => $A15 ,
        'hasil_materialAtapTerluas' => $A16 ,
        'hasil_kondisiPenutupAtap' => $A17 ,
        'hasil_materialDindingTerluas' => $A18 ,
        'hasil_kondisiDinding' => $A19 ,
        'hasil_materialLantaiTerluas' => $A20 ,
        'hasil_kondisiLantai' => $A21 ,
        'hasil_swadaya' => $A22,
        'nilaiAkhir' => $hasilHitung
    ));
    $index++;
  }

  $data1= array();
    $idx=0;
      foreach($idPenilaian as $idp1){
    //Kriteria-Nilai Min (k = kriteria) 
    $k1 = $statusKepemilikanTanah[$idx] - $minstatusKepemilikanTanah;
    $k2 = $penghasilanPerBulan[$idx] - $minpenghasilanPerBulan;
    $k3 = $statusKepemilikanRumah[$idx] - $minstatusKepemilikanRumah;
    $k4 = $pernahMendapatBantuan[$idx] - $minpernahMendapatBantuan;
    $k5 = $kondisiPondasi[$idx] - $minkondisiPondasi;
    $k6 = $kondisiSloof[$idx] - $minkondisiSloof;
    $k7 = $kondisiTiang[$idx] - $minkondisiTiang;
    $k8 = $kondisiBalok[$idx] - $minkondisiBalok;
    $k9 = $kondisiStrukturAtap[$idx] - $minkondisiStrukturAtap;
    $k10 = $lubangCahaya[$idx] - $minlubangCahaya;
    $k11 = $ventilasi[$idx] - $minventilasi;
    $k12 = $kepemilikanKamarMandi[$idx] - $minkepemilikanKamarMandi;
    $k13 = $jarakSumberAirMinum[$idx] - $minjarakSumberAirMinum;
    $k14 = $sumberAirMinum[$idx] - $minsumberAirMinum;
    $k15 = $sumberListrik[$idx] - $minsumberListrik;
    $k16 = $materialAtapTerluas[$idx] - $minmaterialAtapTerluas;
    $k17 = $kondisiPenutupAtap[$idx] - $minkondisiPenutupAtap;
    $k18 = $materialDindingTerluas[$idx] - $minmaterialDindingTerluas ;
    $k19 = $kondisiDinding[$idx] - $minkondisiDinding;
    $k20 = $materialLantaiTerluas[$idx] - $minmaterialLantaiTerluas ;
    $k21 = $kondisiLantai[$idx] - $minkondisiLantai ;
    $k22 = $swadaya[$idx] - $minswadaya;

    //Normalisasi (N = Normmalisasi)
    $N1= $k1/$selisih_statusKepemilikanTanah;
    $N2= $k2/$selisih_penghasilanPerBulan;
    $N3= $k3/$selisih_statusKepemilikanRumah;
    $N4= $k4/$selisih_pernahMendapatBantuan ;
    $N5= $k5/$selisih_kondisiPondasi ;
    $N6= $k6/$selisih_kondisiSloof ;
    $N7= $k7/$selisih_kondisiTiang ;
    $N8= $k8/$selisih_kondisiBalok ;
    $N9= $k9/$selisih_kondisiStrukturAtap ;
    $N10= $k10/$selisih_lubangCahaya ;
    $N11= $k11/$selisih_ventilasi ;
    $N12= $k12/$selisih_kepemilikanKamarMandi ;
    $N13= $k13/$selisih_jarakSumberAirMinum ;
    $N14= $k14/$selisih_sumberAirMinum ;
    $N15= $k15/$selisih_sumberListrik ;
    $N16= $k16/$selisih_materialAtapTerluas ;
    $N17= $k17/$selisih_kondisiPenutupAtap ;
    $N18= $k18/$selisih_materialDindingTerluas ;
    $N19= $k19/$selisih_kondisiDinding ;
    $N20= $k20/$selisih_materialLantaiTerluas ;
    $N21= $k21/$selisih_kondisiLantai ;
    $N22= $k22/$selisih_swadaya ;

    //MAUT (A = Alternatif)
    $A1 = $N1*$bobot_statusKepemilikanTanah ;
    $A2 = $N2*$bobot_penghasilanPerBulan ;
    $A3 = $N3*$bobot_statusKepemilikanRumah ;
    $A4 = $N4*$bobot_pernahMendapatBantuan;
    $A5 = $N5*$bobot_kondisiPondasi ;
    $A6 = $N6*$bobot_kondisiSloof ;
    $A7 = $N7*$bobot_kondisiTiang ;
    $A8 = $N8*$bobot_kondisiBalok ;
    $A9 = $N9*$bobot_kondisiStrukturAtap ;
    $A10 = $N10*$bobot_lubangCahaya ;
    $A11 = $N11*$bobot_ventilasi ;
    $A12 = $N12*$bobot_kepemilikanKamarMandi ;
    $A13 = $N13*$bobot_jarakSumberAirMinum ;
    $A14 = $N14*$bobot_sumberAirMinum ;
    $A15 = $N15*$bobot_sumberListrik ;
    $A16 = $N16*$bobot_materialAtapTerluas ;
    $A17 = $N17*$bobot_kondisiPenutupAtap ;
    $A18 = $N18*$bobot_materialDindingTerluas ;
    $A19 = $N19*$bobot_kondisiDinding ;
    $A20 = $N20*$bobot_materialLantaiTerluas ;
    $A21 = $N21*$bobot_kondisiLantai ;
    $A22 = $N22*$bobot_swadaya ;
    $hasilHitung = $A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14+$A15+$A16+$A17+$A18+$A19+$A20+$A21+$A22;

    array_push($data1,array(
        'idPenilaian' => $idp1,
        'hasilPerhitungan' => $hasilHitung
      ));
    $idx++;
  }
  if($data == null && $data1 == null) {
    $this->session->set_flashdata('hhm',
      '<div class="alert alert-danger">
      <p>Data <strong>Perhitungan Penilaian Rumah</strong> Gagal Ditambahkan </p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
      $this->KelolaPenilaianRumah();
  }else{
    $this->session->set_flashdata('hhm',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>Data <strong>Perhitungan Penilaian Rumah</strong> Berhasil Ditambahkan </p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>');
  $this->maut_model->hitungMautKeseluruhan('pemilihan', $data);
  $this->db->update_batch('penilaian', $data1, 'idPenilaian');
  $this->KelolaPenilaianRumah();  
  };
  }
}