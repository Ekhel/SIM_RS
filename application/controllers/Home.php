<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = 'Admin | Dashboard';
		$this->template->load('MasterAdmin','admin/dashboard',$data);
	}
}
