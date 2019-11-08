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
                                <li><a href="#">Pengaturan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Users">Pengguna</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah Pengguna</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1><i class="fa fa-edit"></i> Form Edit Pengguna</h1>
                    <div class="sparkline12-outline-icon">
                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                              <form action="<?php echo base_url()?>users/edit_user_proses" method="post">
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">NIP</label>
                                       </div>
                                       <div class="col-lg-8">
                                           <input name="id_user" value="<?php echo $detail['id_user'] ?>" type="hidden" class="form-control" />
                                           <input name="nik" value="<?php echo $detail['nik'] ?>" id="xnip" type="text" class="form-control" />
                                       </div>
                                       <div class="col-lg-1">
                                           <a href="#modal_pegawai" data-toggle="modal" title="Data Pegawai" class="btn btn-primary"><i class="fa fa-list"></i></a>
                                        </div>
                                   </div>
                                  </div>
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama" type="text" value="<?php echo $detail['nama'] ?>" id="xnama" class="form-control" />
                                        </div>
                                      </div>
                                    </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Password</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="sandi" type="password" value="<?php echo $detail['sandi_deskripsi'] ?>" class="form-control" />
                                       </div>
                                   </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Level</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="level" class="form-control" id="level">
                                           <option value="<?php echo $detail['level'] ?>">Selected</option>
                                              <?php
                                              foreach($level as $p => $val)
                                              {?>
                                              <option value="<?php echo $val->id_level;?>"><?php echo $val->level; ?></option>
                                              <?php
                                              }?>
                                         </select>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner" id="poliklinik" hidden="true">
                                   <div class="row">
                                     <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro" id="poliklinik">Poliklinik</label>
                                     </div>
                                     <div class="col-lg-6">
                                       <select class="form-control" name="id_poliklinik">
                                         <option value="">-- Pilih --</option>
                                            <?php
                                            foreach($polik as $p => $val)
                                            {?>
                                            <option value="<?php echo $val->id_poliklinik;?>"><?php echo $val->nama_poliklinik; ?></option>
                                            <?php
                                            }?>
                                       </select>
                                     </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Status</label>
                                      </div>
                                      <div class="col-lg-2">
                                          <input type="radio" value="aktif" name="status"> <i></i>aktif</label>
                                      </div>
                                      <div class="col-lg-2">
                                          <input type="radio" value="block" name="status"> <i></i>block</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Email</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="email" type="text" class="form-control" value="<?php echo $detail['email'] ?>" />
                                     </div>
                                 </div>
                               </div>


                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                   </div>
                                 </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>


<div class="modal fade" id="modal_pegawai" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-user"></i> DATA PEJABAT</h4>
			</div>
			<div class="modal-body">
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline13-list shadow-reset">
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
                                                <th data-field="nip">NIP</th>
                                                <th data-field="nama">Nama</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $no = 1;
                                          foreach($pegawai as $item){
                                            $nama = $item->nama_pegawai;
                                            $nama_pisah = explode(" ",$nama);
                                          ?>
                                          <tr>
                                            <td><?php echo $item->nik ?></td>
                                            <td><?php echo $item->nama_pegawai ?></td>
                                            <td><i class="btn btn-xs btn-success fa fa-check" title="Pilih" onclick="pilih_item('<?php echo $item->nik ?>','<?php echo $nama_pisah[0] ?>','<?php echo $item->nama_pegawai ?>')" data-dismiss="modal"></a></td>
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
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function pilih_item(nik,nama,nama_lengkap){
    $("#xnik").val(nik);
    $("#xnama").val(nama);
    $("#xnama_lengkap").val(nama_lengkap);
  }

  $('#level').change(function() {
    var level = $(this).val();
    $('#poliklinik').prop('hidden', level != 3);
  })
</script>
