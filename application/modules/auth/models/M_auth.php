<?php
class M_auth extends CI_Model {
	var $table = 'tb_user';

	function cek($user, $sandi){
		$query = $this->db->get_where($this->table, array('nik' => $user, 'sandi' => $sandi, 'status' => 'aktif'), 1, 0);
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	//untuk mendapatkan data admin yg login
	function getAdmin($nik, $sandi){
		return $query = $this->db->get_where($this->table, array('nik' => $nik, 'sandi' => $sandi, 'status' => 'aktif'), 1, 0)->row();
	}
}
