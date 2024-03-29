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
                                <li><span class="bread-blod">Supplier</span>
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
                            <h1>Data <span class="table-project-n"></span> Supplier</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Apotik/tambah_supplier" title="Tambah Item Supplier" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="kode">KODE</th>
                                        <th data-field="nama">Nama Supplier</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="kontak">Kontak</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  foreach($supplier as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $item->kode_supplier ?></td>
                                    <td><?php echo $item->nama_supplier ?></td>
                                    <td><?php echo $item->alamat ?></td>
                                    <td><?php echo $item->no_telpon ?></td>
                                    <td>
                                      <a href="#javascript:; #modal_edit" data-toggle="modal" type="button" title="edit" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-edit" onclick="edit_supplier(
                                          '<?php echo $item->kode_supplier ?>',
                                          '<?php echo $item->nama_supplier ?>',
                                          '<?php echo $item->alamat ?>',
                                          '<?php echo $item->no_telpon ?>',
                                        )"></i>
                                      </a>
                                      <a href="<?php echo base_url()?>Apotik/hapus_supplier/<?php echo $item->kode_supplier ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Supplier</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Apotik/supplier/edit_supplier'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
  function edit_supplier(kode_supplier,nama_supplier,alamat,no_telpon){
    $('#xkode_supplier').val(kode_supplier);
    $('#xnama_supplier').val(nama_supplier);
    $('#xalamat').val(alamat);
    $('#xno_telpon').val(no_telpon);
  }
</script>
