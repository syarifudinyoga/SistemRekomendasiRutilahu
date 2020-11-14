<?php
class User extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('user_model');

  }
//Load View Login
  function index(){
    $this->load->view('login_view');
  }
//Fungsi Autentikasi
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $aktivasi = "1";
    $validate = $this->user_model->validate($email,$password,$aktivasi);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nama  = $data['nama'];
        $email = $data['email'];
        $level = $data['level'];
        $aktivasi = $data['aktivasi'];
        $sesdata = array(
            'email'     => $email,
            'nama'      => $nama,
            'level'     => $level,
            'aktivasi' => $aktivasi,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        //Akses Login Kesekertariatan
        if($level === 'Admin'){
            redirect('user/DinasSosial');
        //Akses Login Camat
        }elseif($level === 'KementrianPUPR'){
            redirect('user/KementrianPUPR');
        //Akses Login Bagian Penerima
        }else{
            redirect('user/PemohonBantuan');
        }
    }else{
        echo $this->session->set_flashdata('msg','Email Atau Password Tidak Sesuai');
        redirect('user');
    }
  }

  //fungsi login Dinsos
  function DinasSosial(){
    if($this->session->userdata('level')==='Admin'){
      $data['chart'] = $this->user_model->chartPemohonBantuan();
      $data['pemohon'] = $this->user_model->lihatPemohon();
      $data['jumlahPemohon'] = $this->user_model->jumlahPemohon();
      $data['jumlahPenilaian'] = $this->user_model->jumlahPenilaian();
      $data['jumlahPenerimaBantuanDinsos'] = $this->user_model->jumlahPenerimaBantuanDinsos();
      $data['jumlahUser'] = $this->user_model->jumlahUser();
      $this->load->view('DinasSosial/dashboard_dinsos',$data);
    }else{
        echo "Access Dicekal";
    }
  }

  //Fungsi Login Kementrian PUPR

  //Fungsi Login PemohonBantuan
  function PemohonBantuan(){
    if($this->session->userdata('level')==='PemohonBantuan'){
      $data['pemohon'] = $this->user_model->lihatPendapatBantuan();
      $data['jumlahPemohon'] = $this->user_model->jumlahPemohonBantuan();
      $data['jumlahPemohonSetuju'] = $this->user_model->jumlahPemohonSetuju();
      $this->load->view('PemohonBantuan/dashboard_pemohonbantuan',$data);
    }else{
        echo "Access Dicekal";
    }
  }

  //Fungsi Login PemohonBantuan
  function KementrianPUPR(){
    if($this->session->userdata('level')==='KementrianPUPR'){
      $data['jumlahPemohon'] = $this->user_model->jumlahPemohon();
      $data['chart'] = $this->user_model->chartPenerimaBantuan();
      $data['jumlahPenerimaBantuanKementrianPUPR'] = $this->user_model->jumlahPenerimaBantuanKementrianPUPR();
      $this->load->view('KementrianPUPR/dashboard_KementrianPUPR',$data);
    }else{
        echo "Access Dicekal";
    }
}


//================================================================================Fungsi Untuk Halaman Tamu (Tidak Memiliki Hak Akses)
//Fungsi Buat Akun
function formBuatAkun(){
  $this->load->view('form_buat_akun');
}
//Fungsi Buat Akun
function buatAkun(){

  $email = $this->input->post('email');
  $password = md5($this->input->post('password'));
  $nama = $this->input->post('nama');
  $level = $this->input->post('level');
  $aktivasi = "0";
  $data = array (
      'email' => $email,
      'password' => $password,
      'nama' => $nama,
      'level' => $level,
      'aktivasi' => $aktivasi
    );

    //token (angkanya bebas)
    $token = base64_encode(random_bytes(32));
    $user_token =[
      'email' => $email,
      'token' => $token
    ];

    $this->user_model->buatAkun('user', $data);
    $this->user_model->buatToken('tmp_user', $user_token);

    $this->_sendEmail($token);

    $this->index();
}

private function _sendEmail($token){
  $config =[
    'protocol' => "smtp",
    'smtp_host' => "ssl://smtp.gmail.com",
    'smtp_user' => "dinsossumedang15@gmail.com",
    'smtp_pass' => "dinsos123",
    'smtp_port' => 465,
    'mailtype' => "html",
    'charset' => "utf-8",
    'newline' => "\r\n"
  ];

  $this->load->library('email',$config);
  $this->email->initialize($config);  //tambahkan baris ini
  $this->email->from('dinsossumedang15@gmail.com','Dinas Sosial Sumedang');
  $this->email->to($this->input->post('email'));
  $this->email->subject('Verifikasi Akun');
  $this->email->message('klik link ini untuk memverifikasi akun : <a href="' . base_url() . 'index.php/user/verifikasi?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');

  if($this->email->send()){
    return true;
  } else {
    echo $this->email->print_debugger();
    die;
  }
}

public function verifikasi(){
  $email = $this->input->get('email');
  $token = $this->input->get('token');

  //cek email di database diambil sebaris
  $user = $this->db->get_where('user', ['email => $email'])->row_array();

  //kondisi ketika usernya ada atau tidak
  if($user){
    $user_token = $this->db->get_where('tmp_user', ['token => $token'])->row_array();
    //kondisi ketika user token nya ada dan tidak
    if($user_token){
      //aktivasi
      $this->db->set('aktivasi', 1);
      $this->db->where('email', $email);
      $this->db->update('user');

      //hapus tokennya
      $this->db->delete('tmp_user', ['email => $email']);
      $this->index();
    } else {
      echo "Token Salah";
    $this->index();
    }
  } else {
    echo "Aktivasi Akun gagal";
    $this->index();
  }
}

//Fungsi Logout
function logout(){
  $this->session->sess_destroy();
  redirect('user');//redirect ke halaman index user login_view
}
}
