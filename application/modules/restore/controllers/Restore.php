<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restore extends MX_Controller{
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('url');
      Modules::run('Auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Restore Database';
    $this->template->load('MasterAdmin','restore/r-restore',$data);
  }
}
