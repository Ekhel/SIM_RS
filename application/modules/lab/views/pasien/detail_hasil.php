
<div class="project-details-wrap shadow-reset">
  <?php foreach($periksa as $item){?>
  <div class="row">
      <div class="col-xs-1">
      </div>
      <h4 class="text-uppercase"><strong>HASIL PEMERIKSAAN LABORATORIRUM</strong> <i class="fa fa-bar-chart-o"></i></h4>
      <hr/>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="project-details-mg">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="project-details-st">
                      <span><strong>Nama :</strong></span>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="project-list-ad">
                    <span class="text-uppercase"><?php echo $item->nama_pasien ?></span>
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
                    <span class="text-uppercase"><?php echo $item->jenis_kelamin ?></span>
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
                    <span class="text-uppercase"><?php echo $item->golongan_darah ?></span>
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
                    <span class="text-uppercase"><?php echo $item->alamat ?></span>
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
                    <span class="text-uppercase"><?php echo $item->no_kontak ?></span>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Bar II -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="project-details-mg">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="project-details-st">
                      <span><strong>Polik:</strong></span>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="project-list-ad">
                    <span class="text-uppercase"><?php echo $item->nama_poliklinik ?></span>
                  </div>
              </div>
          </div>
        </div>
        <div class="project-details-mg">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="project-details-st">
                      <span><strong>Dokter :</strong></span>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="project-list-ad">
                    <span class="text-uppercase"></span>
                  </div>
              </div>
          </div>
        </div>
        <div class="project-details-mg">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="project-details-st">
                      <span><strong>Tanggal :</strong></span>
                  </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="project-list-ad">
                    <span class="text-uppercase"><?php echo $item->tanggal ?></span>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </br>
      <table class="small table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pemeriksaan</th>
            <th>Hasil</th>
            <th>Satuan</th>
            <th>Nilai Rujukan</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach($hasil as $result){?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $result->nama_jenis ?></td>
              <td><?php echo $result->hasil ?></td>
              <td><?php echo $result->satuan ?></td>
              <td><?php echo $result->nilai_rujukan ?></td>
              <td><?php echo $result->keterangan ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <br/>
      <a href="<?php echo base_url()?>Lab/cetak_detail/<?php echo $item->id_periksa ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print" title="Cetak"></i></a>
      <?php } ?>
  </div>
</div>
