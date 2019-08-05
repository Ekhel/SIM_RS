<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class data_induk extends BaseController {

	public function __construct()
	{
			parent::__construct();
			$this->load->library(array('form_validation','grocery_CRUD'));
			$this->load->database();
	    $this->load->helper('url');
      $this->load->model('M_induk');
			$this->cek_login();
	}

  public function Agama()
  {
    $data['title'] = 'admin | Agama';
    $data['agama'] = $this->M_induk->agama();
    $this->template->load('MasterAdmin','datainduk/data-agama',$data);
  }
	public function Jabatan()
	{
		$data['title'] = 'admin | Jabatan';
    $data['jabatan'] = $this->M_induk->jabatan();
    $this->template->load('MasterAdmin','datainduk/data-jabatan',$data);
	}
	public function Departemen()
	{
		$data['title'] = 'admin | Departemen';
    $data['depart'] = $this->M_induk->departemen();
    $this->template->load('MasterAdmin','datainduk/data-departemen',$data);
	}
	public function Spesialis()
	{
		$data['title'] = 'Admin | Spesialis';
		$data['spesialis'] = $this->M_induk->spesialis();
		$this->template->load('MasterAdmin','datainduk/data-spesialis',$data);
	}
	public function Poliklinik()
	{
		$data['title'] = 'Admin | Poliklinik';
		$data['polik'] = $this->M_induk->poliklinik();

		$this->template->load('MasterAdmin','datainduk/data-poliklinik',$data);
	}
	public function Pegawai()
	{
		$data['title'] = 'Admin | Data Pegawai';
		$data['pegawai'] = $this->M_induk->pegawai();
		$data['jabatan'] = $this->db->query("SELECT * FROM tbl_jabatan")->result();
		$this->template->load('MasterAdmin','datainduk/data-pegawai',$data);
	}

	//-----------------------------------------------------------------------------------------------//
	// Fungsi Tambah

	public function tambah_pegawai()
	{
		$data['title'] = 'Admin | Tambah Pegawai';
		$data['jabatan'] = $this->db->query("SELECT * FROM tbl_jabatan")->result();
		$this->template->load('MasterAdmin','datainduk/tambah/pegawai',$data);
	}
	public function tambah_pegawai_proses()
	{
		$data['nik']		= $this->input->post('nik');
		$data['nama_pegawai'] = $this->input->post('nama_pegawai');
		$data['jekel']				= $this->input->post('jekel');
		$data['pend_terahir']	= $this->input->post('pend_terahir');
		$data['npwp']					= $this->input->post('npwp');
		$data['tmp_lahir']		= $this->input->post('tmp_lahir');
		$data['tgl_lahir']		= $this->input->post('tgl_lahir');
		$data['id_jabatan']		= $this->input->post('id_jabatan');
		$this->M_induk->simpan_pegawai($data);
		$this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Data_induk/Pegawai');
	}


	//-----------------------------------------------------------------------------------------------//
	// Fungsi Edit

	function edit_pegawai_proses()
	{
		$nik = $this->input->post('nik');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jekel = $this->input->post('jekel');
		$pend_terahir = $this->input->post('pend_terahir');
		$npwp = $this->input->post('npwp');
		$tmp_lahir = $this->input->post('tmp_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$id_jabatan = $this->input->post('id_jabatan');

		$data = array(
      'nik'         	=> $nik,
			'nama_pegawai' 	=> $nama_pegawai,
			'jekel' 	      => $jekel,
			'pend_terahir' 	=> $pend_terahir,
			'npwp' 	        => $npwp,
			'tmp_lahir' 	  => $tmp_lahir,
			'tgl_lahir'		  => $tgl_lahir,
			'id_jabatan'		=> $id_jabatan,
		);

		$where = array(
			'nik' 			=> $nik
		);

		$this->M_induk->update_pegawai($where,$data,'tbl_pegawai');
		$this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Data_induk/Pegawai');
	}

	//-----------------------------------------------------------------------------------------------//
	// Fungsi Hapus

	function hapus_pegawai($param = 0)
	{
		$this->M_induk->hapus_pegawai($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Data_induk/Pegawai');
	}
}
