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
                                <li><a href="#">Settings</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Sub_menu">Sub Menu</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah Sub Menu</span>
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
                    <h1>Form Tambah Data Sub Menu</h1>
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
                                <form action="<?php echo base_url()?>Menu/Sub_menu/tambah_sub_menu_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Sub Menu</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="sub_menu" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Menu</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="id_menu" class="form-control">
                                           <option value="">-- Pilih --</option>
                                              <?php
                                              foreach($menu as $p => $val)
                                              {?>
                                              <option value="<?php echo $val->id_menu;?>"><?php echo $val->menu; ?></option>
                                              <?php
                                              }?>
                                         </select>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Modul</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <input name="modul" type="text" class="form-control" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Function</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="function" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">KODE</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="kode_sub_menu" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Status</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="status_sub" class="form-control">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>
