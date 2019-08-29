<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller{
  public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->model('M_settings');
    Modules::run('Auth/cek_login');
	}
  public function update($id)
  {
    $test['title'] = 'Admin | Profil';
    $row = $this->M_settings->get_profile($id);

    if ($row){
      $data = array(
        'id_org'    => $row->id_org,
        'nama_org'  => $row->nama_org,
        'alamat'    => $row->alamat,
        'provinsi'  => $row->provinsi,
        'kabupaten' => $row->kabupaten,
        'no_telfon' => $row->no_telfon,
        'email'     => $row->email,
        'logo'      => $row->logo,
      );
      $this->template->load('MasterAdmin','update_profil',$data);
    }
    else{
      $this->session->set_flashdata('message', 'Record Not Found');
                      redirect(site_url('Home'));
    }
  }
}
