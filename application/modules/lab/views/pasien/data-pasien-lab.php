<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

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
                                <li><a href="#">Laboratorium</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pasien Periksa Lab</span>
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
} ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Pasien Periksa Laboratorium</h1>
                            <div class="sparkline13-outline-icon" onload="waktu()">
                              <span><p class="label label-primary"><strong> TANGGAL : <?php echo $hari_ini ?></strong></p></span>
                              <span><text><strong>Jumlah Pendaftar Lab : </strong></text> <label class="label label-primary"> <?php echo $total ?> Pasien</label></span>
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
                                        <th data-field="golongan">Gol Darah</th>

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
                                    <td><?php echo $item->golongan_darah ?></td>
                                    <td>
                                      <a href="#modaltambahjenis" data-toggle="modal" class="btn btn-xs btn-primary" title="Tambah Jenis Pemeriksaan Lab"><i class="fa fa-plus-circle" onclick="tambah_jenis(
                                        '<?php echo $item->id_periksa_lab ?>',
                                        '<?php echo $item->id_pasien ?>',
                                        '<?php echo $item->nama_pasien ?>',
                                        )"></i></a>
                                      <a href="#javascript:; #modaljenispemeriksaan" data-toggle="modal" class="btn btn-xs btn-primary" data-id="<?php echo $item->id_periksa_lab ?>"><i class="fa fa-cogs"></i></a>
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

<div class="modal fade" id="modaltambahjenis" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Form Tambah Jenis Pemeriksaan Laboratorium</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('Lab/pasien/tambah_jenis'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modaljenispemeriksaan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Jenis Pemeriksaan Pasien Lab</h4>
			</div>
			<div class="modal-body">
        <div class="jenis-pemeriksaan">

        </div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

  function tambah_jenis(id_periksa_lab,id_pasien,nama){
    $('#xid_periksa_lab').val(id_periksa_lab);
    $('#xid_pasien').val(id_pasien);
    $('#xnama_pasien').val(nama);
  }

  $('select[name="id_jenisperiksa"]').on('change', function(e) {
    var id_jenisperiksa = $(this).val();
    if(id_jenisperiksa) {
        $.ajax({
            url: '<?php echo base_url("Lab/get_sub_jenis/") ?>'+id_jenisperiksa,
            type: "GET",
            dataType: "json",
            success:function(data) {
                $('select[name="id_sub_jenis"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="id_sub_jenis"]').append('<option value="'+ value.id_sub_jenis +'">'+ value.nama_jenis+'</option>');

                });
            }
        });
    }else{
        $('select[name="id_sub_jenis"]').empty();
    }
  });

  $(document).ready(function(){
    $('#modaljenispemeriksaan').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : '<?php echo base_url();?>Lab/jenis_pemeriksaan/'+id,
            data :  'id='+ id,
            success : function(data){
            $('.jenis-pemeriksaan').html(data);
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
