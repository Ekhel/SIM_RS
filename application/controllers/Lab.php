<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Lab extends BaseController {
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model(array('M_lab','M_periksa'));
      $this->cek_login();
  }
  function index()
  {
    $data['title'] = 'Admin | Jenis Pemeriksaan';
    $data['periksa'] = $this->M_lab->lab();
    $this->template->load('MasterAdmin','lab/jenispemeriksaan/data-jenispemeriksaan',$data);
  }
  function tambah_jenispemeriksaan()
  {
    $data['title'] = 'Admin | Tambah Jenis';
    $this->template->load('MasterAdmin','lab/jenispemeriksaan/tambah_jenis',$data);
  }
  function tambah_jenispemeriksaan_proses()
  {
    $data['id_jenisperiksa'] = $this->input->post('id_jenisperiksa');
    $data['nama_periksa'] = $this->input->post('nama_periksa');

    $this->M_lab->simpan_jenis($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Lab');
  }
  function edit_jenisperiksa_proses()
  {
    $id_jenisperiksa = $this->input->post('id_jenisperiksa');
    $nama_periksa = $this->input->post('nama_periksa');

    $data = array(
      'id_jenisperiksa'     => $id_jenisperiksa,
      'nama_periksa'        => $nama_periksa,
    );
    $where = array(
      'id_jenisperiksa'     => $id_jenisperiksa
    );
    $this->M_lab->edit_periksa($where,$data,'tbl_jenisperiksa');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Lab');
  }
  function hapus_jenis($param = 0)
	{
		$this->M_lab->hapus_jenis($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Lab');
	}
  // ENd CRUD Jenis Pemeriksaan

  public function pasien_periksa_lab()
  {
    $data['title'] = 'Admin | Pasien Periksa Lab';
    $data['periksa'] = $this->M_lab->periksa_lab();
    $data['status'] 	= $this->M_periksa->sudah_periksa();
		$data['hitung'] 	= $this->M_lab->hitung_pasien_hariini();
    $data['jenisperiksa'] = $this->db->query("SELECT * FROM tbl_jenisperiksa")->result();
    $data['dokter'] = $this->db->query("SELECT * FROM tbl_dokter")->result();

    $this->template->load('MasterAdmin','lab/pasien/data-pasien-lab',$data);
  }
  function get_sub_jenis($id_jenisperiksa)
  {
    $result = $this->db->where("id_jenisperiksa",$id_jenisperiksa)->get("tbl_sub_jenis_periksa")->result();
    echo json_encode($result);
  }
  function simpan_hasil_proses()
  {
    $data['id_hasil']   = $this->input->post('id_hasil');
    $data['id_periksa'] = $this->input->post('id_periksa');
    $data['id_jenisperiksa'] =$this->input->post('id_jenisperiksa');
    $data['id_sub_jenis'] = $this->input->post('id_sub_jenis');
    $data['hasil'] = $this->input->post('hasil');
    $data['nilai_rujukan'] = $this->input->post('nilai_rujukan');
    $data['keterangan'] = $this->input->post('keterangan');
    $data['tanggal'] = $this->input->post('tanggal');
    $data['id_dokter'] = $this->input->post('id_dokter');

    $this->M_lab->simpan_hasil_lab($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
    redirect('Lab/pasien_periksa_lab');
  }
  public function detail_hasil_pemeriksaan($id_periksa = 0)
  {
    $data['periksa'] = $this->M_lab->detail_periksa($this->uri->segment(3));
    $data['hasil'] = $this->M_lab->detail_hasil_lab($this->uri->segment(3));

    $this->load->view('lab/pasien/detail_hasil',$data);
  }
  public function cetak_detail()
  {
    $data['title'] = 'Cetak | Detail Pemeriksaan';
    $data['periksa'] = $this->M_lab->detail_periksa($this->uri->segment(3));
    $data['hasil'] = $this->M_lab->detail_hasil_lab($this->uri->segment(3));

    $this->load->view('lab/pasien/cetak_detail',$data);
  }
}
