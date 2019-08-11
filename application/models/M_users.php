<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {
  function users()
  {
    $query = $this->db->query("SELECT * FROM tb_user
    LEFT JOIN tb_user_level ON tb_user.level = tb_user_level.id_level");

    return $query->result();
  }
}
