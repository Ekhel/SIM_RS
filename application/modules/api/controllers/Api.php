<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{
  public function __construct()
	{
		parent::__construct();
    $this->load->model('M_api');
	}

  // Control API Pasien Start
  public function pasien_get()
  {
    $pasien = $this->M_api->get_pasien();

    foreach($pasien as $item)
    {
        $posts[] = array(
          'id_pasien'       => $item->id_pasien,
          'nama_pasien'     => $item->nama_pasien,
          'jenis_kelamin'   => $item->jenis_kelamin,
          'golongan_darah'  => $item->golongan_darah,
          'tempat_lahir'    => $item->tempat_lahir,
          'tanggal_lahir'   => $item->tanggal_lahir,
          'alamat'          => $item->alamat,
          'no_kontak'       => $item->no_kontak
        );
    }

    $response['status'] = 200;
    $response['error'] = false;
    $response['message'] = 'Data Ditemukan';
    $response['pasien'] = $posts;

    $this->response($response);
  }
  //Control API Pasien END

  // Control API Dokter Start
  public function dokter_get()
  {
    $dokter = $this->M_api->get_dokter();

    foreach($dokter as $item)
    {
        $posts[] = array(
          'id_dokter'       => $item->id_dokter,
          'nama_dokter'     => $item->nama_dokter,
          'jekel'           => $item->jekel,
          'spesialis'       => $item->spesialis,
          'tmp_lahir'       => $item->tmp_lahir,
          'tgl_lahir'       => $item->tgl_lahir,
          'alamat'          => $item->alamat,
          'no_kontak'       => $item->no_kontak_dokter,
          'no_izin_prakter' => $item->no_izin_praktek
        );
    }

    $response['status'] = 200;
    $response['error'] = false;
    $response['message'] = 'Data Ditemukan';
    $response['dokter'] = $posts;

    $this->response($response);
  }
}
