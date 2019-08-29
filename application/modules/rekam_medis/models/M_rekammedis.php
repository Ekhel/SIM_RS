<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekammedis extends CI_Model {
  function riwayat_periksa($id_pasien)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE id_pasien = '$id_pasien'");
    return $query->result();
  }
  function riwayat_periksa_lab($id_pasien)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa_lab
    WHERE id_pasien = '$id_pasien'");

    return $query->result();
  }
  function riwayat_jenisperiksalab()
  {
    $query = $this->db->query("SELECT * FROM tbl_jenisperiksalab
    LEFT JOIN tbl_jenisperiksa ON tbl_jenisperiksalab.id_jenisperiksa = tbl_jenisperiksalab.id_jenisperiksa
    WHERE id_pasien = '$id_pasien'");

    return $query->result();
  }
}
