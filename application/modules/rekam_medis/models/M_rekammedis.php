<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekammedis extends CI_Model {
  function detail_pasien($id_pasien)
  {
    $query = $this->db->query("SELECT * FROM tbl_pasien
    WHERE id_pasien = '$id_pasien' ");

    return $query->result();
  }
  function riwayat_periksa($id_pasien)
  {
    $query = $this->db->query("SELECT
      tbl_periksa.id_pasien as id_pasien,
      tbl_periksa.tanggal as tanggal,
      tbl_poliklinik.nama_poliklinik as nama_poliklinik,
      tbl_periksa.diagnosa as diagnosa
      FROM tbl_periksa
      LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
      LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
      WHERE tbl_periksa.id_pasien = '$id_pasien'");
    return $query->result();
  }
  function riwayat_periksa_lab($id_pasien)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa_lab
    WHERE id_pasien = '$id_pasien'
    GROUP BY kode_pemeriksaan ");

    return $query->result();
  }
  function riwayat_jenisperiksalab($id_pasien)
  {
    $query = $this->db->query("SELECT
      tbl_jenis_periksalab.id_jenis_pasien as id_jenis_pasien,
      tbl_jenis_periksalab.id_periksa_lab as id_periksa_lab,
      tbl_jenis_periksalab.id_jenisperiksa as id_jenisperiksa,
      tbl_jenis_periksalab.id_pasien as id_pasien,
      tbl_jenisperiksa.nama_periksa as nama_periksa,
      tbl_periksa_lab.kode_pemeriksaan as kode_pemeriksaan,
      COUNT(tbl_sub_jenis_periksa.id_sub_jenis) as jumlah_sub
      FROM tbl_jenis_periksalab
      LEFT JOIN tbl_jenisperiksa ON tbl_jenis_periksalab.id_jenisperiksa = tbl_jenisperiksa.id_jenisperiksa
      LEFT JOIN tbl_sub_jenis_periksa ON tbl_jenis_periksalab.id_sub_jenis = tbl_sub_jenis_periksa.id_sub_jenis
      LEFT JOIN tbl_periksa_lab ON tbl_jenis_periksalab.id_periksa_lab = tbl_periksa_lab.id_periksa_lab
      WHERE tbl_jenis_periksalab.id_periksa_lab = '$id_pasien'
      GROUP BY tbl_jenis_periksalab.id_jenisperiksa");
    return $query->result();
  }
}
