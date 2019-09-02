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
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pasien</span>
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
              <?php echo $this->session->flashdata('simpan_periksa');?>
              <?php echo $this->session->flashdata('registrasi');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Pasien</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Pasien/registrasi_pasien" title="Registrasi Pasien baru" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="Goldarah">Gol Darah</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="kontak">Kontak</th>
                                        <th data-field="riwayat">Riwayat</th>
                                        <th data-field="aksi">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pasien as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama_pasien ?></td>
                                    <td><?php echo $item->jenis_kelamin ?></td>
                                    <td><?php echo $item->golongan_darah ?></td>
                                    <td><?php echo $item->alamat ?></td>
                                    <td><?php echo $item->no_kontak ?></td>
                                    <td><label class="label label-primary"><?php echo $item->jumlah_periksa ?> Berobat</label></td>
                                    <td>
                                      <a href="#javascript:; #modaledit" data-toggle="modal" type="button" title="edit" class="btn btn-custon-three btn-primary btn-xs"><i class="fa fa-edit" onclick="edit(
                                          '<?php echo $item->id_pasien ?>',
                                          '<?php echo $item->nama_pasien ?>',
                                          '<?php echo $item->jenis_kelamin ?>',
                                          '<?php echo $item->golongan_darah ?>',
                                          '<?php echo $item->tempat_lahir ?>',
                                          '<?php echo $item->tanggal_lahir ?>',
                                          '<?php echo $item->nama_ibu ?>',
                                          '<?php echo $item->alamat ?>',
                                          '<?php echo $item->no_kontak ?>',
                                        )"></i>
                                      </a>
                                      <a href="<?php echo base_url()?>Pasien/hapus_pasien/<?php echo $item->id_pasien ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                      <a href="#javascript:; #modaltambahperiksa" data-toggle="modal" class="btn btn-custon-three btn-success btn-xs" title="Tambah Pasien Praktek"><i class="fa fa-users" onclick="tambah_periksa('<?php echo $item->id_pasien ?>','<?php echo $item->nama_pasien ?>')"></i></a>
                                      <a href="<?php echo base_url()?>Rekam_medis/rekdis/<?php echo $item->id_pasien ?>" class="btn btn-custon-three btn-default btn-xs" title="Rekam Medis"><i class="fa fa-list"></i></a>
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

<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Edit Data Pasien</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Pasien/edit_pasien'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaltambahperiksa" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Tambah Data Periksa</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Periksa/tambah_periksa'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaltambahlab" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Tambah Data Periksa</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('lab/pasien/tambah_lab'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function edit(id_pasien,nama,jekel,gol,tmpt,tgl,ibu,alamat,kontak){
    $('#xid_pasien').val(id_pasien);
    $('#xnama_pasien').val(nama);
    $('#xjenis_kelamin').val(jekel);
    $('#xgolongan_darah').val(gol);
    $('#xtempat_lahir').val(tmpt);
    $('#xtanggal_lahir').val(tgl);
    $('#xnama_ibu').val(ibu);
    $('#xalamat').val(alamat);
    $('#xkontak').val(kontak);
  }
  function tambah_periksa(id_pasien,nama){
    $('#id_pasien').val(id_pasien);
    $('#xnama').val(nama);
  }
  function tambah_lab(id_pasien,nama){
    $('#xxid_pasien').val(id_pasien);
    $('#xxnama').val(nama);
  }
</script>
