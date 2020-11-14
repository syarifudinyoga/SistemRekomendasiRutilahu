<?php
class Pemilihan_model extends CI_Model{

  //Fungsi Tampil Pemohon
  function lihatPendapatBantuan(){
    $this->db->select('*');
    $this->db->from('maut');
    $result = $this->db->get();
    return $result->result();
  }

  function lihatPemilihanBantuan(){
    //nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y') ;
    $periode= "2019";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->order_by('nilaiAkhir', 'desc');
    $this->db->where('periode =',$periode);
    $result = $this->db->get();
    return $result->result();
  }

  function lihatPemilihanBantuanKementrianPUPR(){
    //nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y') ;
    $periode= "2019";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->order_by('nilaiAkhir', 'desc');
    $this->db->where('periode =',$periode);
    $result = $this->db->get();
    return $result->result();
  }


  function lihatPemohon(){
    $this->db->select('*');
    $this->db->from('pemohon');
    $result = $this->db->get();
    return $result->result();
  }

  function Max(){
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
    $result = $this->db->get();
    return $result->result();
  }

  function Min(){
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
    $result = $this->db->get();
    return $result->result();
  }

  //Lihat hasil Perhitungan secara Urut Dari besar ke kecil
  function lihatRekomendasiPendapatBantuan(){
    $periode = "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y');
    $statusRekomendasi = "Dinas Sosial";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('periode =',$periode);
    $this->db->where('statusRekomendasi !=', $statusRekomendasi);
    $this->db->order_by('nilaiAkhir', 'desc');
    $result = $this->db->get();
    return $result->result();
  }

  //Lihat hasil Perhitungan secara Urut Dari besar ke kecil
  function lihatRekomendasiPendapatBantuanPemohonBantuan(){
    $periode = "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y');
    $email = $this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('periode =',$periode);
    $this->db->where('email =',$email);
    $this->db->order_by('nilaiAkhir', 'desc');
    $result = $this->db->get();
    return $result->result();
  }

  //pilih penerima bantuan dari status rekomendasi Dinas Sosial untuk Aktor Kementrian PUPR
  function lihatRekomendasiPendapatBantuanKementrianPUPR(){
    $statusRekomendasi= "Dinas Sosial";
    $pemberiBantuan= "Kementrian PUPR";
    $pemberiBantuan1= "Dinas Sosial";
    $periode= "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y');
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('periode =',$periode);
    $this->db->where('statusRekomendasi =',$statusRekomendasi);
    $this->db->where('pemberiBantuan !=', $pemberiBantuan);
    $this->db->where('pemberiBantuan !=', $pemberiBantuan1);
    $this->db->order_by('nilaiAkhir', 'desc');
    $result = $this->db->get();
    return $result->result();
  }


  //pilih penerima bantuan dari status rekomendasi Dinas Sosial untuk Aktor Dinas Sosial
  function pilihRekomendasiPendapatBantuanDinsos(){
    $statusRekomendasi= "Dinas Sosial";
    $pemberiBantuan = "Kementrian PUPR";
    $pemberiBantuan1 = "Dinas Sosial";
    $periode= "2019";//nanti kalo udah bisa diganti ke tahun selanjutnya pake query tahun yang sedang berjalan $periode=date('Y')
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('periode =',$periode);
    $this->db->where('statusRekomendasi =',$statusRekomendasi);
    $this->db->where('pemberiBantuan !=',$pemberiBantuan);
    $this->db->where('pemberiBantuan !=',$pemberiBantuan1);
    $this->db->order_by('nilaiAkhir', 'desc');
    $result = $this->db->get();
    return $result->result();
  }

  //Fungsi untuk memilih penerima bantuan
  function pilihRekomendasiPendapatBantuan($table,$data,$where){
    $this->db->where('idPemilihan', $where);
    $this->db->update($table,$data);
  }

  //Fungsi Cetak Laporan Untuk Aktor Dinas Sosial
  public function cetakLaporan(){
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->join('pemilihan','pemilihan.noKTP=pemohon.noKTP');
    $this->db->where('periode =',$this->input->post('periode'));
    $this->db->order_by('nilaiAkhir', 'desc');
    $result=$this->db->get();
    return $result->result();
  }

  //Fungsi Untuk Cetak Laporan Kementrian PUPR
  public function cetakLaporanKementrianPUPR(){
    $pemberiBantuan = "Kementrian PUPR";
    $this->db->select('*');
    $this->db->from('pemohon');
    $this->db->join('pemilihan','pemilihan.noKTP=pemohon.noKTP');
    $this->db->where('periode =',$this->input->post('periode'));
    $this->db->where('pemberiBantuan =', $pemberiBantuan);
    $this->db->order_by('nilaiAkhir', 'desc');
    $result=$this->db->get();
    return $result->result();
  }

  //Menjumlahkan Total bantuan dari KementrianPUPR
  public function totalBantuanKementrianPUPR(){
    $Pemberibantuan = "Kementrian PUPR";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('pemberiBantuan =', $Pemberibantuan);
    $this->db->where('periode =',$this->input->post('periode'));
    return $this->db->count_all_results();
  }

  //Menjumlahkan Total bantuan dari Dinas Sosial
  public function totalBantuanDinsos(){
    $Pemberibantuan = "Dinas Sosial";
    $this->db->select('*');
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('pemberiBantuan =', $Pemberibantuan);
    $this->db->where('periode =',$this->input->post('periode'));
    return $this->db->count_all_results();
  }

  //fungsi lihat detail pendapat bantuan aktor Dinas Sosial
  public function lihatDetailPendapatBantuan($where){
    $this->db->from('pemilihan');
    $this->db->join('pemohon','pemohon.noKTP=pemilihan.noKTP');
    $this->db->where('idPemilihan =',$where);
    $result = $this->db->get();
    return $result->result();
  }

  //fungsi pilih periode di cetak laporan
  public function lihatPeriode(){
    $this->db->group_by('periode');
    $this->db->select('periode');
    $this->db->select("count(*) as total");
    return $this->db->from('pemohon')->get()->result();
  }
}
