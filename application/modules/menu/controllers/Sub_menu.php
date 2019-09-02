<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_menu extends MX_Controller{
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
    $data['title'] = 'Admin | Sub Menu';
    $data['sub_menu'] = $this->M_menu->subs();
    $this->template->load('MasterAdmin','data-sub-menu',$data);
  }
  public function tambah_sub_menu()
  {
    $data['title'] = 'Admin | Tambah Sub Menu';
    $data['menu'] = $this->db->query("SELECT * FROM tbl_menu ORDER BY kode_menu")->result();
    $this->template->load('MasterAdmin','tambah_sub_menu',$data);
  }
  function tambah_sub_menu_proses()
  {
    $data['sub_menu'] = $this->input->post('sub_menu');
    $data['id_menu'] = $this->input->post('id_menu');
    $data['modul'] = $this->input->post('modul');
    $data['function'] = $this->input->post('function');
    $data['kode_sub_menu'] = $this->input->post('kode_sub_menu');
    $data['status_sub'] = $this->input->post('status_sub');
    $this->M_menu->simpan_sub_menu($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Menu/Sub_menu');
  }
  function edit_sub_menu($id_sub_menu)
  {
    $where = array('id_sub_menu' => $id_sub_menu);
    $data['title'] = 'Admin | Edit Menu Applikasi';
    $data['submenu'] = $this->M_menu->edit_sub_menu($where,'tbl_sub_menu')->result();
    $data['menu'] = $this->db->query("SELECT * FROM tbl_menu ORDER BY kode_menu")->result();
    $this->template->load('MasterAdmin','edit_sub_menu',$data);
  }
  function edit_sub_menu_proses()
  {
    $id_sub_menu = $this->input->post('id_sub_menu');
    $sub_menu = $this->input->post('sub_menu');
    $kode_sub_menu = $this->input->post('kode_sub_menu');
    $modul = $this->input->post('modul');
    $function = $this->input->post('function');
    $status = $this->input->post('status_sub');

    $data = array(
      'id_sub_menu'     => $id_sub_menu,
      'sub_menu'        => $sub_menu,
      'kode_sub_menu'   => $kode_sub_menu,
      'modul'           => $modul,
      'function'        => $function,
      'status_sub'      => $status
    );
    $where = array(
      'id_sub_menu'     => $id_sub_menu
    );
    $this->M_menu->update_sub_menu($where,$data,'tbl_sub_menu');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengedit Data!
                </div>");
      redirect('Menu/Sub_menu');
  }
  function hapus_sub_menu($param = 0)
	{
		$this->M_menu->hapus_sub_menu($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Menu/Sub_menu');
	}
}
