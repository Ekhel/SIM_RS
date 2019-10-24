<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends MX_Controller{
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model(array('M_lab','periksa/M_periksa'));
      Modules::run('Auth/cek_login');
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
  function update_status_lab()
  {
    $id_periksa_lab = $this->input->post('id_periksa_lab');
    $status_lab = $this->input->post('status_lab');

    $data = array(
      'id_periksa_lab'    => $id_periksa_lab,
      'status_lab'        => $status_lab
    );

    $where = array(
      'id_periksa_lab'    => $id_periksa_lab
    );

    $this->M_lab->update_status_lab($where,$data,'tbl_periksa_lab');
    $this->session->set_flashdata("update_status_lab","
          <div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Berhasil Mengupdate Data!
          </div>");
    redirect('Lab/pasien_periksa_lab');
  }
  function edit_jenisperiksa_proses()
  {
    $id_jenisperiksa = $this->input->post('id_jenisperiksa');
    $nama_periksa = $this->input->post('nama_periksa');
    $harga = $this->input->post('harga_jenis');
    $data = array(
      'id_jenisperiksa'     => $id_jenisperiksa,
      'nama_periksa'        => $nama_periksa,
      'harga_jenis'         => $harga
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
  function tambah_periksa_lab_proses()
  {
    $id_periksa = $this->input->post('id_periksa');
    $id_pasien = $this->input->post('id_pasien');
    $id_poliklinik = $this->input->post('id_poliklinik');
    $kode_pemeriksaan = $this->input->post('kode_pemeriksaan');
    $tanggal_periksa = $this->input->post('tanggal_periksa');

    $tanggal_hari_ini = date('Y-m-d');

    $cek = $this->db->query("SELECT id_pasien FROM tbl_periksa_lab WHERE tanggal_periksa = '$tanggal_hari_ini' ")->result();

    if(count($cek) >= 1){
			$this->session->set_flashdata("validate_lab","
					<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>Gagal !</strong> Data Yang anda Input sudah tersedia Silahkan Cek pada Table Periksa.
					</div>");
				redirect('Periksa');
		}
    else{
      $data = array(
        'id_periksa'        => $id_periksa,
        'id_pasien'         => $id_pasien,
        'id_poliklinik'     => $id_poliklinik,
        'kode_pemeriksaan'  => $kode_pemeriksaan,
        'tanggal_periksa'   => $tanggal_periksa
      );

      $this->M_lab->tambah_periksa_lab($data);
      $this->session->set_flashdata("simpan_lab","
                  <div class='alert alert-success fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>Success !</strong> Berhasil Menyimpan Data!
                  </div>");
      redirect('Periksa');
    }

  }
  function simpan_jenis_pemeriksaan_proses()
  {
    $data['id_periksa_lab'] = $this->input->post('id_periksa_lab');
    $data['id_pasien'] = $this->input->post('id_pasien');
    $data['id_jenisperiksa'] = $this->input->post('id_jenisperiksa');
    $data['id_sub_jenis'] = $this->input->post('id_sub_jenis');
    $data['hasil'] = $this->input->post('hasil');
    $data['nilai_rujukan'] = $this->input->post('nilai_rujukan');
    $data['tanggal'] = $this->input->post('tanggal');
    $data['hasil_ket'] = $this->input->post('hasil_ket');

    $this->M_lab->simpan_jenis_pemeriksaan($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
    redirect('Lab/pasien_periksa_lab');
  }
  public function jenis_pemeriksaan($id = 0)
  {
    $data['jenis_periksa'] = $this->M_lab->jenis_periksa_lab($this->uri->segment(3));
    $this->load->view('lab/pasien/data-jenis-periksalab',$data);
  }
  public function cetak_hasil_periksalab($id_periksa_lab,$id_jenisperiksa)
  {
    $this->load->library('Indo_tanggal');

    $data['title'] = 'CETAK HASIL LAB';
    $data['periksa'] = $this->M_lab->get_periksa_lab($this->uri->segment(3));
    $data['hasil'] = $this->M_lab->cetak_hasil_pemeriksaan($id_periksa_lab,$id_jenisperiksa);
    $data['jenis'] = $this->M_lab->jenis_periksa_lab($id_periksa_lab);
    $this->load->view('pasien/cetak_hasil',$data);
  }
  public function sub_periksa_lab()
  {
    $data['title'] = 'Sub Jenis Pemeriksaan Lab';
    $data['jenis'] = $this->db->query("SELECT * FROM tbl_jenisperiksa")->result();
    $data['sub'] = $this->M_lab->sub_periksa_lab();

    $this->template->load('MasterAdmin','lab/jenispemeriksaan/sub-pemeriksaan',$data);
  }
  function tambah_sub_periksa_proses()
  {
    $data['id_sub_jenis'] = $this->input->post('id_sub_jenis');
    $data['nama_jenis'] = $this->input->post('nama_jenis');
    $data['id_jenisperiksa'] = $this->input->post('id_jenisperiksa');
    $data['satuan'] = $this->input->post('satuan');
    $data['keterangan'] = $this->input->post('keterangan');

    $this->M_lab->simpan_sub_jenis($data);
    $this->session->set_flashdata("simpan","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
    redirect('Lab/sub_periksa_lab');
  }
  function edit_sub_periksa_proses()
  {
    $id_sub_jenis = $this->input->post('id_sub_jenis');
    $id_jenisperiksa = $this->input->post('id_jenisperiksa');
    $nama_jenis = $this->input->post('nama_jenis');
    $satuan = $this->input->post('satuan');
    $keterangan = $this->input->post('keterangan');

    $data = array(
      'id_sub_jenis'    => $id_sub_jenis,
      'id_jenisperiksa' => $id_jenisperiksa,
      'nama_jenis'      => $nama_jenis,
      'satuan'          => $satuan,
      'keterangan'      => $keterangan
    );
    $where = array(
      'id_sub_jenis'    => $id_sub_jenis
    );
    $this->M_lab->edit_sub_jenis($where,$data,'tbl_sub_jenis_periksa');
    $this->session->set_flashdata("update","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Mengedit Data!
                </div>");
    redirect('Lab/sub_periksa_lab');
  }
  function hapus_subjenis($param = 0)
	{
		$this->M_lab->hapus_sub_jenis($param);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Lab/sub_periksa_lab');
	}
}
