<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periksa extends CI_Model {

  function periksa()
  {
    $tanggal_sekarang = date('y-m-d');
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tanggal = '$tanggal_sekarang' ");
    return $query->result();
  }
  function hitung_pasien_hariini()
  {
    $tanggal_sekarang = date('y-m-d');

    $query = $this->db->query("SELECT
      count(id_periksa) as jumlah_pasien,
      count(Distinct CASE WHEN status = 'sudah' THEN id_pasien END) as sudah
      FROM tbl_periksa
      WHERE tanggal = '$tanggal_sekarang' ");
    return $query->result();
  }
  function sudah_periksa()
  {
    $tanggal_sekarang = date('y-m-d');
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tanggal = '$tanggal_sekarang' AND status = 'sudah' ");
    return $query->result();
  }
  function get_periksa_polik()
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa
    WHERE tbl_periksa.id_poliklinik AND tbl_periksa.tanggal");
    return $query->result();
  }
  function simpan_periksa($data)
  {
    $this->db->insert('tbl_periksa',$data);
  }
  function getperiksa($param = 0)
	{
		return $this->db->get_where('tbl_periksa', array('id_periksa' => $param))->row();
	}
  function update_periksa($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_periksa()
  {
    $nelayan = $this->getperiksa($param);
    $this->db->delete('tbl_periksa', array('id_periksa' => $param));
  }
  function update_status($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_diagnosa($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
