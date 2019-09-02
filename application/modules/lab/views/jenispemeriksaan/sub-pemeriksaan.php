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
                                <li><a href="#">Laboratorium</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Sub Jenis Pemeriksaan</span>
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
                            <h1>Data <span class="table-project-n"></span>Sub Jenis Pemeriksaan</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="#modal_tambah" data-toggle="modal" title="Tambah Sub Jenis" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="nama">Jenis Pemeriksaan</th>
                                        <th data-field="sub">SUb Jenis</th>
                                        <th data-field="satuan">Satuan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($sub as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama_periksa ?></td>
                                    <td><?php echo $item->nama_jenis ?></td>
                                    <td><?php echo $item->satuan ?></td>
                                    <td>
                                      <a href="#javascript:; #modal_edit" data-toggle="modal" type="button" title="edit" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-edit" onclick="edit_sub(
                                          '<?php echo $item->id_sub_jenis ?>',
                                          '<?php echo $item->id_jenisperiksa ?>',
                                          '<?php echo $item->nama_jenis ?>',
                                          '<?php echo $item->satuan ?>',
                                          '<?php echo $item->keterangan ?>',
                                        )"></i>
                                      </a>
                                      <a href="<?php echo base_url()?>Lab/hapus_subjenis/<?php echo $item->id_sub_jenis ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Tambah SUb Jenis Pemeriksaan</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('lab/jenispemeriksaan/tambah_sub_pemeriksaan') ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Sub Jenis Pemeriksaan</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('lab/jenispemeriksaan/edit_sub_pemeriksaan') ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
  function edit_sub(id_sub_jenis,id_jenisperiksa,nama_jenis,satuan,keterangan){
    $('#xid_sub_jenis').val(id_sub_jenis);
    $('#xid_jenisperiksa').val(id_jenisperiksa);
    $('#xnama_jenis').val(nama_jenis);
    $('#xsatuan').val(satuan);
    $('#xketerangan').val(keterangan);
  }
</script>
