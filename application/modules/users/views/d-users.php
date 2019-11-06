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
                                <li><span class="bread-blod">Hapus Pengguna</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="button-adminpro-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Hapus !!!</strong></h2>
              <br/>
              <p class="alert alert-warning">
                <strong>PERINGATAN !! :</strong><br/>
                Apakah Anda Yakin Ingin Menghapus Pengguna ini ??? <br/>
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>users/delete_users_proses" method="post">
                <input type="hidden" name="id_user" value="<?php echo $detail['id_user'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Nama</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="nama" type="text" readonly="true" value="<?php echo $detail['nama'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">NIP</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="nip" type="text" readonly="true" value="<?php echo $detail['nik'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>

                <div class="form-group-inner">
                   <div class="row">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-6">
                       <input type="submit" class="btn btn-primary" value="Hapus" />

                     </div>
                     <div class="col-lg-1">

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
