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
                                <li><a href="<?php echo base_url()?>Dokter">Dokter</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah Dokter</span>
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
                    <h1>Form Tambah  data dokter</h1>
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
                                <form action="<?php echo base_url()?>Dokter/tambah_dokter_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama_dokter" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Jekel</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="jekel" class="form-control">
                                             <option value="">-- Pilih --</option>
                                             <option value="L">Laki - Laki-</option>
                                             <option value="P">Perempuan</option>
                                          </select>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">tempat lahir</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <input name="tmp_lahir" type="text" class="form-control" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Tgl Lahir</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="tgl_lahir" type="date" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Agama</label>
                                     </div>
                                     <div class="col-lg-9">
                                       <select name="id_agama" class="form-control">
                                         <option value="">-- Pilih --</option>
                                            <?php
                                            foreach($agama as $p => $val)
                                            {?>
                                            <option value="<?php echo $val->id_agama;?>"><?php echo $val->agama; ?></option>
                                            <?php
                                            }?>
                                       </select>
                                     </div>
                                 </div>
                               </div>
                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Alamat</label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input name="alamat" type="text" class="form-control" />
                                   </div>
                               </div>
                             </div>
                             <div class="form-group-inner">
                              <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Kontak</label>
                                  </div>
                                  <div class="col-lg-9">
                                      <input name="no_kontak_dokter" type="text" class="form-control" />
                                  </div>
                              </div>
                            </div>
                             <div class="form-group-inner">
                              <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Spesialis</label>
                                  </div>
                                  <div class="col-lg-9">
                                    <select name="id_spesialis" class="form-control">
                                      <option value="">-- Pilih --</option>
                                         <?php
                                         foreach($spesialis as $p => $val)
                                         {?>
                                         <option value="<?php echo $val->id_spesialis;?>"><?php echo $val->spesialis; ?></option>
                                         <?php
                                         }?>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group-inner">
                             <div class="row">
                                 <div class="col-lg-2">
                                     <label class="login2 pull-right pull-right-pro">Izin Prakter</label>
                                 </div>
                                 <div class="col-lg-9">
                                     <input name="no_izin_praktek" type="text" class="form-control" />
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
