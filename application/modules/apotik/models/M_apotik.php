<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_apotik extends CI_Model {
  function obat_alkes()
  {
    $query = $this->db->query("SELECT * FROM tbl_obatalkes
    LEFT JOIN tbl_satuan ON tbl_obatalkes.id_satuan = tbl_satuan.id_satuan");
    return $query->result();
  }
  public function kode()
  {
    $this->db->select('RIGHT(tbl_obatalkes.kode_barang,2) as kode_barang', FALSE);
    $this->db->order_by('kode_barang','DESC');
    $this->db->limit(1);
    $query = $this->db->get('tbl_obatalkes');
    if($query->num_rows() <> 0){
       $data = $query->row();
       $kode = intval($data->kode_barang) + 1;
    }
    else{
       $kode = 1;
    }
      $tgl=date('dmY');
      $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
      $kodetampil = "BR"."5".$tgl.$batas;
      return $kodetampil;
  }
  function simpan_obatalkes($data)
  {
    $this->db->insert('tbl_obatalkes',$data);
  }
  function update_obatalkes($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function getobatalkes($param = 0)
	{
		return $this->db->get_where('tbl_obatalkes', array('id_barang' => $param))->row();
	}
  function hapus_obatalkes($param = 0)
  {
    $dokter = $this->getobatalkes($param);
    $this->db->delete('tbl_obatalkes', array('id_barang' => $param));
  }

  // End CRUD Obat & Alat Kesehatan

  // Start CRUD Satuan

  function satuan()
  {
    $query = $this->db->query("SELECT * FROM tbl_satuan");
    return $query->result();
  }
  function tambah_satuan($data)
  {
    $this->db->insert('tbl_satuan',$data);
  }
  function update_satuan($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function getsatuan($param = 0)
	{
		return $this->db->get_where('tbl_satuan', array('id_satuan' => $param))->row();
	}
  function hapus_satuan($param = 0)
  {
    $dokter = $this->getsatuan($param);
    $this->db->delete('tbl_satuan', array('id_satuan' => $param));
  }
  // End CRUD Satuan

  // Start CRUD Supllier

  function supplier()
  {
    $query = $this->db->query("SELECT * FROM tbl_supplier");
    return $query->result();
  }
  function tambah_supplier($data)
  {
    $this->db->insert('tbl_supplier',$data);
  }
  function edit_supplier($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function getsupplier($param = 0)
	{
		return $this->db->get_where('tbl_supplier', array('kode_supplier' => $param))->row();
	}
  function hapus_supplier($param = 0)
  {
    $supplier = $this->getsupplier($param);
    $this->db->delete('tbl_supplier', array('kode_supplier' => $param));
  }
  //end Supplier CRUD
}
