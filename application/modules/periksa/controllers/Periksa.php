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
		$this->cek_data_hari_ini();

		$data['id_pasien'] 		= $this->input->post('id_pasien');
		$data['id_poliklinik'] 	= $this->input->post('id_poliklinik');
		//$data['pd'] 	= $this->input->post('pd');
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
	function cek_data_hari_ini()
	{
		$this->form_validation->set_rules('id_pasien', 'id_pasien', 'is_unique[tbl_periksa.id_pasien]');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'is_unique[tbl_periksa.tanggal]');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("msg","
							<div class='alert alert-warning fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Gagal !</strong></br>
									 Data Pasien ini Sudah ditambahkan untuk Hari ini. Konfirmasi Pada Polik terkait !!
							</div>");
			header('location:'.base_url().'Pasien');
		}
		else{
			return true;
		}
	}
}
