<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {
  function users()
  {
    $query = $this->db->query("SELECT * FROM tb_user
    LEFT JOIN tb_user_level ON tb_user.level = tb_user_level.id_level
    LEFT JOIN tbl_poliklinik ON tb_user.id_poliklinik = tbl_poliklinik.id_poliklinik ");

    return $query->result();
  }
  function level()
  {
    $query = $this->db->query("SELECT
      tb_user_level.id_level as id_level,
      tb_user_level.level as level,
      COUNT(Distinct tb_user.id_user) as jumlah
      FROM tb_user_level
      LEFT JOIN tb_user ON tb_user_level.id_level = tb_user.level
      GROUP BY id_level");
      return $query->result();
  }
  function simpan_level($data)
  {
    $this->db->insert('tb_user_level',$data);
  }
  function getlevel($param = 0)
	{
		return $this->db->get_where('tb_user_level', array('id_level' => $param))->row();
	}
  function edit_level($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_level($param = 0)
  {
    $jadwal = $this->getlevel($param);
    $this->db->delete('tb_user_level', array('id_level' => $param));
  }
  function tambah_pengguna($data)
  {
    $this->db->insert('tb_user',$data);
  }
  function edit_users($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function delete_users($id_user = 0)
  {
    $this->db->delete('tb_user', array('id_user' => $id_user));
  }
}
