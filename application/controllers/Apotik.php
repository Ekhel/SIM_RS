<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Apotik extends BaseController {
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
      $this->load->model('M_apotik');
			$this->cek_login();
	}
  public function index()
  {
    $data['title'] = 'Admin | Apotik';
    $data['satuan'] = $this->db->query("SELECT * FROM tbl_satuan")->result();
    $data['apotik'] = $this->M_apotik->obat_alkes();

    $this->template->load('MasterAdmin','Apotik/data-obatalkes',$data);
  }
  public function tambah_obatalkes()
  {
    $data['title'] = 'Tambah obat & Alkes';
    $data['satuan'] = $this->db->query("SELECT * FROM tbl_satuan")->result();
    $data['kode'] = $this->M_apotik->kode();
    $this->template->load('MasterAdmin','Apotik/tambah_obatalkes',$data);
  }
  function tambah_obatalkes_proses()
  {
    $data['id_barang'] = $this->input->post('id_barang');
    $data['kode_barang'] = $this->input->post('kode_barang');
    $data['nama_barang'] = $this->input->post('nama_barang');
    $data['kategori'] = $this->input->post('kategori');
    $data['id_satuan'] = $this->input->post('id_satuan');
    $data['harga'] = $this->input->post('harga');

    $this->M_apotik->simpan_obatalkes($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Apotik');
  }
  function edit_obatalkes_proses()
  {
    $id_barang = $this->input->post('id_barang');
    $kode_barang = $this->input->post('kode_barang');
    $nama_barang = $this->input->post('nama_barang');
    $kategori = $this->input->post('kategori');
    $id_satuan = $this->input->post('id_satuan');
    $harga = $this->input->post('harga');

    $data = array(
      'id_barang'     => $id_barang,
      'kode_barang'   => $kode_barang,
      'nama_barang'   => $nama_barang,
      'kategori'      => $kategori,
      'id_satuan'     => $id_satuan,
      'harga'         => $harga,
    );
    $where = array(
      'id_barang'     => $id_barang
    );
    $this->M_apotik->update_obatalkes($where,$data,'tbl_obatalkes');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Apotik');
  }
}
