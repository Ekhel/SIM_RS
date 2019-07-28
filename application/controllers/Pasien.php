<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = 'Admin | Data Pasien';
		$this->template->load('MasterAdmin','Pasien/data_pasien',$data);
	}
	public function tambah_rawat()
	{
		$data['title'] = 'Admin | Tambah Data Rawat';
		$this->template->load('MasterAdmin','Pasien/data_pasien',$data);
	}
}
