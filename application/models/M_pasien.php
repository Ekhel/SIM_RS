<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {
  function pasien()
  {
    $query = $this->db->query("SELECT * FROM tbl_pasien");
    return $query->result();
  }
  function simpan_pasien($data)
  {
    $this->db->insert('tbl_pasien',$data);
  }
  function getpasien($param = 0)
	{
		return $this->db->get_where('tbl_pasien', array('id_pasien' => $param))->row();
	}
  function update_pasien($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_pasien()
  {
    $nelayan = $this->getpasien($param);
    $this->db->delete('tbl_pasien', array('id_pasien' => $param));
  }
}
