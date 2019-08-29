<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper('url');
      $this->load->model('M_pegawai');
			Modules::run('Auth/cek_login');
	}

  public function Agama()
  {
    $data['title'] = 'admin | Pegawai';
    $data['pegawai'] = $this->M_pegawai->pegawai();
    $this->template->load('MasterAdmin','Pegawai/pegawai',$data);
  }
}
