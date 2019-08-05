<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_induk extends CI_Model {

//-------------------------------------------------------------------------------
//Start GET DATA INDUK
  function agama()
  {
    $query = $this->db->query("SELECT * FROM tbl_agama");
    return $query->result();
  }
  function jabatan()
  {
    $query = $this->db->query("SELECT * FROM tbl_jabatan");
    return $query->result();
  }
  function departemen()
  {
    $query = $this->db->query("SELECT * FROM tbl_departemen");
    return $query->result();
  }
  function spesialis()
  {
    $query = $this->db->query("SELECT * FROM tbl_spesialis");
    return $query->result();
  }
  function poliklinik()
  {
    $query = $this->db->query("SELECT * FROM tbl_poliklinik");
    return $query->result();
  }
  function pegawai()
  {
    $query = $this->db->query("SELECT * FROM tbl_pegawai
    LEFT JOIN tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan");

    return $query->result();
  }

  //-------------------------------------------------------------------------------------------------------- //
  // fungsi Simpan

  function simpan_pegawai($data)
  {
    $this->db->insert('tbl_pegawai',$data);
  }

  //-------------------------------------------------------------------------------------------------------- //
  // fungsi Edit

  function getpegawai($param = 0)
	{
		return $this->db->get_where('tbl_pegawai', array('nik' => $param))->row();
	}
  function update_pegawai($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_pegawai($param = 0)
  {
    $dokter = $this->getpegawai($param);
    $this->db->delete('tbl_pegawai', array('nik' => $param));
  }
}
