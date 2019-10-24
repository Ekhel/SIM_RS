<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

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
                                <li><a href="#">Apotik</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">e - Resep</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $hari_ini = date('d-m-Y');  ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> e - Resep</h1>
                            <div class="sparkline13-outline-icon" onload="waktu()">
                              <span><a href="<?php echo base_url()?>Resep" class="btn btn-xs btn-primary" title="Refresh Data"><i class="fa fa-refresh"></i></a></span>
                              <span><p class="label label-primary"><strong> TANGGAL : <?php echo $hari_ini ?></strong></p></span>
                              <span><i class="fa fa-clock"></i><text id="jam"></text> : <text id="menit"></text> : <text id="detik"></text></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="polik">Polik</th>
                                        <th data-field="aksi">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($resep as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama_pasien ?></td>
                                    <td><?php echo $item->nama_poliklinik ?></td>
                                    <td>
                                      <a href="#modaldetailresep" data-toggle="modal" class="btn btn-custon-three btn-warning btn-xs" data-id="<?php echo $item->id_periksa ?>" title="Resep Dokter"><i class="fa fa-file"></i></a>
                                      <a href="#" data-toggle="modal" class="btn btn-custon-three btn-success btn-xs" title="Cetak Resep"><i class="fa fa-print"></i></a>
                                      <a href="<?php echo base_url()?>Resep/cetak_eticket/<?php echo $item->id_periksa ?>" target="_blank" class="btn btn-custon-three btn-primary btn-xs" title="Cetak e - Ticket"><i class="fa fa-print"></i></a>
                                    </td>
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
</div>

<div class="modal fade" id="modaldetailresep" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Detail e - Resep </h4>
			</div>
			<div class="modal-body">
        <div class="item-resep">

        </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
  $(document).ready(function(){
    $('#modaldetailresep').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : '<?php echo base_url();?>Resep/item_resep/'+id,
            data :  'id='+ id,
            success : function(data){
            $('.item-resep').html(data);
            }
        });
     });
  });


  window.setTimeout("waktu()",1000);
  function waktu() {
      var tanggal = new Date();
      setTimeout("waktu()",1000);
      document.getElementById("jam").innerHTML = tanggal.getHours();
      document.getElementById("menit").innerHTML = tanggal.getMinutes();
      document.getElementById("detik").innerHTML = tanggal.getSeconds();
  }
</script>
