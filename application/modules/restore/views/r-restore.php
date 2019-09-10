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
                                <li><a href="#">Utility</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Restore Database</span>
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
              <h2><strong>Restore Database</strong></h2>
              <p>
                Silakan pilih file database lalu klik tombol "Restore" untuk melakukan restore database dari hasil backup yang telah dibuat sebelumnya. Jika belum ada file database hasil backup, silakan lakukan backup terlebih dahulu melalui menu "Backup Database".
              </p>
              <br/>
              <p class="alert alert-warning">
                <strong> PERINGATAN !! </strong>
                <br/>
                Berhati - hatilah ketika merestore database karenadata yang ada akan diganti dengan data yang baru.
                Pastikan bahwa file database yang akan digunakan untuk merestore adalah "benar - benar" file backup database yang telah dibuat sebelumnya sehingga sistem dapat berjalan dengan normal dan tidak mengalami error.
              </p>
          </div>
          <hr/>
          <br/>
          <form action="<?php echo base_url()?>Dokter/tambah_dokter_proses" method="post">
            <div class="form-group-inner">
             <div class="row">
                 <div class="col-lg-2">
                     <label class="login2 pull-right pull-right-pro">File DB</label>
                 </div>
                 <div class="col-lg-9">
                     <input type="file" name="db" class="form-control" />
                 </div>
             </div>
           </div>
           <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2">
                    <label class="login2 pull-right pull-right-pro">Password</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" name="pass" class="form-control" />
                </div>
            </div>
          </div>
           <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-2">
                <input type="submit" class="btn btn-primary btn-lg btn-custon-three btn-primary" value="Restore">
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
