<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends MX_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('url');
      Modules::run('Auth/cek_login');
  }
  public function index()
  {
    $data['title'] = 'Bakup DB & Files';
    $this->template->load('MasterAdmin','backup/r-backup',$data);
  }

  function files()
  {
     $opt = array(
       'src' => '../sim_rs',
       'dst' => 'Bakup_all/files'
     );

     $this->load->library('recurseZip_lib', $opt);
     $download = $this->recursezip_lib->compress();

     redirect(base_url($download));
  }

  public function db()
  {
     $this->load->dbutil();

     $prefs = array(
       'format' => 'zip',
       'filename' => 'simpolik_backup.sql'
     );

     $backup =& $this->dbutil->backup($prefs);

     $db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
     $save  = 'Bakup_all/db/' . $db_name;

     $this->load->helper('file');
     write_file($save, $backup);

     $this->load->helper('download');
     force_download($db_name, $backup);
  }

}
