<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_level extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model('M_menu');
			Modules::run('Auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Menu Level Akses';
    $data['menu_level'] = $this->M_menu->menu_level();
    $data['menu'] = $this->db->query("SELECT * FROM tbl_menu ORDER BY kode_menu")->result();
    $data['submenu'] = $this->db->query("SELECT * FROM tbl_sub_menu")->result();
    $data['level'] = $this->db->query("SELECT * FROM tb_user_level")->result();
    $this->template->load('MasterAdmin','menu_level/r-menu-level',$data);
  }
  function create_menu_level_proses()
  {
    $id_level = $this->input->post('id_level');
    $id_menu = $this->input->post('id_menu');
    $id_sub_menu = $this->input->post('id_sub_menu');

    $cek = $this->db->query("SELECT * FROM tbl_menu_level WHERE id_sub_menu = '$id_sub_menu' AND id_level = '$id_level' ")->result();

    if(count($cek) >= 1){
      $this->session->set_flashdata(
        "validate_simpan",
        "<div class='alert alert-warning fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Peringatan !!</strong> Data Yang anda Coba Tambahkan Sudah Ada Pada Tabel Menu Level Silahkan Cek Terlebih dahulu.
        </div>"
      );
      redirect('Menu/Menu_level');
    }
    else{
      $data = array(
        'id_level'    => $id_level,
        'id_menu'     => $id_menu,
        'id_sub_menu' => $id_sub_menu,
      );
      $this->M_menu->create_menu_level($data);
      $this->session->set_flashdata(
        "simpan",
        "<div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success!</strong> Berhasil Menambahkan Data.
        </div>"
      );
      redirect('Menu/Menu_level');
    }
  }
  function update_menu_level_proses()
  {
    $id_menu_level = $this->input->post('id_menu_level');
    $id_level = $this->input->post('id_level');
    $id_menu = $this->input->post('id_menu');
    $id_sub_menu = $this->input->post('id_sub_menu');

    $data = array(
      'id_menu_level'     => $id_menu_level,
      'id_level'          => $id_level,
      'id_menu'           => $id_menu,
      'id_sub_menu'       => $id_sub_menu
    );

    $where = array(
      'id_menu_level'     => $id_menu_level
    );

    $this->M_menu->update_menu_level($where,$data,'tbl_menu_level');
    $this->session->set_flashdata(
      "update",
      "<div class='alert alert-success fade in'>
          <a href='#' class='close' data-dismiss='alert'>&times;</a>
          <strong>Success!</strong> Berhasil Menambahkan Data.
      </div>"
    );
    redirect('Menu/Menu_level');
  }
  function hapus_menu_level($param = 0)
	{
		$this->M_menu->hapus_menu_level($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Menu/Menu_level');
	}
}
