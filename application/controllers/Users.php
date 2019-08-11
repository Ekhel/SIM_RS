<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	    $this->load->helper(array('url','form'));
			$this->load->model('M_users');
	}
  public function index()
  {
    $data['title'] = 'Admin | Pengguna';
    $data['user'] = $this->M_users->users();

    $this->template->load('MasterAdmin','users/pengguna',$data);
  }
}
