<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <?php foreach($detail as $p){ ?>
                            <ul class="breadcome-menu">
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Pasien">Pasien</a><span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod"><?php echo $p->nama_pasien ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="project-details-wrap shadow-reset">
  <div class="row">
    <div class="col-xs-1">
    </div>
    <h4 class="text-uppercase"><strong>RIWAYAT REKAM MEDIS PASIEN</strong> <i class="fa fa-list"></i></h4>
    <hr/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="project-details-mg">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="project-details-st">
                      <span><strong>Nama : </strong></span>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="project-list-ad">
                    <span class="text-uppercase"><?php echo $p->nama_pasien ?></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="project-details-mg">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="project-details-st">
                    <span><strong>Jekel:</strong></span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="project-list-ad">
                  <span class="text-uppercase"><?php echo $p->jenis_kelamin ?></span>
                </div>
            </div>
        </div>
      </div>
      <div class="project-details-mg">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="project-details-st">
                    <span><strong>Gol Darah :</strong></span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="project-list-ad">
                  <span class="text-uppercase"><?php echo $p->golongan_darah ?></span>
                </div>
            </div>
        </div>
      </div>
      <div class="project-details-mg">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="project-details-st">
                    <span><strong>Alamat:</strong></span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="project-list-ad">
                  <span class="text-uppercase"><?php echo $p->alamat ?></span>
                </div>
            </div>
        </div>
      </div>
      <div class="project-details-mg">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="project-details-st">
                    <span><strong>No Kontak:</strong></span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="project-list-ad">
                  <span class="text-uppercase"><?php echo $p->no_kontak ?></span>
                </div>
            </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>

<br/>
<div class="data-table-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="sparkline13-list shadow-reset">
          <div class="sparkline13-hd">
              <div class="main-sparkline13-hd">
                  <h1>Data <span class="table-project-n"></span> RIWAYAT CONTROL DOKTER</h1>
              </div>
          </div>
          <div class="sparkline13-list sparkline13-hd shadow-reset">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Polik</th>
                  <th>Tanggal</th>
                  <th>Catatan Diagnosa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($periksa as $i){?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $i->nama_poliklinik ?></td>
                    <td><?php echo $i->tanggal ?></td>
                    <td><?php echo $i->diagnosa ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
                  <h1>Data <span class="table-project-n"></span> RIWAYAT PEMERIKSAAN LAB</h1>
              </div>
          </div>
          <div class="sparkline13-list sparkline13-hd shadow-reset">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Jenis Periksa</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($periksa_lab as $item){
                  echo "<tr>";
                  echo "<th colspan='3' scope='colgroup'>".$item->kode_pemeriksaan. "</th>";
                  echo "</tr>";
                  $id_periksa_lab = $item->id_periksa_lab;
                  foreach($lab as $l){
                    if($l->id_periksa_lab==$id_periksa_lab){
                      echo "<tr>";
                      echo "<td".$l->nama_periksa. "</td>";
                      echo "<td".$l->jumlah_sub. "</td>";
                      echo "<td></td>";
                      echo "</tr>";
                    }
                  }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
