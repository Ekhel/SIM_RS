<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {
  function pasien()
  {
    $query = $this->db->query("SELECT
    tbl_pasien.id_pasien as id_pasien,
    tbl_pasien.nama_pasien as nama_pasien,
    tbl_pasien.jenis_kelamin as jenis_kelamin,
    tbl_pasien.golongan_darah as golongan_darah,
    tbl_pasien.tempat_lahir as tempat_lahir,
    tbl_pasien.tanggal_lahir as tanggal_lahir,
    tbl_pasien.nama_ibu as nama_ibu,
    tbl_pasien.alamat as alamat,
    tbl_pasien.no_kontak as no_kontak,
    tbl_pasien.date_created as date_created,
    tbl_pasien.petugas as petugas,
    jumlah_periksa
    FROM tbl_pasien
    LEFT JOIN(SELECT id_pasien, COUNT(Distinct CASE WHEN status = 'sudah' THEN id_periksa END) as jumlah_periksa
              FROM tbl_periksa
              GROUP BY id_pasien) a using (id_pasien)
    WHERE id_pasien");
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
  function hapus_pasien($id_pasien = 0)
  {
    $nelayan = $this->getpasien($param);
    $this->db->delete('tbl_pasien', array('id_pasien' => $param));
  }
}
