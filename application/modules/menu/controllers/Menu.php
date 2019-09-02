<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller{
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
    $data['title'] = 'Admin | Menajemen Menu';
    $data['menu'] = $this->M_menu->menulist();

    $this->template->load('MasterAdmin','data-menu',$data);
  }
  public function tambah_menu()
  {
    $data['title'] = 'Admin | Tambah Menu Applikasi';
    $this->template->load('MasterAdmin','tambah_menu',$data);
  }
  function tambah_menu_proses()
  {
    $data['menu'] = $this->input->post('menu');
    $data['kode_menu'] = $this->input->post('kode_menu');
    $data['status_menu'] = $this->input->post('status_menu');
    $data['icon'] = $this->input->post('icon');

    $this->M_menu->tambah_menu($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Menu');
  }
  function edit_menu($id_menu)
  {
    $where = array('id_menu' => $id_menu);
    $data['title'] = 'Admin | Edit Menu Applikasi';
    $data['menu'] = $this->M_menu->edit_menu($where,'tbl_menu')->result();
    $this->template->load('MasterAdmin','edit_menu',$data);
  }
  function edit_menu_proses()
  {
    $id_menu = $this->input->post('id_menu');
    $menu = $this->input->post('menu');
    $kode = $this->input->post('kode_menu');
    $icon = $this->input->post('icon');
    $status = $this->input->post('status_menu');

    $data = array(
      'id_menu'     => $id_menu,
      'menu'        => $menu,
      'kode_menu'   => $kode,
      'icon'        => $icon,
      'status_menu' => $status
    );
    $where = array(
      'id_menu'     => $id_menu
    );
    $this->M_menu->update_menu($where,$data,'tbl_menu');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengedit Data!
                </div>");
      redirect('Menu');
  }
  function hapus_menu($param = 0)
	{
		$this->M_menu->hapus_menu($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Menu');
	}
}
