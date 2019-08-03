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
                                <li><a href="#">Data Induk</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Data_induk/Pegawai">Pegawai</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah Pegawai</span>
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
                    <h1>Form Tambah Pegawai Baru</h1>
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
                                <form action="<?php echo base_url()?>Data_induk/tambah_pegawai_proses" method="post">
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">NIK</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="nik" type="text" class="form-control" />
                                       </div>
                                   </div>
                                 </div>
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama_pegawai" type="text" class="form-control" />
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
                                             <option value="L">Laki - Laki</option>
                                             <option value="P">Perempuan</option>
                                           </select>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Pend. Terahir</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <select name="pend_terahir" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                          </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">NPWP</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="npwp" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Tmp Lahir</label>
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
                                       <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                   </div>
                                   <div class="col-lg-9">
                                     <select name="id_jabatan" class="form-control">
                                       <option value="">-- Pilih --</option>
                                          <?php
                                          foreach($jabatan as $p => $val)
                                          {?>
                                          <option value="<?php echo $val->id_jabatan;?>"><?php echo $val->nama_jabatan; ?></option>
                                          <?php
                                          }?>
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
