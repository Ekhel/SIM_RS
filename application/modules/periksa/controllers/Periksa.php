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
		$data['barang'] = $this->db->query("SELECT * FROM tbl_obatalkes ORDER BY kode_barang")->result();
    $this->template->load('MasterAdmin','periksa/data_periksa',$data);
  }
	public function tambah_periksa_proses()
	{
		$id_pasien = $this->input->post('id_pasien');
		$id_poliklinik = $this->input->post('id_poliklinik');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');

		$tanggal_hari_ini = date('Y-m-d');
		$cek = $this->db->query("SELECT id_pasien FROM tbl_periksa WHERE tanggal = '$tanggal_hari_ini' ")->result();

		if(count($cek) >= 1){
			$this->session->set_flashdata("validate_periksa","
					<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Gagal !</strong> Data Yang anda Input sudah tersedia Silahkan Cek pada Menu Periksa
					</div>");
				redirect('Pasien');
		}
		else{
			$data = array(
				'id_pasien'			=> $id_pasien,
				'id_poliklinik'	=> $id_poliklinik,
				'tanggal'				=> $tanggal,
				'status'				=> $status
			);

			$this->M_periksa->simpan_periksa($data);
			$this->session->set_flashdata("simpan_periksa","
	                <div class='alert alert-success fade in'>
	                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
	                    <strong>Berhasil !</strong> Berhasil Menyimpan Data! Silahkan Cek pada Menu Periksa.
	                </div>");
	      redirect('Pasien');
		}
	}
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
		$this->session->set_flashdata("update_status","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate !!
                </div>");
      redirect('Periksa');
	}
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
}
