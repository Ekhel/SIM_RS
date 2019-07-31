<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Pasien/edit_pasien_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Nama</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="id_pasien" id="xid_pasien" type="hidden" class="form-control" />
                            <input name="nama_pasien" id="xnama_pasien" type="text" class="form-control" />
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jekel</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="jenis_kelamin" id="xjenis_kelamin" class="form-control">
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
                        <select name="golongan_darah" id="xgolongan_darah" class="form-control">
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
                         <input name="tempat_lahir" id="xtempat_lahir" type="text" class="form-control" />
                     </div>
                 </div>
               </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tanggal Lahir</label>
                     </div>
                     <div class="col-lg-9">
                         <input name="tanggal_lahir" id="xtanggal_lahir" type="date" class="form-control" />
                     </div>
                 </div>
               </div>
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Nama Ibu</label>
                   </div>
                   <div class="col-lg-9">
                       <input name="nama_ibu" type="text" id="xnama_ibu" class="form-control" />
                   </div>
               </div>
             </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">No Kontak</label>
                  </div>
                  <div class="col-lg-9">
                      <input name="no_kontak" type="text" id="xkontak" class="form-control" />
                  </div>
              </div>
            </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">Alamat</label>
                  </div>
                  <div class="col-lg-9">
                      <input name="alamat" type="text" id="xalamat" class="form-control" />
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
