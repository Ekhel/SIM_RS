<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {
  function jadwal()
  {
    $query = $this->db->query("SELECT * FROM tbl_praktek
    LEFT JOIN tbl_poliklinik ON tbl_praktek.id_poliklinik  = tbl_poliklinik.id_poliklinik
    LEFT JOIN tbl_dokter ON tbl_praktek.id_dokter = tbl_dokter.id_dokter
    LEFT JOIN tbl_spesialis ON tbl_dokter.id_spesialis = tbl_spesialis.id_spesialis");

    return $query->result();
  }
  function simpan_jadwal($data)
  {
    $this->db->insert('tbl_praktek',$data);
  }
  function getjadwal($param = 0)
	{
		return $this->db->get_where('tbl_praktek', array('id_jadwal' => $param))->row();
	}
  function update_jadwal($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_jadwal($param = 0)
  {
    $jadwal = $this->getjadwal($param);
    $this->db->delete('tbl_praktek', array('id_jadwal' => $param));
  }
}
