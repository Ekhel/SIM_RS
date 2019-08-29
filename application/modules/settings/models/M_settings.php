<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_settings extends CI_Model {
  public $table = 'tbl_profil';
  public $id = 'id_org';

  function get_profile($id)
  {
    $this->db->where($this->id, $id);
    return $this->db->get($this->table)->row();
  }
}
