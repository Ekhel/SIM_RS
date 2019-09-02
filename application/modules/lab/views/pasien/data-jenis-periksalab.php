<div class="project-details-wrap shadow-reset">
  <div class="row">
    <div class="col-md-12">
      <table class="small table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jenis Periksa</th>
            <th>Jumlah Sub Item</th>
            <th>Harga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach($jenis_periksa as $item){ ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $item->nama_periksa ?></td>
              <td><label class="label label-default"><?php echo $item->jumlah_sub ?></label></td>
              <td><?php echo number_format($item->harga_jenis) ?></td>
              <td>
                <a href="<?php echo base_url()?>Lab/cetak_hasil_periksalab/<?php echo $item->id_periksa_lab?>/<?php echo $item->id_jenisperiksa?>" title="Cetak Hasil" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-print"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
