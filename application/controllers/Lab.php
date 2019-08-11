<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Lab extends BaseController {
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model('M_lab');
      $this->cek_login();
  }
  function index()
  {
    $data['title'] = 'Admin | Jenis Pemeriksaan';
    $data['periksa'] = $this->M_lab->lab();
    $this->template->load('MasterAdmin','lab/jenispemeriksaan/data-jenispemeriksaan',$data);
  }
  function tambah_jenispemeriksaan()
  {
    $data['title'] = 'Admin | Tambah Jenis';
    $this->template->load('MasterAdmin','lab/jenispemeriksaan/tambah_jenis',$data);
  }
  function tambah_jenispemeriksaan_proses()
  {
    $data['id_jenisperiksa'] = $this->input->post('id_jenisperiksa');
    $data['nama_periksa'] = $this->input->post('nama_periksa');

    $this->M_lab->simpan_jenis($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Lab');
  }
  function edit_jenisperiksa_proses()
  {
    $id_jenisperiksa = $this->input->post('id_jenisperiksa');
    $nama_periksa = $this->input->post('nama_periksa');

    $data = array(
      'id_jenisperiksa'     => $id_jenisperiksa,
      'nama_periksa'        => $nama_periksa,
    );
    $where = array(
      'id_jenisperiksa'     => $id_jenisperiksa
    );
    $this->M_lab->edit_periksa($where,$data,'tbl_jenisperiksa');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Lab');
  }
  function hapus_jenis($param = 0)
	{
		$this->M_lab->hapus_jenis($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Lab');
	}
}
