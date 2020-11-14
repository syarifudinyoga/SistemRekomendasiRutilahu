<?php
class User_model extends CI_Model{
//===================================================================Login
  //Fungsi Validasi Login
  function validate($email,$password,$aktivasi){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->where('aktivasi',$aktivasi);
    $result = $this->db->get('user',1);
    return $result;
  }
  function buatAkun($table,$data){
    $this->db->insert($table, $data);
  }

  function buatToken($table,$data){
    $this->db->insert($table, $data);
  }

  //Chart Jumlah Pemohon Bantuan Dinas Sosial
  function chartPemohonBantuan(){
    /*Tahun Yang Sedang Berjalan Sekarang
    $periode = date('Y');
    */
    $periode = "2019";
    $this->db->group_by('kecamatan');
    $this->db->select('kecamatan');
    $this->db->select("count(*) as total");
    $this->db->where('periode =',$periode);
    return $this->db->from('pemohon')->get()->result();
  }

  //Fungsi Lihat Pemohon
  function lihatPemohon(){
    $this->db->select('*');
    $this->db->from('pemohon');
    $result = $this->db->get();
    return $result->result();
  }

  //Hitung jumlah keseluruhan Pemohon (Card Box) aktor Dinsos
  public function jumlahPemohon(){
    /*Tahun Yang Sedang Berjalan Sekarang
    $periode = date('Y');
    */
    $periode = "2019";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('periode =',$periode);
    return $this->db->count_all_results();
  }

  //Hitung jumlah keseluruhan Pemohon (Card Box) aktor Pemohon bantuan
  public function jumlahPemohonBantuan(){
    /*Tahun Yang Sedang Berjalan Sekarang
    $periode = date('Y');
    */
    $periode = "2019";
    $email = $this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('email =', $email);
    $this->db->where('periode =',$periode);
    return $this->db->count_all_results();
  }

  //fungsi jumlah disetujui Pemohon Bantuan
  public function jumlahPemohonSetuju(){
    /*Tahun Yang Sedang Berjalan Sekarang
    $periode = date('Y');
    */
    $periode = "2019";
    $email = $this->session->userdata('email');
    $setuju = "Disetujui";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->where('statusPersetujuan =',$setuju);
    $this->db->where('email =', $email);
    $this->db->where('periode =',$periode);
    return $this->db->count_all_results();
  }

  //Hitung jumlah keseluruhan Penilaian (Card Box)
  public function jumlahPenilaian(){
    $hasil = 0;
    $this->db->select('*');
    $this->db->from('penilaian');
    $this->db->where('hasilPerhitungan =', $hasil);
    return $this->db->count_all_results();
  }

  //Hitung jumlah keseluruhan Penerima Bantuan Dinsos (Card Box)
  public function jumlahPenerimaBantuanDinsos(){
    $Pemberibantuan = "Dinas Sosial";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->where('pemberiBantuan =', $Pemberibantuan);
    return $this->db->count_all_results();
  }

  //Hitung jumlah keseluruhan Penerima Bantuan Kementrian PUPR (Card Box)
  public function jumlahPenerimaBantuanKementrianPUPR(){
    $Pemberibantuan = "Kementrian PUPR";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->where('pemberiBantuan =', $Pemberibantuan);
    return $this->db->count_all_results();
  }

  //Hitung jumlah keseluruhan User (Card Box)
  public function jumlahUser(){
    $this->db->select('*');
    $this->db->from('user');
    return $this->db->count_all_results();
  }

  //Chart Penerima Bantuan Kementrian PUPR
  function chartPenerimaBantuan(){
    $Pemberibantuan = "Kementrian PUPR";
    $this->db->from('pemohon');
    $this->db->join('pemilihan','pemilihan.noKTP=pemohon.noKTP');
    $this->db->group_by('kecamatan');
    $this->db->select('kecamatan');
    $this->db->select("count(*) as total");
    $this->db->where('pemberiBantuan =',$Pemberibantuan);
    $result=$this->db->get();
    return $result->result();
  }

  //Lihat Pendapat Bantuan
  function lihatPendapatBantuan(){
    /*Tahun Yang Sedang Berjalan Sekarang
    $periode = date('Y');
    */
    $periode= "2019";
    $email = $this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('periode =',$periode);
    $this->db->where('email =', $email);
    $result = $this->db->get();
    return $result->result();
  }
}
