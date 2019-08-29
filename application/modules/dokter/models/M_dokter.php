<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokter extends CI_Model {
  function dokter()
  {
    $query = $this->db->query("SELECT * FROM tbl_dokter
    LEFT JOIN tbl_spesialis ON tbl_dokter.id_spesialis  = tbl_spesialis.id_spesialis");

    return $query->result();
  }
  function simpan_dokter($data)
  {
    $this->db->insert('tbl_dokter',$data);
  }
  function getdokter($param = 0)
	{
		return $this->db->get_where('tbl_dokter', array('id_dokter' => $param))->row();
	}
  function update_dokter($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_dokter($param = 0)
  {
    $dokter = $this->getdokter($param);
    $this->db->delete('tbl_dokter', array('id_dokter' => $param));
  }
}
