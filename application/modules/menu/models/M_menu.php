<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
  // Start MENU
  function menu_level_akses()
  {
    $level = $this->session->userdata('level');

    $query = $this->db->query("SELECT * FROM tbl_menu_level
    LEFT JOIN tbl_sub_menu ON tbl_menu_level.id_sub_menu = tbl_sub_menu.id_sub_menu
    LEFT JOIN tb_user_level ON tbl_menu_level.id_level = tb_user_level.id_level
    LEFT JOIN tbl_menu ON tbl_sub_menu.id_menu = tbl_menu.id_menu
    WHERE tbl_sub_menu.status_sub = 'aktif' AND tbl_menu_level.id_level = '$level'
    GROUP BY tbl_sub_menu.id_menu
    ORDER BY tbl_menu.kode_menu ASC ");

    return $query->result();
  }
  function sub_menu_level_akses()
  {
    $level = $this->session->userdata('level');

    $query = $this->db->query("SELECT * FROM tbl_menu_level
    LEFT JOIN tbl_sub_menu ON tbl_menu_level.id_sub_menu = tbl_sub_menu.id_sub_menu
    LEFT JOIN tb_user_level ON tbl_menu_level.id_level = tb_user_level.id_level
    LEFT JOIN tbl_menu ON tbl_sub_menu.id_menu = tbl_menu.id_menu
    WHERE tbl_sub_menu.status_sub = 'aktif' AND tbl_menu_level.id_level = '$level'");

    return $query->result();
  }
  function menu()
  {
    $query = $this->db->query("SELECT * FROM tbl_menu
    WHERE status_menu = 'aktif' ");

    return $query->result();
  }
  function menulist()
  {
    $query = $this->db->query("SELECT * FROM tbl_menu");
    return $query->result();
  }
  function tambah_menu($data)
  {
    $this->db->insert('tbl_menu',$data);
  }
  function getmenu($param = 0)
	{
		return $this->db->get_where('tbl_menu', array('id_menu' => $param))->row();
	}
  function edit_menu($where,$table)
  {
    return $this->db->get_where($table,$where);
  }
  function update_menu($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_menu($param = 0)
  {
    $menu = $this->getmenu($param);
    $this->db->delete('tbl_menu', array('id_menu' => $param));
  }
  // END Menu

  // Start SUB MENU
  function subs()
  {
    $query = $this->db->query("SELECT * FROM tbl_sub_menu
    LEFT JOIN tbl_menu ON tbl_sub_menu.id_menu = tbl_menu.id_menu");
    return $query->result();
  }
  function sublist()
  {
    $query = $this->db->query("SELECT * FROM tbl_sub_menu
    LEFT JOIN tbl_menu ON tbl_sub_menu.id_menu = tbl_menu.id_menu
    WHERE status_sub = 'aktif'");
    return $query->result();
  }
  function simpan_sub_menu($data)
  {
    $this->db->insert('tbl_sub_menu',$data);
  }
  function edit_sub_menu($where,$table)
  {
    return $this->db->get_where($table,$where);
  }
  function update_sub_menu($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function getsubmenu($param = 0)
	{
		return $this->db->get_where('tbl_sub_menu', array('id_sub_menu' => $param))->row();
	}
  function hapus_sub_menu($param = 0)
  {
    $menu = $this->getsubmenu($param);
    $this->db->delete('tbl_sub_menu', array('id_sub_menu' => $param));
  }
  // End Sub Menu

  // Start Menu Level
  function create_menu_level($data)
  {
    $this->db->insert('tbl_menu_level',$data);
  }
  function menu_level()
  {
    $query = $this->db->query("SELECT * FROM tbl_menu_level
    LEFT JOIN tb_user_level ON tbl_menu_level.id_level = tb_user_level.id_level
    LEFT JOIN tbl_sub_menu ON tbl_menu_level.id_sub_menu = tbl_sub_menu.id_sub_menu
    LEFT JOIN tbl_menu ON tbl_sub_menu.id_menu = tbl_menu.id_menu");

    return $query->result();
  }
  function update_menu_level($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_menu_level($param = 0)
  {
    $this->db->delete('tbl_menu_level', array('id_menu_level' => $param));
  }
  // End Menu Level
}
