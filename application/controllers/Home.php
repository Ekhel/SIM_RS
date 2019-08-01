<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Home extends BaseController {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->cek_login();
	}
	public function index()
	{
		$data['title'] = 'Admin | Dashboard';
		$this->template->load('MasterAdmin','admin/dashboard',$data);
	}
}
