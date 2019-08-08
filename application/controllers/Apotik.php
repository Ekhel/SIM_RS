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

    $this->template->load('MasterAdmin','Apotik/Obatalkes/data-obatalkes',$data);
  }
  public function tambah_obatalkes()
  {
    $data['title'] = 'Tambah obat & Alkes';
    $data['satuan'] = $this->db->query("SELECT * FROM tbl_satuan")->result();
    $data['kode'] = $this->M_apotik->kode();
    $this->template->load('MasterAdmin','Apotik/Obatalkes/tambah_obatalkes',$data);
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
  function hapus_obatalkes($param = 0)
  {
    $this->M_apotik->hapus_obatalkes($param);
    $this->session->set_flashdata("hapus","
              <div class='alert alert-success fade in'>
                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                  <strong>Success !</strong> Item sudah di Hapus!
              </div>");
    redirect('Apotik');
  }
  public function satuan()
  {
    $data['title'] = 'Admin | Satuan';
    $data['satuan'] = $this->M_apotik->satuan();

    $this->template->load('MasterAdmin','Apotik/Satuan/data-satuan',$data);
  }
  public function tambah_satuan()
  {
    $data['title'] = 'Admin | Tambah Satuan';
    $this->template->load('MasterAdmin','Apotik/Satuan/tambah_satuan',$data);
  }
  function tambah_satuan_proses()
  {
    $data['satuan'] = $this->input->post('satuan');
    $this->M_apotik->tambah_satuan($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Apotik/satuan');
  }
  function edit_satuan_proses()
  {

    $id_satuan = $this->input->post('id_satuan');
    $satuan = $this->input->post('satuan');
    $data = array(
      'id_satuan' => $id_satuan,
      'satuan'    => $satuan,
    );
    $where = array(
      'id_satuan' => $id_satuan,
    );
    $this->M_apotik->update_satuan($where,$data,'tbl_satuan');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengupdate Data!
                </div>");
      redirect('Apotik/satuan');
  }
  function hapus_satuan($param = 0)
  {
    $this->M_apotik->hapus_satuan($param);
    $this->session->set_flashdata("hapus","
              <div class='alert alert-success fade in'>
                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                  <strong>Success !</strong> Item sudah di Hapus!
              </div>");
    redirect('Apotik/satuan');
  }
}
