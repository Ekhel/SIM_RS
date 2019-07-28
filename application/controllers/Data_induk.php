<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_induk extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
      $this->load->model('M_induk');
	}

  public function Agama()
  {
    $data['title'] = 'admin | Agama';
    $data['agama'] = $this->M_induk->agama();
    $this->template->load('MasterAdmin','datainduk/agama',$data);
  }
}
