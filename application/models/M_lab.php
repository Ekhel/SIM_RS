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
}
