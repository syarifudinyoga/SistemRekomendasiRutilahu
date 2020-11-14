<?php
class Penilaian_model extends CI_Model{

  //Fungsi Tampil Pemohon
  function lihatTambahPenilaian(){
    $nilai=0;
    $this->db->select('*');
    $this->db->from('penilaian');
    $this->db->join('pemohon','pemohon.noKTP=penilaian.noKTP');
    $this->db->where('statusKepemilikanTanah =', $nilai);
    $this->db->where('penghasilanPerBulan =', $nilai);
    $this->db->where('statusKepemilikanRumah =', $nilai);
    $this->db->where('pernahMendapatBantuan =', $nilai);
    $this->db->where('kondisiPondasi =', $nilai);
    $this->db->where('kondisiSloof =', $nilai);
    $this->db->where('kondisiTiang =', $nilai);
    $this->db->where('kondisiBalok =', $nilai);
    $this->db->where('kondisiStrukturAtap =', $nilai);
    $this->db->where('lubangCahaya =', $nilai);
    $this->db->where('ventilasi =', $nilai);
    $this->db->where('kepemilikanKamarMandi =', $nilai);
    $this->db->where('jarakSumberAirMinum =', $nilai);
    $this->db->where('sumberAirMinum =', $nilai);
    $this->db->where('sumberListrik =', $nilai);
    $this->db->where('materialAtapTerluas =', $nilai);
    $this->db->where('kondisiPenutupAtap =', $nilai);
    $this->db->where('materialDindingTerluas =', $nilai);
    $this->db->where('kondisiDinding =', $nilai);
    $this->db->where('materialLantaiTerluas =', $nilai);
    $this->db->where('kondisiLantai =', $nilai);
    $this->db->where('swadaya =', $nilai);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Hitung Penilaian Rumah Pemohon Bantuan RUTILAHU kelola penilaian rumah
  function lihatPenilaian(){
    $nilai=0;
    $this->db->select('*');
    $this->db->from('penilaian');
    $this->db->join('pemohon','pemohon.noKTP=penilaian.noKTP');
    $this->db->where('hasilPerhitungan =', $nilai);
    $result = $this->db->get();
    return $result->result();
  }


  function lihatDetailPenilaian($where){
    $this->db->from('penilaian');
    $this->db->where('idPenilaian', $where);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Get Penilaian
  function urutPenilaian($where){
    $this->db->from('penilaian');
    $this->db->where('idPenilaian', $where);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Tambah Penilaian
  function tambahPenilaian($table,$data,$where){
    $this->db->where('idPenilaian', $where);
    $this->db->update($table,$data);
  }

  //Fungsi Nilai Max
  function Max(){
    $nilai=0;
    $this->db->select_max('statusKepemilikanTanah');
    $this->db->select_max('penghasilanPerBulan');
    $this->db->select_max('statusKepemilikanRumah');
    $this->db->select_max('pernahMendapatBantuan');
    $this->db->select_max('kondisiPondasi');
    $this->db->select_max('kondisiSloof');
    $this->db->select_max('kondisiTiang');
    $this->db->select_max('kondisiBalok');
    $this->db->select_max('kondisiStrukturAtap');
    $this->db->select_max('lubangCahaya');
    $this->db->select_max('ventilasi');
    $this->db->select_max('kepemilikanKamarMandi');
    $this->db->select_max('jarakSumberAirMinum');
    $this->db->select_max('sumberAirMinum');
    $this->db->select_max('sumberListrik');
    $this->db->select_max('materialAtapTerluas');
    $this->db->select_max('kondisiPenutupAtap');
    $this->db->select_max('materialDindingTerluas');
    $this->db->select_max('kondisiDinding');
    $this->db->select_max('materialLantaiTerluas');
    $this->db->select_max('kondisiLantai');
    $this->db->select_max('swadaya');
    $this->db->from('penilaian');
    $this->db->where('hasilPerhitungan =', $nilai);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Nilai Min
  function Min(){
    $nilai=0;
    $this->db->select_min('statusKepemilikanTanah');
    $this->db->select_min('penghasilanPerBulan');
    $this->db->select_min('statusKepemilikanRumah');
    $this->db->select_min('pernahMendapatBantuan');
    $this->db->select_min('kondisiPondasi');
    $this->db->select_min('kondisiSloof');
    $this->db->select_min('kondisiTiang');
    $this->db->select_min('kondisiBalok');
    $this->db->select_min('kondisiStrukturAtap');
    $this->db->select_min('lubangCahaya');
    $this->db->select_min('ventilasi');
    $this->db->select_min('kepemilikanKamarMandi');
    $this->db->select_min('jarakSumberAirMinum');
    $this->db->select_min('sumberAirMinum');
    $this->db->select_min('sumberListrik');
    $this->db->select_min('materialAtapTerluas');
    $this->db->select_min('kondisiPenutupAtap');
    $this->db->select_min('materialDindingTerluas');
    $this->db->select_min('kondisiDinding');
    $this->db->select_min('materialLantaiTerluas');
    $this->db->select_min('kondisiLantai');
    $this->db->select_min('swadaya');
    $this->db->from('penilaian');
    $this->db->where('hasilPerhitungan =', $nilai);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Lihat Bobo
  function lihatBobot(){
    $this->db->select('*');
    $this->db->from('maut');
    $result = $this->db->get();
    return $result->result();
  }
}
