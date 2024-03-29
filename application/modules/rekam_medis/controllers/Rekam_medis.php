<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_medis extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper('url');
			$this->load->database();
      $this->load->model('M_rekammedis');
			Modules::run('Auth/cek_login');
	}
  public function rekdis($id_pasien)
  {
    $data['title'] = 'Riwayat Rekam Medis';
    $data['detail'] = $this->M_rekammedis->detail_pasien($id_pasien);
    $data['periksa'] = $this->M_rekammedis->riwayat_periksa($id_pasien);
    $data['periksa_lab'] = $this->M_rekammedis->riwayat_periksa_lab($id_pasien);
    $data['lab'] = $this->M_rekammedis->riwayat_jenisperiksalab($id_pasien);
    $this->template->load('MasterAdmin','data-riwayat',$data);
  }
}
