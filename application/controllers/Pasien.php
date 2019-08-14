<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Pasien extends BaseController {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model('M_pasien');
			$this->cek_login();
	}
	public function index()
	{
		$data['title'] = 'Admin | Pasien';
		$data['pasien'] = $this->M_pasien->pasien();
		$data['polik'] = $this->db->query("SELECT * FROM tbl_poliklinik")->result();
		$data['lab'] = $this->db->query("SELECT * FROM tbl_jenisperiksa")->result();
		$this->template->load('MasterAdmin','pasien/data_pasien',$data);
	}
	public function registrasi_pasien()
	{
		$data['title'] = 'Admin | Registrasi Pasien Baru';
		$this->template->load('MasterAdmin','pasien/registrasi',$data);
	}
	public function registrasi_pasien_proses()
	{
		$data['nama_pasien'] 		= $this->input->post('nama_pasien');
		$data['jenis_kelamin'] 	= $this->input->post('jenis_kelamin');
		$data['golongan_darah'] = $this->input->post('golongan_darah');
		$data['tempat_lahir'] 	= $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] 	= $this->input->post('tanggal_lahir');
		$data['nama_ibu'] 			= $this->input->post('nama_ibu');
		$data['alamat'] 				= $this->input->post('alamat');
		$data['no_kontak'] 			= $this->input->post('no_kontak');
		$data['petugas'] 				= $this->input->post('petugas');
		$data['date_created'] 	= $this->input->post('date_created');
		$this->M_pasien->simpan_pasien($data);
		$this->session->set_flashdata("registrasi","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Pasien');
	}
	public function edit_pasien_proses()
	{
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$golongan_darah = $this->input->post('golongan_darah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$nama_ibu = $this->input->post('nama_ibu');
		$alamat = $this->input->post('alamat');
		$no_kontak = $this->input->post('no_kontak');
		$petugas = $this->input->post('petugas');
		$date_created = $this->input->post('date_created');

		$data = array(
			'id_pasien' 			=> $id_pasien,
			'nama_pasien' 		=> $nama_pasien,
			'jenis_kelamin' 	=> $jenis_kelamin,
			'golongan_darah' 	=> $golongan_darah,
			'tempat_lahir'		=> $tempat_lahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'nama_ibu'				=> $nama_ibu,
			'alamat'					=> $alamat,
			'no_kontak'				=> $no_kontak,
			'petugas'					=> $petugas,
			'date_created'		=> $date_created,
		);

		$where = array(
			'id_pasien' 			=> $id_pasien,
		);

		$this->M_pasien->update_pasien($where,$data,'tbl_pasien');
		$this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Pasien');
	}
	function hapus_pasien($param = 0)
	{
		$this->M_pasien->hapus_pasien($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Pasien');
	}
}
