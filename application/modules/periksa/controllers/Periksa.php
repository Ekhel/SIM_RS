<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periksa extends MX_Controller{

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper('url');
			$this->load->database();
      $this->load->model(array('M_periksa','lab/M_lab'));
			Modules::run('Auth/cek_login');
	}
  public function index()
  {
    $data['title'] 		= 'Admin | Daftar Pasien Control';
    $data['periksa'] 	= $this->M_periksa->periksa();
		$data['status'] 	= $this->M_periksa->sudah_periksa();
		$data['hitung'] 	= $this->M_periksa->hitung_pasien_hariini();
		$data['kode'] = $this->M_lab->kode_lab();
		$data['jenis_periksa'] = $this->M_lab->jenis_periksa_lab($this->uri->segment(3));
		$data['barang'] = $this->db->query("SELECT * FROM tbl_obatalkes ORDER BY kode_barang")->result();
    $this->template->load('MasterAdmin','periksa/data_periksa',$data);
  }

	// Level Akses Polik
	public function poliklinik()
	{
		$data['title'] 		= 'Admin | Daftar Pasien Control';
		$data['periksa'] 	= $this->M_periksa->periksa_user_polik();
		$data['status'] 	= $this->M_periksa->sudah_periksa();
		$data['hitung'] 	= $this->M_periksa->hitung_pasien_hariini_polik();
		$data['kode'] = $this->M_lab->kode_lab();
		$data['jenis_periksa'] = $this->M_lab->jenis_periksa_lab($this->uri->segment(3));
		$data['barang'] = $this->db->query("SELECT * FROM tbl_obatalkes ORDER BY kode_barang")->result();
    $this->template->load('MasterAdmin','periksa/polik/r-periksa-polik',$data);
	}

	public function jenis_pemeriksaan($id = 0)
  {
    $data['jenis_periksa'] = $this->M_lab->jenis_periksa_lab($this->uri->segment(3));
    $this->load->view('lab/pasien/data-jenis-periksalab',$data);
  }
	public function tambah_periksa_proses()
	{
		// Value Input
		$id_pasien = $this->input->post('id_pasien');
		$id_poliklinik = $this->input->post('id_poliklinik');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');

		// Triger Data
		$tanggal_hari_ini = date('Y-m-d');
		$cek = $this->db->query("SELECT id_pasien FROM tbl_periksa WHERE tanggal = '$tanggal_hari_ini' AND id_pasien = '$id_pasien' ")->result();

		// Cek Data Pada table apakah Sudah Tersedia
		if(count($cek) >= 1){
			$this->session->set_flashdata("validate_periksa","
					<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Gagal !</strong> Data Yang anda Input sudah tersedia Silahkan Cek pada Menu Periksa
					</div>");
				redirect('Pasien');
		}

		// Jika Kondisi Tidak Tersedia
		else{
			$data = array(
				'id_pasien'			=> $id_pasien,
				'id_poliklinik'	=> $id_poliklinik,
				'tanggal'				=> $tanggal,
				'status'				=> $status
			);

			// Simpan Data Pada Table Periksa
			$this->M_periksa->simpan_periksa($data);
			$this->session->set_flashdata("simpan_periksa","
	                <div class='alert alert-success fade in'>
	                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                    <strong>Berhasil !</strong> Berhasil Menyimpan Data! Silahkan Cek pada Menu Periksa.
	                </div>");
	    redirect('Pasien');
		}
	}

	// Edit Status Pasien Dari Level Akses Polik
	public function edit_status_polik_proses()
	{
		$id_periksa = $this->input->post('id_periksa');
		$status = $this->input->post('status');

		$data = array(
			'id_periksa'		=> $id_periksa,
			'status'				=> $status,
		);

		$where = array(
			'id_periksa'  	=> $id_periksa
		);
		$this->M_periksa->update_status($where,$data,'tbl_periksa');
		$this->session->set_flashdata(
			"update_status",
      "<div class='alert alert-success fade in'>
          <a href='#' class='close' data-dismiss='alert'>&times;</a>
          <strong>Success !</strong> Berhasil Mengupdate !!
      </div>");
    redirect('Periksa/Poliklinik');
	}

	// Edit Status Pasien Dari Level Akses Admin
	public function edit_status_proses()
	{
		$id_periksa = $this->input->post('id_periksa');
		$status = $this->input->post('status');

		$data = array(
			'id_periksa'		=> $id_periksa,
			'status'				=> $status,
		);

		$where = array(
			'id_periksa'  	=> $id_periksa
		);
		$this->M_periksa->update_status($where,$data,'tbl_periksa');
		$this->session->set_flashdata(
			"update_status",
      "<div class='alert alert-success fade in'>
          <a href='#' class='close' data-dismiss='alert'>&times;</a>
          <strong>Success !</strong> Berhasil Mengupdate !!
      </div>");
    redirect('Periksa');
	}

	// Update Dari Level Administrator
	public function update_diagnosa_proses()
	{
		$id_periksa = $this->input->post('id_periksa');
		$diagnosa = $this->input->post('diagnosa');

		$data = array(
			'id_periksa'		=> $id_periksa,
			'diagnosa'			=> $diagnosa,
		);

		$where = array(
			'id_periksa'  => $id_periksa
		);
		$this->M_periksa->update_diagnosa($where,$data,'tbl_periksa');
		$this->session->set_flashdata("update_status","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate !!
                </div>");
      redirect('Periksa');
	}

	// Update dari Level Polik
	public function update_diagnosa_polik_proses()
	{
		$id_periksa = $this->input->post('id_periksa');
		$diagnosa = $this->input->post('diagnosa');

		$data = array(
			'id_periksa'		=> $id_periksa,
			'diagnosa'			=> $diagnosa,
		);

		$where = array(
			'id_periksa'  => $id_periksa
		);
		$this->M_periksa->update_diagnosa($where,$data,'tbl_periksa');
		$this->session->set_flashdata("update_status","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate !!
                </div>");
      redirect('Periksa/poliklinik');
	}
}
