<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

  function pegawai()
  {
    $query = $this->db->query("SELECT * FROM tbl_pegawai");
    return $query->result();
  }
}
