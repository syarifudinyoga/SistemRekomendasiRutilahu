<?php
class Pemohon extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
        redirect('user');
    }
    $this->load->model('pemohon_model');
  }

  //Load View Login
  function index(){
    $this->load->view('login_view');
  }

  //Fungsi Kelola Pemohon
  function KelolaPemohon(){
    $data['pemohon'] = $this->pemohon_model->lihatPemohon();
    $data['pemohon_setuju'] = $this->pemohon_model->lihatPemohonSetuju();
    $this->load->view('PemohonBantuan/lihat_pemohon', $data);
  }

  //Redirect ke form Tambah Pemohon
  public function idxPemohon(){
    $this->load->view('PemohonBantuan/form_tambah_pemohon');
  }

  //Tambah Pemohon
  public function tambahPemohon(){
    $NoKTP = $this->input->post('noKTP');
    $Nama = $this->input->post('namaPemohon'); 
    $JenisKelamin = $this->input->post('jenisKelamin');
    $Alamat = $this->input->post('alamat');
    $Kecamatan = $this->input->post('kecamatan');
    $email = $this->session->userdata('email');
    $periode = "2019"; //Untuk Otomatis Tahun Sekarang date('Y');
    $Persetujuan = "Belum Disetujui";
    //get Pdf
    $config['upload_path'] = './proposal';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = '2048';  //2MB max
    $config['file_name'] = $_FILES['proposal']['name'];
    $this->upload->initialize($config);
    if (!empty($_FILES['proposal']['name'])) {
      if ( $this->upload->do_upload('proposal') ) {
        $file = $this->upload->data();
    $data = array (
      'noKTP' => $NoKTP,
      'namaPemohon' => $Nama,
      'jenisKelamin' => $JenisKelamin,
      'alamat' => $Alamat,
      'kecamatan' => $Kecamatan,
      'email' => $email,
      'periode' => $periode,
      'statusPersetujuan' => $Persetujuan,
      'proposal' => $file['file_name']
    );
    if($data == null) {
      $this->session->set_flashdata('msg',
        '<div class="alert alert-danger">
        <p>Data <strong>Pemohon </strong> Gagal Ditambahkan </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPemohon();
    }else{
      $this->session->set_flashdata('msg',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Pemohon </strong> Berhasil Ditambahkan </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->tambahPemohon('pemohon', $data);
        $this->KelolaPemohon();
    };
    }else {
      die("gagal upload");
    }
    }else {
      echo "tidak masuk";
    }
  }

  //Direct Ke Form Edit Pemohon
  public function formEditPemohon(){
    $NoKTP = $this->input->post('noKTP');
    $data['pemohon'] = $this->pemohon_model->urutPemohon($NoKTP);
    $this->load->view('PemohonBantuan/form_edit_pemohon', $data);
  }

  //Ubah Pemohon
  public function ubahPemohon(){
    $NoKTP = $this->input->post('noKTP');
    $Nama = $this->input->post('namaPemohon'); 
    $JenisKelamin = $this->input->post('jenisKelamin');
    $Alamat = $this->input->post('alamat');
    $Kecamatan = $this->input->post('kecamatan');
    $email = $this->session->userdata('email');
    $periode = "2019"; //Untuk Otomatis Tahun Sekarang date('Y');
    $Persetujuan = "Belum Disetujui";
    //get Pdf
    $config['upload_path'] = './proposal';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = '2048';  //2MB max
    $config['file_name'] = $_FILES['proposal']['name'];
    $this->upload->initialize($config);
    if (!empty($_FILES['proposal']['name'])) {
      if ( $this->upload->do_upload('proposal') ) {
        $file = $this->upload->data();
    $data = array (
      'noKTP' => $NoKTP,
      'namaPemohon' => $Nama,
      'jenisKelamin' => $JenisKelamin,
      'alamat' => $Alamat,
      'kecamatan' => $Kecamatan,
      'email' => $email,
      'periode' => $periode,
      'statusPersetujuan' => $Persetujuan,
      'proposal' => $file['file_name']
    );
    if($data == null) {
      $this->session->set_flashdata('edt',
        '<div class="alert alert-danger">
        <p>Data <strong>Pemohon </strong> Gagal Diubah </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPemohon();
    }else{
      $this->session->set_flashdata('edt',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Pemohon </strong> Berhasil Diubah </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->ubahPemohon('pemohon',$data,$NoKTP);
        $this->KelolaPemohon();
    };
    }else {
      die("gagal upload");
    }
    }else {
      echo "tidak masuk";
    }
  }

  //Setujui Pemohon
  public function setujuPemohon(){
    $NoKTP = $this->input->post('noKTP');
    $Setuju = "Disetujui";
    $data = array (
      'noKTP' => $NoKTP,
      'statusPersetujuan' => $Setuju
    );
    $data1 = array (
      'noKTP' => $NoKTP
    );
    if($data == null && $data1 == null) {
      $this->session->set_flashdata('msg',
        '<div class="alert alert-danger">
        <p>Data <strong>Pemohon </strong> Tidak Disetujui </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaPemohonDinsos();
    }else{
      $this->session->set_flashdata('msg',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Pemohon </strong> Disetujui </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->setujuPemohon('pemohon',$data,$NoKTP);
        $this->pemohon_model->tambahNoKtpPenilaian('penilaian', $data1);
        $this->KelolaPemohonDinsos();
    };
  }

    public function printProposal(){
      $noKTP = $this->input->post('noKTP');
      $data['pemohon'] = $this->pemohon_model->urutIdP($noKTP);
      $this->load->view('PemohonBantuan/proposal', $data);
    }

    function printProposalDinsos(){
      $noKTP = $this->input->post('noKTP');
      $data['pemohon'] = $this->pemohon_model->urutIdP($noKTP);
      $this->load->view('DinasSosial/proposal', $data);
    }

  //================================================================================================Aktor Dinsos
  function KelolaPemohonDinsos(){
    $data['pemohon'] = $this->pemohon_model->lihatPemohonDinsos();
    $data['pemohonSetuju'] = $this->pemohon_model->lihatPemohonDinsosSetuju();
    $this->load->view('DinasSosial/lihat_pemohon_dinsos', $data);
  }

  //Fungsi Kelola User
  function KelolaUser(){
    $data['user'] = $this->pemohon_model->lihatUser();
    $this->load->view('DinasSosial/lihat_user', $data);
  }

  //Direct Ke Form Edit User
  public function formEditUser(){
    $email = $this->input->post('email');
    $data['user'] = $this->pemohon_model->urutUser($email);
    $this->load->view('DinasSosial/form_edit_user', $data);
  }

  public function ubahUser(){
    $email = $this->input->post('email');
    $password = md5($this->input->post('password')); 
    $nama = $this->input->post('nama');
    $level = $this->input->post('level');
    $data = array (
      'email' => $email,
      'password' => $password,
      'nama' => $nama,
      'level' => $level
    );
    if($data == null) {
      $this->session->set_flashdata('eus',
        '<div class="alert alert-danger">
        <p>Data <strong>Pemohon </strong> Gagal Diubah </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaUser();
    }else{
      $this->session->set_flashdata('eus',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Pemohon </strong> Berhasil Diubah </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->ubahUser('user', $data,$email);
        $this->KelolaUser();
    };
  }

  public function idxUser(){
    $this->load->view('DinasSosial/form_tambah_user');
  }

  //Fungsi Tambah User
  public function tambahUser(){
    $email = $this->input->post('email');
    $password = md5($this->input->post('password')); 
    $nama = $this->input->post('nama');
    $level = $this->input->post('level');
    $aktivasi = "0";
    $data = array (
      'email' => $email,
      'password' => $password,
      'nama' => $nama,
      'level' => $level
    );
    //token (angkanya bebas)
    $token = base64_encode(random_bytes(32));
    $user_token =[
      'email' => $email,
      'token' => $token
    ];
    if($data == null) {
      $this->session->set_flashdata('usr',
        '<div class="alert alert-danger">
        <p>Data <strong>Pemohon </strong> Gagal Ditambahkan </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaUser();
    }else{
      $this->session->set_flashdata('usr',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>Pemohon </strong> Berhasil Ditambahkan </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->tambahUser('user', $data);
        $this->pemohon_model->buatToken('tmp_user', $user_token);
        $this->_sendEmail($token);
        $this->KelolaUser();
    };
  }

  //Fungsi Kirim email ke server
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

  //Fungsi Verifikasi ke email
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

  public function hapusUser(){
    $email =$this->input->post('email');
    if($email == null) {
      $this->session->set_flashdata('hus',
        '<div class="alert alert-danger">
        <p>Data <strong>User </strong> Gagal Dihapus </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->KelolaUser();
    }else{
      $this->session->set_flashdata('hus',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data <strong>User </strong> Berhasil Dihapus </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        $this->pemohon_model->hapusUser($email);
        $this->KelolaUser();
    };
  }

  public function lihatDetailUser(){
    $email = $this->input->post('email');
    $data['user'] = $this->pemohon_model->lihatDetailUser($email);
    $this->load->view('DinasSosial/lihat_detail_user', $data);
  }
}
