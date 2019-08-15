<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Users extends BaseController {
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper(array('url','form'));
			$this->load->model('M_users');
      $this->cek_login();
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
}
