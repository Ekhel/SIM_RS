<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model('settings/M_settings');
			Modules::run('Auth/cek_login');
	}
	public function beranda($id)
	{
		$data['title'] = 'SIM Poliklinik | BERANDA';
		$data['row'] = $this->db->query("SELECT * FROM tbl_profil WHERE id_org = '$id' ")->result();
		$this->template->load('MasterAdmin','beranda',$data);
	}
}
