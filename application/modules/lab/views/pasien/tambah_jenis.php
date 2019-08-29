<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Lab/simpan_jenis_pemeriksaan_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="id_periksa_lab" type="hidden" id="xid_periksa_lab" readonly="true" class="form-control" />
                           <input name="id_pasien" type="hidden" id="xid_pasien" readonly="true" class="form-control" />
                           <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d') ?>" readonly="true" class="form-control">
                           <input name="nama_pasien" type="text" id="xnama_pasien" readonly="true" class="form-control" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jenis Periksa</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="id_jenisperiksa" class="form-control">
                           <option value="">-- Pilih --</option>
                              <?php
                              foreach($jenisperiksa as $p => $val)
                              {?>
                              <option value="<?php echo $val->id_jenisperiksa?>"><?php echo $val->nama_periksa; ?></option>
                              <?php
                              }?>
                         </select>
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Jenis Periksa</label>
                      </div>
                      <div class="col-lg-9">
                        <select name="id_sub_jenis" class="form-control">

                        </select>
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Hasil</label>
                     </div>
                     <div class="col-lg-9">
                       <input type="text" name="hasil" class="form-control">
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Nilai Rujukan</label>
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="nilai_rujukan" class="form-control">
                    </div>
                </div>
              </div>
             <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-2">
                      <label class="login2 pull-right pull-right-pro">Keterangan</label>
                  </div>
                  <div class="col-lg-9">
                    <input type="text" name="hasil_ket" class="form-control">
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
