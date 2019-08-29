<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends MX_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model('M_jadwal');
      Modules::run('Auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Admin | Dokter';
    $data['polik'] = $this->db->query("SELECT * FROM tbl_poliklinik")->result();
    $data['dokter'] = $this->db->query("SELECT * FROM tbl_dokter")->result();
    $data['jadwal'] = $this->M_jadwal->jadwal();

    $this->template->load('MasterAdmin','Jadwal/data-jadwal',$data);
  }
  public function tambah_jadwal()
	{
		$data['title'] = 'Admin | Registrasi Pasien Baru';
    $data['polik'] = $this->db->query("SELECT * FROM tbl_poliklinik")->result();
    $data['dokter'] = $this->db->query("SELECT * FROM tbl_dokter")->result();
		$this->template->load('MasterAdmin','Jadwal/tambah_jadwal',$data);
	}
	public function tambah_jadwal_proses()
	{
		$data['id_jadwal'] 		= $this->input->post('id_jadwal');
		$data['id_dokter'] 	= $this->input->post('id_dokter');
		$data['id_poliklinik'] = $this->input->post('id_poliklinik');
		$data['jadwal'] 	= $this->input->post('jadwal');
		$data['jam'] 	= $this->input->post('jam');
		$data['is_active'] 			= $this->input->post('is_active');
		$this->M_jadwal->simpan_jadwal($data);
		$this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Jadwal');
	}
	function edit_jadwal_proses()
	{
		$id_jadwal      = $this->input->post('id_jadwal');
		$id_dokter      = $this->input->post('id_dokter');
		$id_poliklinik  = $this->input->post('id_poliklinik');
		$jadwal         = $this->input->post('jadwal');
		$jam            = $this->input->post('jam');
		$is_active      = $this->input->post('is_active');

		$data = array(
      'id_jadwal'       => $id_jadwal,
			'id_dokter' 		  => $id_dokter,
			'id_poliklinik' 	=> $id_poliklinik,
			'jadwal' 	        => $jadwal,
			'jam'		          => $jam,
			'is_active'		    => $is_active,
		);

		$where = array(
			'id_jadwal' 			=> $id_jadwal,
		);

		$this->M_jadwal->update_jadwal($where,$data,'tbl_praktek');
		$this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Jadwal');
	}
	function hapus_jadwal($param = 0)
	{
		$this->M_jadwal->hapus_jadwal($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Jadwal');
	}
}
