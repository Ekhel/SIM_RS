<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper(array('url','form'));
			$this->load->model(array('M_users','data_induk/M_induk'));
      Modules::run('Auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Admin | Pengguna';
    $data['user'] = $this->M_users->users();

    $this->template->load('MasterAdmin','users/pengguna',$data);
  }
  public function level_user()
  {
    $data['title'] = 'admin | User Level Management';
    $data['level'] = $this->M_users->level();

    $this->template->load('MasterAdmin','users/level',$data);
  }
  public function tambah_user_level_proses()
  {
    $data['id_level'] = $this->input->post('id_level');
    $data['level'] = $this->input->post('level');

    $this->M_users->simpan_level($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Users/level_user');
  }
  function edit_level_proses()
  {
    $id_level = $this->input->post('id_level');
    $level = $this->input->post('level');

    $data = array(
      'id_level'    => $id_level,
      'level'       => $level
    );
    $where = array(
      'id_level'    => $id_level
    );
    $this->M_users->edit_level($where,$data,'tb_user_level');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengedit Data!
                </div>");
    redirect('Users/level_user');
  }

  function hapus_level($param = 0)
  {
    $this->M_users->hapus_level($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Users/level_user');
  }
  public function tambah_pengguna()
  {
    $data['title'] = 'Admin | Tambah Pengguna';
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $data['pegawai'] = $this->M_induk->pegawai();
    $data['polik'] = $this->db->query("SELECT * FROM tbl_poliklinik")->result();
    $this->template->load('MasterAdmin','users/tambah_user',$data);
  }
  public function tambah_pengguna_proses()
  {
    $data['nama'] = $this->input->post('nama');
		$data['sandi'] = md5($this->input->post('sandi'));
		$data['sandi_deskripsi'] = $this->input->post('sandi');
		$data['email'] = $this->input->post('email');
		$data['status'] = $this->input->post('status');
		$data['level'] = $this->input->post('level');
		$data['nik'] = $this->input->post('nik');
    $data['id_poliklinik'] = $this->input->post('id_poliklinik');
		$this->M_users->tambah_pengguna($data);
		$this->session->set_flashdata("simpan","
						<div class='alert alert-success fade in'>
								<a href='#' class='close' data-dismiss='alert'>&times;</a>
								<strong>Success !</strong> Berhasil Manambah Pengguna !
						</div>");
		redirect('Users');
  }
  public function edit_users($id_user)
  {
    $data['title'] = 'Edit Pengguna';
    $data['detail'] = $this->db->get_where('tb_user',['id_user' => $id_user])->row_array();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $data['pegawai'] = $this->M_induk->pegawai();
    $data['polik'] = $this->db->query("SELECT * FROM tbl_poliklinik")->result();
    $this->template->load('MasterAdmin','u-users',$data);
  }
  function edit_user_proses()
  {
    $id_user = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $sandi = md5($this->input->post('sandi'));
    $sandi_deskripsi = $this->input->post('sandi');
    $email = $this->input->post('email');
    $status = $this->input->post('status');
    $level = $this->input->post('level');
    $nik = $this->input->post('nik');
    $id_poliklinik = $this->input->post('id_poliklinik');

    $data = array(
      'id_user'         => $id_user,
      'nama'            => $nama,
      'sandi'           => $sandi,
      'sandi_deskripsi' => $sandi_deskripsi,
      'email'           => $email,
      'status'          => $status,
      'level'           => $level,
      'nik'             => $nik,
      'id_poliklinik'   => $id_poliklinik
    );

    $where = array(
      'id_user'         => $id_user
    );

    $this->M_users->edit_users($where,$data,'tb_user');
    $this->session->set_flashdata("update","
						<div class='alert alert-success fade in'>
								<a href='#' class='close' data-dismiss='alert'>&times;</a>
								<strong>Success !</strong> Berhasil Mengedit Data !
						</div>");
    redirect('users');
  }
  public function delete_users($id_user)
  {
    $data['title'] = 'Hapus Pengguna';
    $data['detail'] = $this->db->get_where('tb_user',['id_user' => $id_user])->row_array();

    $this->template->load('MasterAdmin','d-users',$data);
  }
  function delete_users_proses($id_user = 0)
  {
    $id_user = $this->input->post('id_user');
    $this->M_users->delete_users($id_user);
    $this->session->set_flashdata("hapus","
        <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Berhasil Menghapus Data!
        </div>"
    );
    redirect('users');
  }
}
