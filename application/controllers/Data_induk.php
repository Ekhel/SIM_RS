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
    $this->template->load('MasterAdmin','datainduk/agama',$data);
  }
	public function Jabatan()
	{
		$data['title'] = 'admin | Jabatan';
    $data['jabatan'] = $this->M_induk->jabatan();
    $this->template->load('MasterAdmin','datainduk/jabatan',$data);
	}
	public function Departemen()
	{
		$data['title'] = 'admin | Departemen';
    $data['depart'] = $this->M_induk->departemen();
    $this->template->load('MasterAdmin','datainduk/departemen',$data);
	}
	public function Spesialis()
	{
		$data['title'] = 'Admin | Spesialis';
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_spesialis');
		$crud->set_subject('Data');
		$output = $crud->render();
		$data = $output;

		$this->template->load('MasterAdmin','datainduk/spesialis',$data);
	}
	public function Poliklinik()
	{
		$data['title'] = 'Admin | Poliklinik';
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_poliklinik');
		$crud->set_subject('Data');
		$output = $crud->render();
		$data = $output;

		$this->template->load('MasterAdmin','datainduk/poliklinik',$data);
	}
}
