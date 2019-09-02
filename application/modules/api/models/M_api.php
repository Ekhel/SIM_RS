<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

  // API Pasien Start
  function get_pasien()
  {
    $query = $this->db->query("SELECT * FROM tbl_pasien");

    return $query->result();
  }
  // API Pasien End

  // API Dokter Start
  function get_dokter()
  {
    $query = $this->db->query("SELECT * FROM tbl_dokter
    LEFT JOIN tbl_spesialis ON tbl_dokter.id_spesialis = tbl_spesialis.id_spesialis");
    return $query->result();
  }
}
