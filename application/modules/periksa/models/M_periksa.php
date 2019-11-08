<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periksa extends CI_Model {

  function periksa()
  {
    $tanggal_sekarang = date('y-m-d');
    $query = $this->db->query("SELECT
    tbl_periksa.id_periksa as id_periksa,
    tbl_pasien.nama_pasien as nama_pasien,
    tbl_pasien.id_pasien as id_pasien,
    tbl_poliklinik.nama_poliklinik as nama_poliklinik,
    tbl_poliklinik.id_poliklinik as id_poliklinik,
    tbl_pasien.golongan_darah as golongan_darah,
    tbl_periksa.status as status,
    tbl_periksa.diagnosa as diagnosa,
    tbl_periksa_lab.status_lab as status_lab,
    tbl_periksa_lab.id_periksa_lab as id_periksa_lab
    FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    LEFT JOIN tbl_periksa_lab on tbl_periksa.id_periksa = tbl_periksa_lab.id_periksa
    WHERE tbl_periksa.tanggal = '$tanggal_sekarang' ");
    return $query->result();
  }
  function periksa_user_polik()
  {
    $tanggal_sekarang = date('y-m-d');
    $user_poliklinik = $this->session->userdata('id_poliklinik');

    $query = $this->db->query("SELECT
    tbl_periksa.id_periksa as id_periksa,
    tbl_pasien.nama_pasien as nama_pasien,
    tbl_pasien.id_pasien as id_pasien,
    tbl_poliklinik.nama_poliklinik as nama_poliklinik,
    tbl_poliklinik.id_poliklinik as id_poliklinik,
    tbl_pasien.golongan_darah as golongan_darah,
    tbl_periksa.status as status,
    tbl_periksa.diagnosa as diagnosa,
    tbl_periksa_lab.status_lab as status_lab,
    tbl_periksa_lab.id_periksa_lab as id_periksa_lab
    FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    LEFT JOIN tbl_periksa_lab on tbl_periksa.id_periksa = tbl_periksa_lab.id_periksa
    WHERE tbl_periksa.tanggal = '$tanggal_sekarang' AND tbl_periksa.id_poliklinik = '$user_poliklinik' ");
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
  function hitung_pasien_hariini_polik()
  {
    $tanggal_sekarang = date('y-m-d');
    $user_poliklinik = $this->session->userdata('id_poliklinik');
    $query = $this->db->query("SELECT
      count(id_periksa) as jumlah_pasien,
      count(Distinct CASE WHEN status = 'sudah' THEN id_pasien END) as sudah
      FROM tbl_periksa
      WHERE tanggal = '$tanggal_sekarang' AND id_poliklinik = '$user_poliklinik' ");
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
