<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_resep extends CI_Model {
  function eresep()
  {
    $tanggal_sekarang = date('Y-m-d');
    $query = $this->db->query("SELECT
    tbl_resep.id_resep as id_resep,
    tbl_resep.id_barang as id_barang,
    tbl_resep.id_periksa as id_periksa,
    tbl_pasien.nama_pasien as nama_pasien,
    tbl_poliklinik.nama_poliklinik as nama_poliklinik,
    COUNT(tbl_resep.id_resep) as jb,
    SUM(tbl_obatalkes.harga) as total
    FROM tbl_resep
    LEFT JOIN tbl_periksa ON tbl_resep.id_periksa = tbl_periksa.id_periksa
    LEFT JOIN tbl_pasien ON tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik ON tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    LEFT JOIN tbl_obatalkes ON tbl_resep.id_barang = tbl_obatalkes.id_barang
    WHERE tbl_periksa.tanggal = '$tanggal_sekarang'
    GROUP BY tbl_resep.id_periksa");

    return $query->result();
  }
  function detail_resep($id_periksa)
  {
    $query = $this->db->query("SELECT
    tbl_resep.id_resep as id_resep,
    tbl_obatalkes.nama_barang as nama_barang,
    tbl_obatalkes.harga as harga,
    tbl_resep.eticket as eticket
    FROM tbl_resep
    LEFT JOIN tbl_obatalkes ON tbl_resep.id_barang = tbl_obatalkes.id_barang
    WHERE tbl_resep.id_periksa = '$id_periksa' ");

    return $query->result();
  }
  function tambah_resep($data)
  {
    $this->db->insert('tbl_resep',$data);
  }
  function cetak_ticket($id_periksa)
  {
    $query = $this->db->query("SELECT * FROM tbl_resep
    LEFT JOIN tbl_obatalkes ON tbl_resep.id_barang = tbl_obatalkes.id_barang
    WHERE id_periksa = '$id_periksa'");

    return $query->result();
  }
}
