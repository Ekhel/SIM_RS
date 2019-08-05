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
                                <li><a href="#">Registrasi</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Periksa</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$hari_ini = date('d-m-Y');
foreach($hitung as $j){
  $total = $j->jumlah_pasien;
  $sudah = $j->sudah;
} ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

              <?php echo $this->session->flashdata('update_status');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Praktek Dokter</h1>
                            <div class="sparkline13-outline-icon" onload="waktu()">
                              <span><p class="label label-primary"><strong> TANGGAL : <?php echo $hari_ini ?></strong></p></span>
                              <span><text><strong>Jumlah Pendaftar : </strong></text> <label class="label label-primary"> <?php echo $total ?> Pasien</label></span>
                              <span><text><strong>Sudah Diperiksa : </strong></text> <label class="label label-success"> <?php echo $sudah ?> Pasien</label></span>
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
                                        <th data-field="golongan">Gol Darah</th>
                                        <th data-field="status">Status</th>
                                        <th data-field="aksi">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($periksa as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nama_pasien ?></td>
                                    <td><?php echo $item->nama_poliklinik ?></td>
                                    <td><?php echo $item->golongan_darah ?></td>
                                    <td><?php if($item->status == 'belum'){
                                        echo "<label class='label label-primary' title='Belum Di periksa dokter'>";
                                        echo $item->status;
                                        echo "</label>";
                                      }
                                        else{
                                        echo "<label class='label label-success' title='sudah diperiksa oleh dokter'>";
                                        echo $item->status;
                                        echo "</label>";
                                        }
                                     ?>
                                   </td>
                                    <td>
                                      <a href="<?php echo base_url()?>Periksa/hapus_periksa/<?php echo $item->id_periksa ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                      <a href="#javascript:; #updatestatus" data-toggle="modal" class="btn btn-custon-three btn-danger btn-xs" title="Ubah Status" onclick="update('<?php echo $item->id_periksa ?>')"><i class="fa fa-cogs"></i></a>
                                      <?php if($item->status == 'sudah'){?>
                                        <a href="#javascript:; #catatandiagnosa" data-toggle="modal" class="btn btn-custon-three btn-danger btn-xs" title="Tambah Catatan Diagnosa" onclick="update_diagnosa('<?php echo $item->id_periksa ?>','<?php echo $item->nama_pasien ?>')"><i class="fa fa-pencil-square-o"></i></a>
                                      <?php } ?>
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

<div class="modal fade" id="updatestatus" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
        <?php $this->load->view('Periksa/update_status'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="catatandiagnosa" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Catatan Diagnosa Dokter</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Periksa/diagnosa'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
  function edit(id_periksa,id_pasien,tanggal,id_poliklinik,status){
    $('#xid_periksa').val(id_periksa);
    $('#xid_pasien').val(id_pasien);
    $('#xtanggal').val(tanggal);
    $('#xid_poliklinik').val(id_poliklinik);
    $('#xstatus').val(status);
  }
  function update(id_periksa){
    $('#xid_periksa').val(id_periksa);
  }

  function update_diagnosa(id_periksa,nama){
    $('#xid_periksa').val(id_periksa);
    $('#xnama').val(nama);
  }

  window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
