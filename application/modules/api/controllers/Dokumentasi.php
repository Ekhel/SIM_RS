<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends MX_Controller{
  public function __construct()
	{
		parent::__construct();
    $this->load->model('M_api');
	}
  public function index()
  {
    $data['title'] = 'Dokumentasi API';
    $this->template->load('MasterAdmin','dokumentasi',$data);
  }
}
