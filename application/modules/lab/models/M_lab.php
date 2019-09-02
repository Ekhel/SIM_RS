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
  function periksa_lab()
  {
    $tanggal_sekarang = date('y-m-d');
    $query = $this->db->query("SELECT * FROM tbl_periksa_lab
    LEFT JOIN tbl_pasien on tbl_periksa_lab.id_pasien = tbl_pasien.id_pasien
    WHERE tanggal_periksa = '$tanggal_sekarang' ");
    return $query->result();
  }
  function hitung_pasien_hariini()
  {
    $tanggal_sekarang = date('y-m-d');

    $query = $this->db->query("SELECT
      count(id_periksa_lab) as jumlah_pasien
      FROM tbl_periksa_lab
      WHERE tanggal_periksa = '$tanggal_sekarang' ");
    return $query->result();
  }
  function simpan_hasil_lab($data)
  {
    $this->db->insert('tbl_hasil_lab',$data);
  }
  function detail_periksa($id_periksa)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa
    LEFT JOIN tbl_pasien on tbl_periksa.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik on tbl_periksa.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tbl_periksa.id_periksa = '$id_periksa' ");
    return $query->result();
  }
  function detail_hasil_lab($id_periksa)
  {
    $query = $this->db->query("SELECT * FROM tbl_hasil_lab
    LEFT JOIN tbl_sub_jenis_periksa ON tbl_hasil_lab.id_sub_jenis = tbl_sub_jenis_periksa.id_sub_jenis
    WHERE tbl_hasil_lab.id_periksa = '$id_periksa'");

    return $query->result();
  }
  function kode_lab()
  {
    $this->db->select('RIGHT(tbl_periksa_lab.kode_pemeriksaan,2) as kode_pemeriksaan', FALSE);
    $this->db->order_by('kode_pemeriksaan','DESC');
    $this->db->limit(1);
    $query = $this->db->get('tbl_periksa_lab');
    if($query->num_rows() <> 0){
       $data = $query->row();
       $kode = intval($data->kode_pemeriksaan) + 1;
    }
    else{
       $kode = 1;
    }
      $tgl=date('dmY');
      $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
      $kodetampil = "LAB"."5".$tgl.$batas;
      return $kodetampil;
  }
  function tambah_periksa_lab($data)
  {
    $this->db->insert('tbl_periksa_lab',$data);
  }
  function simpan_jenis_pemeriksaan($data)
  {
    $this->db->insert('tbl_jenis_periksalab',$data);
  }
  function jenis_periksa_lab($id)
  {
    $query = $this->db->query("SELECT
      tbl_jenis_periksalab.id_jenis_pasien as id_jenis_pasien,
      tbl_jenis_periksalab.id_periksa_lab as id_periksa_lab,
      tbl_jenis_periksalab.id_jenisperiksa as id_jenisperiksa,
      tbl_jenis_periksalab.id_pasien as id_pasien,
      tbl_jenisperiksa.nama_periksa as nama_periksa,
      tbl_jenisperiksa.harga_jenis as harga_jenis,
      COUNT(tbl_sub_jenis_periksa.id_sub_jenis) as jumlah_sub
      FROM tbl_jenis_periksalab
      LEFT JOIN tbl_jenisperiksa ON tbl_jenis_periksalab.id_jenisperiksa = tbl_jenisperiksa.id_jenisperiksa
      LEFT JOIN tbl_sub_jenis_periksa ON tbl_jenis_periksalab.id_sub_jenis = tbl_sub_jenis_periksa.id_sub_jenis
      WHERE tbl_jenis_periksalab.id_periksa_lab = '$id'
      GROUP BY tbl_jenis_periksalab.id_jenisperiksa");
    return $query->result();
  }
  function get_periksa_lab($id_periksa_lab)
  {
    $query = $this->db->query("SELECT * FROM tbl_periksa_lab
    LEFT JOIN tbl_pasien ON tbl_periksa_lab.id_pasien = tbl_pasien.id_pasien
    LEFT JOIN tbl_poliklinik ON tbl_periksa_lab.id_poliklinik = tbl_poliklinik.id_poliklinik
    WHERE tbl_periksa_lab.id_periksa_lab = '$id_periksa_lab' ");

    return $query->result();
  }
  function cetak_hasil_pemeriksaan($id_periksa_lab,$id_jenisperiksa)
  {
    $query = $this->db->query("SELECT * FROM tbl_jenis_periksalab
      LEFT JOIN tbl_sub_jenis_periksa ON tbl_jenis_periksalab.id_sub_jenis = tbl_sub_jenis_periksa.id_sub_jenis
      WHERE tbl_jenis_periksalab.id_periksa_lab = '$id_periksa_lab' AND tbl_jenis_periksalab.id_jenisperiksa = '$id_jenisperiksa' ");
    return $query->result();
  }
  function sub_periksa_lab()
  {
    $query = $this->db->query("SELECT * FROM tbl_sub_jenis_periksa
    LEFT JOIN tbl_jenisperiksa ON tbl_sub_jenis_periksa.id_jenisperiksa = tbl_jenisperiksa.id_jenisperiksa");

    return $query->result();
  }

  function simpan_sub_jenis($data)
  {
    $this->db->insert('tbl_sub_jenis_periksa',$data);
  }
  function edit_sub_jenis($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function getsubjenis($param = 0)
	{
		return $this->db->get_where('tbl_sub_jenis_periksa', array('id_sub_jenis' => $param))->row();
	}
  function hapus_sub_jenis($param = 0)
  {
    $sub = $this->getsubjenis($param);
    $this->db->delete('tbl_sub_jenis_periksa', array('id_sub_jenis' => $param));
  }
}
