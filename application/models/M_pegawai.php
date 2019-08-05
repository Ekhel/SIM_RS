<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

  function pegawai()
  {
    $query = $this->db->query("SELECT * FROM tbl_pegawai");
    return $query->result();
  }
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
