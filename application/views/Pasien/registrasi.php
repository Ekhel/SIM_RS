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
                                <li><a href="<?php echo base_url()?>Pasien">Pasien</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Registrasi</span>
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
                    <h1>Form Registrasi Pasien Baru</h1>
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
                                <form action="<?php echo base_url()?>Pasien/registrasi_pasien_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama_pasien" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Jekel</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="jenis_kelamin" class="form-control">
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
                                          <label class="login2 pull-right pull-right-pro">Gol Darah</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <select name="golongan_darah" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                          </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Tempat Lahir</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="tempat_lahir" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Tanggal Lahir</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="tanggal_lahir" type="date" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                              <div class="form-group-inner">
                               <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Nama Ibu</label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input name="nama_ibu" type="text" class="form-control" />
                                   </div>
                               </div>
                             </div>
                             <div class="form-group-inner">
                              <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">No Kontak</label>
                                  </div>
                                  <div class="col-lg-9">
                                      <input name="no_kontak" type="text" class="form-control" />
                                  </div>
                              </div>
                            </div>
                             <div class="form-group-inner">
                              <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Alamat</label>
                                  </div>
                                  <div class="col-lg-9">
                                      <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
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
