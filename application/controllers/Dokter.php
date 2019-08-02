<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Dokter extends BaseController {
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->database();
      $this->load->helper('url');
      $this->load->model('M_dokter');
      $this->cek_login();
  }
  public function index()
  {
    $data['title'] = 'Admin | Dokter';
    $data['dokter'] = $this->M_dokter->dokter();

    $this->template->load('MasterAdmin','Dokter/data-dokter',$data);
  }
  public function tambah_dokter()
	{
		$data['title'] = 'Admin | Registrasi Pasien Baru';
    $data['agama'] = $this->db->query("SELECT * FROM tbl_agama")->result();
    $data['spesialis'] = $this->db->query("SELECT * FROM tbl_spesialis")->result();
		$this->template->load('MasterAdmin','Dokter/tambah_dokter',$data);
	}
	public function tambah_dokter_proses()
	{
		$data['id_dokter'] 		= $this->input->post('id_dokter');
		$data['nama_dokter'] 	= $this->input->post('nama_dokter');
		$data['jekel'] = $this->input->post('jekel');
		$data['tmp_lahir'] 	= $this->input->post('tmp_lahir');
		$data['tgl_lahir'] 	= $this->input->post('tgl_lahir');
		$data['id_agama'] 			= $this->input->post('id_agama');
		$data['alamat'] 				= $this->input->post('alamat');
		$data['no_kontak_dokter'] 			= $this->input->post('no_kontak_dokter');
    $data['id_spesialis'] 			= $this->input->post('id_spesialis');
    $data['no_izin_praktek'] 			= $this->input->post('no_izin_praktek');
		$this->M_dokter->simpan_dokter($data);
		$this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Dokter');
	}
	public function edit_dokter_proses()
	{
		$id_dokter = $this->input->post('id_dokter');
		$nama_dokter = $this->input->post('nama_dokter');
		$jekel = $this->input->post('jekel');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$id_agama = $this->input->post('id_agama');
		$alamat = $this->input->post('alamat');
		$no_kontak_dokter = $this->input->post('no_kontak_dokter');
    $id_spesialis = $this->input->post('id_spesialis');
    $no_izin_prakter = $this->input->post('no_izin_praktek');
    $alamat = $this->input->post('alamat');

		$data = array(
			'id_dokter' 			=> $id_dokter,
			'nama_dokter' 		=> $nama_dokter,
			'jekel' 	        => $jekel,
			'tmp_lahir' 	  => $tmp_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'id_agama'		=> $id_agama,
			'alamat'				=> $alamat,
			'no_kontak_dokter'					=> $no_kontak_dokter,
			'id_spesialis'				=> $id_spesialis
		);

		$where = array(
			'id_dokter' 			=> $id_dokter,
		);

		$this->M_dokter->update_dokter($data,$where,'tbl_dokter');
		$this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Dokter');
	}
	function hapus_dokter($param = 0)
	{
		$this->M_dokter->hapus_dokter($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Dokter');
	}
}
