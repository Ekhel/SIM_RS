<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_induk extends CI_Model {

  function agama()
  {
    $query = $this->db->query("SELECT * FROM tbl_agama");
    return $query->result();
  }
}
