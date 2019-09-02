<link rel="stylesheet" href="<?php echo base_url()?>assets/css/code-editor/codemirror.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/code-editor/ambiance.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">

<script src="<?php echo base_url()?>assets/js/code-editor/codemirror.js"></script>
<script src="<?php echo base_url()?>assets/js/code-editor/code-editor.js"></script>
<script src="<?php echo base_url()?>assets/js/code-editor/code-editor-active.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>

<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">API</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dokumentasi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="data-table-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
          <div class="sparkline13-hd">
              <div class="main-sparkline13-hd">
                  <h1>Dokumentasi <span class="table-project-n"></span> Penggunaan API SIM Poliklinik</h1>
              </div>
          </div>
          <div class="sparkline13-list sparkline13-hd shadow-reset">
            <text>
              <strong>KETERANGAN : </strong>
              <br/>
              SIM Poliklinik Memiliki Servis Endpoint API, yang Memungkinkan Applikasi Lain dapat Dengan Mudah Mengambil Data dari SIM Poliklinik <br/>
              Untuk Sementara API Sim Poliklinik Dibatasi hanya untuk Mengakses Data : <br/>
              1. Pasien <br/>
              2. Dokter </br>
            </text>
            <br/>
            <br/>
            <text>
              <strong>PENGGUNAAN UMUM : </strong>
              <br/>
              Cukup Request Ke API Endpoint Menggunakan http request (Method GET) Maka Data Akan Direply. <br/>
              Data Output Dari API ini adalah JSON Format.
              <br/>
              <br/>
              <h4>Contoh Pengambilan Data <strong>Pasien :</strong></h4>
            </text>
            <div class="code-editor-area mg-b-40">
              <div class="row">
                <div class="col-lg-6">
                  <div class="code-editor-single code-b-mg-30 shadow-reset">
                    <h4>Menggunakan Request Ajax</h4>
                    <img src="<?php echo base_url()?>assets/img/dokapi/ajax_api_pasien.png" alt="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="code-editor-single code-b-mg-30 shadow-reset">
                    <h4>Menggunakan Curl PHP</h4>
                    <img src="<?php echo base_url()?>assets/img/dokapi/curl_api_pasien.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <text>
              <h4><strong>Tabel API : </strong></h4> <br/>
            </text>
            <hr/>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>API Endpoint</th>
                  <th>Method</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Pasien</td>
                  <td>Menampilkan Data Pasien Secara Menyeluruh</td>
                  <td> http://localhost/Api/pasien </td>
                  <td>GET</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Dokter</td>
                  <td>Menampilkan Data Dokter Secara Menyeluruh yang aktif dan Tidak Aktif</td>
                  <td> http://localhost/Api/dokter </td>
                  <td>GET</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "http://localhost/Api/Pasien",
    success: function(data){
      console.log(data);
    }
  });
</script>
