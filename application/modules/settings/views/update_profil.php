<title>Admin | Update Profil</title>

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
                                <li><a href="#">Profil</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Update</span>
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
                    <h1>Form Update Data Profil</h1>
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
                        <div class="col-lg-8">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Settings/update_profil_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama ORG</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="nama_org" type="text" class="form-control" value="<?php echo $nama_org ?>" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Alamat</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="alamat" type="text" class="form-control" value="<?php echo $alamat ?>" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Provinsi</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <input name="provinsi" type="text" class="form-control" value="<?php echo $provinsi ?>" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Kabupaten</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="kabupaten" type="text" class="form-control" value="<?php echo $kabupaten ?>" />
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">No Kontak</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="no_telfon" type="text" class="form-control" value="<?php echo $no_telfon ?>" />
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Email</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="email" type="text" class="form-control" value="<?php echo $email ?>" />
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Logo</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input type="file" name="logo" value="">
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
                    <div class="col-lg-3">
                      <div class="project-details-descri shadow-reset">
                        <div class=" contact-img-v2">
                          <img class="center" src="<?php echo base_url()?>assets/img/logo/<?php echo $logo ?>" width="180" alt="">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>
