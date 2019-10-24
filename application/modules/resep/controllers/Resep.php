<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper('url');
			$this->load->database();
      $this->load->model('M_resep');
			Modules::run('Auth/cek_login');
	}
  public function index()
  {
    $data['title'] = 'Admin e - Resep';
    //$data['resep'] = $this->M_resep->eresep();
    $data['resep'] = $this->M_resep->resep();
    $this->template->load('MasterAdmin','data-resep',$data);
  }
  function tambah_resep_proses()
  {
    $data['id_resep'] = $this->input->post('id_resep');
    $data['id_periksa'] = $this->input->post('id_periksa');
    $data['id_barang']  = $this->input->post('id_barang');
    $data['eticket'] = $this->input->post('eticket');

    $this->M_resep->tambah_resep($data);
    $this->session->set_flashdata("simpan_resep","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menyimpan Data!
                </div>");
      redirect('Periksa');
  }
  public function item_resep($id_periksa)
  {
    $data['detail'] = $this->M_resep->detail_resep($id_periksa);
    $this->load->view('detail_resep',$data);
  }
  function cetak_eticket($id_periksa)
  {
    $data['title'] = 'Cetak e - Ticket';
    $data['eticket'] = $this->M_resep->cetak_ticket($id_periksa);

    $this->load->view('cetak_eticket',$data);
  }
}
