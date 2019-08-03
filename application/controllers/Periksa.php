<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Periksa extends BaseController {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper('url');
			$this->load->database();
      $this->load->model('M_periksa');
			$this->cek_login();
	}
  public function index()
  {
    $data['title'] = 'Admin | Daftar Pasien Control';
    $data['periksa'] = $this->M_periksa->periksa();
		$data['status'] = $this->M_periksa->sudah_periksa();
		$data['hitung'] = $this->M_periksa->hitung_pasien_hariini();
    $this->template->load('MasterAdmin','periksa/data_periksa',$data);
  }
	public function tambah_periksa_proses()
	{
		$data['id_pasien'] 		= $this->input->post('id_pasien');
		$data['id_poliklinik'] 	= $this->input->post('id_poliklinik');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['status'] 	= $this->input->post('status');
		$this->M_periksa->simpan_periksa($data);
		$this->session->set_flashdata("simpan_periksa","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data! Silahkan Cek pada Table Periksa.
                </div>");
      redirect('Pasien');
	}
	public function edit_status_proses()
	{
		$id_periksa = $this->input->post('id_periksa');
		$status = $this->input->post('status');

		$data = array(
			'id_periksa'		=> $id_periksa,
			'status'			=> $status,
		);

		$where = array(
			'id_periksa'  => $id_periksa
		);
		$this->M_periksa->update_status($where,$data,'tbl_periksa');
		$this->session->set_flashdata("update_status","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate !!
                </div>");
      redirect('Periksa');
	}
}