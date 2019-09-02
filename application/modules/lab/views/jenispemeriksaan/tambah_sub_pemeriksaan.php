<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Lab/tambah_sub_periksa_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama Sub</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nama_jenis" type="text" class="form-control" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Jenis</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="id_jenisperiksa" class="form-control">
                           <option value="">-- Pilih --</option>
                              <?php
                              foreach($jenis as $p => $val)
                              {?>
                              <option value="<?php echo $val->id_jenisperiksa;?>"><?php echo $val->nama_periksa; ?></option>
                              <?php
                              }?>
                         </select>
                       </div>
                   </div>
                 </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Satuan</label>
                     </div>
                     <div class="col-lg-9">
                        <input name="satuan" type="text" class="form-control" />
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Keterangan</label>
                    </div>
                    <div class="col-lg-9">
                       <input name="keterangan" type="text" class="form-control" />
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
