<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Dokter/edit_dokter_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Nama</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="id_dokter" id="xid_dokter" type="hidden" class="form-control" />
                            <input name="nama_dokter" id="xnama" type="text" class="form-control" />
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jekel</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="jekel" id="xjekel" class="form-control">
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
                          <label class="login2 pull-right pull-right-pro">Tempat Lahir</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="tmp_lahir" id="xlahir" type="text" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tgl Lahir</label>
                     </div>
                     <div class="col-lg-9">
                         <input name="tgl_lahir" id="xtgl" type="text" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Agama</label>
                    </div>
                    <div class="col-lg-9">
                      <select name="id_agama" id="xagama" class="form-control">
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
                         <input name="alamat" id="xalamat" type="text" class="form-control" />
                     </div>
                 </div>
               </div>
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Kontak</label>
                   </div>
                   <div class="col-lg-9">
                       <input name="no_kontak_dokter" type="text" id="xkontak" class="form-control" />
                   </div>
               </div>
             </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">Spesialis</label>
                  </div>
                  <div class="col-lg-9">
                    <select name="id_spesialis" id="xspesialis" class="form-control">
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
                      <label class="login2 pull-right pull-right-pro">Izin Praktek</label>
                  </div>
                  <div class="col-lg-9">
                      <input name="no_izin_praktek" type="text" id="xno_praktek" class="form-control" />
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
