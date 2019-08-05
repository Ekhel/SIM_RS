<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Data_induk/edit_pegawai_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">NIK</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nik" type="text" id="xnik" class="form-control" readonly="true" />
                       </div>
                   </div>
                 </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Nama</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="nama_pegawai" id="xnama" type="text" class="form-control" />
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
                        <select name="pend_terahir" id="xpend_terahir" class="form-control">
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
                         <input name="npwp" id="xnpwp" type="text" class="form-control" />
                     </div>
                 </div>
               </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tmp Lahir</label>
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
                        <input name="tgl_lahir" type="date" id="xtgl" class="form-control" />
                    </div>
                </div>
              </div>
              <div class="form-group-inner">
               <div class="row">
                   <div class="col-lg-2">
                       <label class="login2 pull-right pull-right-pro">Jabatan</label>
                   </div>
                   <div class="col-lg-9">
                     <select name="id_jabatan" id="xid_jabatan" class="form-control">
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
