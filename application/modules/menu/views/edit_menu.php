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
                                <li><a href="#">Setting</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Menu">Menu</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Edit Menu</span>
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
                    <h1>Form Edit Data Menu</h1>
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
                            <?php foreach($menu as $item){ ?>
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Menu/edit_menu_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama Menu</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="id_menu" value="<?php echo $item->id_menu ?>" type="hidden" class="form-control" />
                                            <input name="menu" type="text" value="<?php echo $item->menu ?>" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">KODE</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="kode_menu" value="<?php echo $item->kode_menu ?>" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">ICON</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <input name="icon" type="text" value="<?php echo $item->icon ?>" class="form-control" />
                                      </div>
                                      <div class="col-lg-1">
                                        <a href="#modal_icon" data-toggle="modal" title="Icon References" class="btn btn-primary"><i class="fa fa-list"></i></a>
                                      </div>
                                  </div>
                                </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Status</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="status_menu" value="<?php echo $item->status_menu ?>" class="form-control">
                                             <option value="">-- Pilih --</option>
                                             <option value="aktif">Aktif</option>
                                             <option value="nonaktif">Non Aktif</option>
                                          </select>
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
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>

<div class="modal fade" id="modal_icon" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Icon References </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('menu/icon'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
