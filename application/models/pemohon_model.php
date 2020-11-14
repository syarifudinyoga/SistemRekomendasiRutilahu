<?php
class Pemohon_model extends CI_Model{

  //Fungsi Tampil Pemohon
  function lihatPemohon(){
    $periode = "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y')
    $email = $this->session->userdata('email');
    $setuju = "Belum Disetujui";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('email =', $email);
    $this->db->where('statusPersetujuan =', $setuju);
    $this->db->where('periode =', $periode);
    $result = $this->db->get();
    return $result->result();
  }

  function lihatPemohonSetuju(){
    $periode = "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y')
    $email = $this->session->userdata('email');
    $setuju = "Disetujui";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('email =', $email);
    $this->db->where('statusPersetujuan =', $setuju);
    $this->db->where('periode =', $periode);
    $result = $this->db->get();
    return $result->result();
  }

  function tambahPemohon($table,$data){
    $this->db->insert($table, $data);
  }

  function tambahNoKtpPenilaian($table,$data){
    $this->db->insert($table, $data);
  }

  function urutPemohon($where){
    $this->db->from('pemohon');
    $this->db->where('noKTP', $where);
    $result = $this->db->get();
    return $result->result();
  }

  function ubahPemohon($table,$data,$where){
    $this->db->where('noKTP', $where);
    $this->db->update($table,$data);
  }

  function setujuPemohon($table,$data,$where){
    $this->db->where('noKTP', $where);
    $this->db->update($table,$data);
  }

  function urutIdP($where){
      $this->db->from('pemohon');
      $this->db->where('noKTP', $where);
      $result = $this->db->get();
      return $result->result();
  }

  //=======================================================================================================Dinsos
  //Fungsi Tampil Pemohon Dinsos
  function lihatPemohonDinsos(){
    $statusSetuju = "Belum Disetujui";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('statusPersetujuan =', $statusSetuju);
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi Tampil Pemohon Dinsos Telah Disetujui
  function lihatPemohonDinsosSetuju(){
    $statusSetuju = "Disetujui";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('statusPersetujuan =', $statusSetuju);
    $result = $this->db->get();
    return $result->result();
  }

  function lihatUser(){
    $admin= "Admin";
    $this->db->select('*');
    $this->db->from('user');

    $this->db->where('level !=', $admin);
    $result = $this->db->get();
    return $result->result();
  }

  function urutUser($where){
    $this->db->from('user');
    $this->db->where('email', $where);
    $result = $this->db->get();
    return $result->result();
  }

  function tambahUser($table,$data){
    $this->db->insert($table, $data);
  }

  function hapusUser($where){
    $this->db->where('email', $where);
    $this->db->delete('user');
  }

  function ubahUser($table, $data, $where){
    $this->db->where('email', $where);
    $this->db->update($table,$data);
  }

  function lihatDetailUser($where){
    $this->db->from('user');
    $this->db->where('email', $where);
    $result = $this->db->get();
    return $result->result();
  }

  function buatToken($table,$data){
    $this->db->insert($table, $data);
  }
}
