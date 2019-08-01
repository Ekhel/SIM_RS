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
    $this->load->view('login');
  }
  function login_proses()
  {
		$nip = $this->input->post('nik');
		$sandi = md5($this->input->post('sandi'));
		if (isset($nip, $sandi)) {
			//cek user dan sandi di database
			if($this->M_users->cek($nip, $sandi) == TRUE){
				$admin = $this->M_users->getAdmin($nip, $sandi);
				$data['nik'] = $nik;
				$data['sandi'] = $sandi;
				$data['id_admin'] = $admin->id_admin;
				$data['level'] = $admin->level;
				$data['nama'] = $admin->nama;
				$data['login'] = TRUE;
				$this->session->set_userdata($data);
        if ($this->session->userdata('level')=='1'){
				redirect('Home');
			  }
  			elseif ($this->session->userdata('level')=='2'){
          //helper_log("login", "Login ke applikasi");
  		  redirect('Periksa');
  			}
			}
			else {
				$this->session->set_flashdata('message', 'Nama dan sandi anda salah');
				redirect('login');
			}
		}
		else {
			redirect('Users');
		}
	}

  function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('users');
		}
		else {
      $this->nama = $this->session->userdata('nama');
      $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) { //cek apakah $user_level merupakan jenis array
					if (!in_array($this->session->userdata('level'), $user_level)) {//cek apakah user_level yg login masuk dalam array $user_level
						redirect('home');
					}
				}
				else {
					if ($this->session->userdata('level') != $user_level){
						redirect('users');
					}
				}
			}
		}
	}

  function logout(){
		$this->session->sess_destroy();
    //helper_log("logout", "Logout dari Applikasi");
		redirect('Users', 'refresh');
	}

}
