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
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dokter</span>
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
                            <h1>Data <span class="table-project-n"></span> Dokter</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Dokter/tambah_dokter" title="Registrasi Pasien baru" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="jekel">Jekel</th>
                                        <th data-field="tmp">Tmp & Tgl Lahir</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="kotak">No Kontak</th>
                                        <th data-field="spesialis">Spesialis</th>
                                        <th data-field="izin">Izin Praktek</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($dokter as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama_dokter ?></td>
                                    <td><?php echo $item->jekel ?></td>
                                    <td><?php echo $item->tmp_lahir ?> / <?php echo $item->tgl_lahir ?></td>
                                    <td><?php echo $item->alamat ?></td>
                                    <td><?php echo $item->no_kontak_dokter ?></td>
                                    <td><?php echo $item->spesialis ?></td>
                                    <td><?php echo $item->no_izin_praktek ?></td>
                                    <td>
                                      <a href="#javascript:; #modal_edit" data-toggle="modal" type="button" title="edit" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-edit" onclick="edit_dokter(
                                          '<?php echo $item->id_dokter ?>',
                                          '<?php echo $item->nama_dokter ?>',
                                          '<?php echo $item->jekel ?>',
                                          '<?php echo $item->tmp_lahir ?>',
                                          '<?php echo $item->tgl_lahir ?>',
                                          '<?php echo $item->id_agama ?>',
                                          '<?php echo $item->alamat ?>',
                                          '<?php echo $item->no_kontak_dokter ?>',
                                          '<?php echo $item->id_spesialis ?>',
                                          '<?php echo $item->no_izin_praktek ?>',
                                        )"></i>
                                      </a>
                                      <a href="<?php echo base_url()?>Dokter/hapus_dokter/<?php echo $item->id_dokter ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Dokter</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Dokter/edit_dokter'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
  function edit_dokter(id_dokter,nama,jekel,lahir,tgl,agama,alamat,kontak,spesialis,no_praktek){
    $('#xid_dokter').val(id_dokter);
    $('#xnama').val(nama);
    $('#xjekel').val(jekel);
    $('#xlahir').val(lahir);
    $('#xtgl').val(tgl);
    $('#xagama').val(agama);
    $('#xalamat').val(alamat);
    $('#xkontak').val(kontak);
    $('#xspesialis').val(spesialis);
    $('#xno_praktek').val(no_praktek);
  }
</script>
