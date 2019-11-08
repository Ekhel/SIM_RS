<?php

function menu_logged_in()
{
  $ci = get_instance();
  $level = $ci->session->userdata('level');

  //$menu = $ci->uri->segment(1);
  $sub_menu = $ci->uri->segment(1);

  //$qmenu = $ci->db->get_where('tb_menu', ['menu' => $menu])->row_array();
  //$id_menu = $qmenu['id_menu'];

  $qsubmenu = $ci->db->get_where('tb_sub_menu',['modul' => $sub_menu])->row_array();
  $id_menu = $qsubmenu['id_menu'];
  $id_sub_menu = $qsubmenu['id_sub_menu'];

  $menu_level = $ci->db->get_where('tb_menu_level',[
    'id_level'  => $level,
    'id_menu'   => $id_menu,
    'id_sub_menu'   => $id_sub_menu
  ]);

  //$menu_level = $ci->db->query("SELECT
  //tb_menu_level.id_level as id_level,
  //tb_sub_menu.id_menu as id_menu,
  //tb_menu_level.id_sub_menu as id_sub_menu
  //FROM tb_menu_level
  //LEFT JOIN tb_sub_menu ON tb_menu_level.id_sub_menu = tb_sub_menu.id_sub_menu
  //WHERE tb_menu_level.id_level = '$level' AND tb_sub_menu.id_menu = '$id_menu' AND tb_menu_level.id_sub_menu= '$id_sub_menu'");

  if($menu_level->num_rows() < 1){
    redirect('Auth/PageNotFound');
  }
}
