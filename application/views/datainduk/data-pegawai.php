<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                  <input type="text" placeholder="Search..." class="form-control">
                                  <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Data induk</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pegawai</span>
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
                            <h1>Data <span class="table-project-n"></span> Pegawai</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Data_induk/tambah_pegawai" title="Tambah Pegawai Baru" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="nik">NIK</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="jekel">Jekel</th>
                                        <th data-field="pend">Pend. Terahir</th>
                                        <th data-field="tmp">tmp & tgl lahir</th>
                                        <th data-field="jabatan">Jabatan</th>
                                        <th data-field="aksi">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pegawai as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nik ?></td>
                                    <td><?php echo $item->nama_pegawai ?></td>
                                    <td><?php echo $item->jekel ?></td>
                                    <td><?php echo $item->pend_terahir ?></td>
                                    <td><?php echo $item->tmp_lahir ?> / <?php echo $item->tgl_lahir ?></td>
                                    <td><?php echo $item->nama_jabatan ?></td>
                                    <td>
                                      <a href="#javascript:; #modal_edit" data-toggle="modal" type="button" title="edit" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-edit" onclick="edit_pegawai(
                                          '<?php echo $item->nik ?>',
                                          '<?php echo $item->nama_pegawai ?>',
                                          '<?php echo $item->jekel ?>',
                                          '<?php echo $item->pend_terahir ?>',
                                          '<?php echo $item->npwp ?>',
                                          '<?php echo $item->tmp_lahir ?>',
                                          '<?php echo $item->tgl_lahir ?>',
                                          '<?php echo $item->id_jabatan ?>',
                                        )"></i>
                                      </a>
                                      <a href="<?php echo base_url()?>Data_induk/hapus_pegawai/<?php echo $item->nik ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Pegawai</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('datainduk/edit/pegawai'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
  function edit_pegawai(nik,nama,jekel,pend_terahir,npwp,lahir,tgl,id_jabatan){
    $('#xnik').val(nik);
    $('#xnama').val(nama);
    $('#xjekel').val(jekel);
    $('#xpend_terahir').val(pend_terahir);
    $('#xnpwp').val(npwp);
    $('#xlahir').val(lahir);
    $('#xtgl').val(tgl);
    $('#xid_jabatan').val(id_jabatan);
  }
</script>
