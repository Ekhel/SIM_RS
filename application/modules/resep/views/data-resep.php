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
                            <h1>Data <span class="table-project-n"></span> e - Resep Hari ini</h1>

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
                                        <th data-field="Nama">Nama Pasien</th>
                                        <th data-field="polik">Polik</th>
                                        <th data-field="jumlah">Jumlah Item</th>
                                        <th data-field="total">Total</th>
                                        <th></th>
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
                                    <td><?php echo $item->jb ?></td>
                                    <td><?php echo number_format($item->total) ?></td>
                                    <td>
                                      <a href="#javascript:; #modaldetailresep" data-toggle="modal" class="btn btn-xs btn-default" data-id="<?php echo $item->id_periksa ?>"><i class="fa fa-list"></i></a>
                                      <a href="#" type="button" title="Cetak Resep" class="btn btn-custon-three btn-primary btn-xs" ><i class="fa fa-file"></i></a>
                                      <a href="<?php echo base_url()?>Resep/cetak_eticket/<?php echo $item->id_periksa ?>" type="button" title="Cetak Ticket" class="btn btn-custon-three btn-danger btn-xs" target="_blank"><i class="fa fa-print"></i></a>
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
	<div class="modal-dialog">
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
</script>
