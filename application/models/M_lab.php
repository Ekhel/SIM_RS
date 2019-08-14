<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lab extends CI_Model {
  function lab()
  {
    $query = $this->db->query("SELECT * FROM tbl_jenisperiksa");
    return $query->result();
  }
  function simpan_jenis($data)
  {
    $this->db->insert('tbl_jenisperiksa',$data);
  }
  function getjenis($param = 0)
	{
		return $this->db->get_where('tbl_jenisperiksa', array('id_jenisperiksa' => $param))->row();
	}
  function edit_periksa($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_jenis($param = 0)
  {
    $jenis = $this->getjenis($param);
    $this->db->delete('tbl_jenisperiksa', array('id_jenisperiksa' => $param));
  }
  function periksa_lab()
  {
    $tanggal_sekarang = date('y-m-d');
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tanggal = '$tanggal_sekarang' AND pd = 'ya' ");
    return $query->result();
  }
  function hitung_pasien_hariini()
  {
    $tanggal_sekarang = date('y-m-d');

    $query = $this->db->query("SELECT
      count(id_periksa) as jumlah_pasien,
      count(Distinct CASE WHEN status = 'sudah' THEN id_pasien END) as sudah
      FROM tbl_periksa
      WHERE tanggal = '$tanggal_sekarang' AND pd = 'ya' ");
    return $query->result();
  }
  function simpan_hasil_lab($data)
  {
    $this->db->insert('tbl_hasil_lab',$data);
  }
  function detail_periksa($id_periksa = 0)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tbl_periksa.id_periksa = '$id_periksa' ");
    return $query->result();
  }
  function detail_hasil_lab($id_periksa = 0)
  {
    $query = $this->db->query("SELECT * FROM tbl_hasil_lab
    LEFT JOIN tbl_periksa ON tbl_hasil_lab.id_periksa = tbl_periksa.id_periksa
    LEFT JOIN tbl_pasien ON tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_jenisperiksa ON tbl_hasil_lab.id_jenisperiksa = tbl_jenisperiksa.id_jenisperiksa
    LEFT JOIN tbl_sub_jenis_periksa ON tbl_jenisperiksa.id_jenisperiksa = tbl_sub_jenis_periksa.id_jenisperiksa
    WHERE tbl_hasil_lab.id_periksa = '$id_periksa'");

    return $query->result();
  }
}
