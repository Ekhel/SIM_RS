<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Periksa/tambah_periksa_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nama" type="text" id="xnama" readonly="true" class="form-control" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Polik</label>
                       </div>
                       <div class="col-lg-9">
                         <input name="id_pasien" id="id_pasien" type="hidden" class="form-control" />
                         <input name="status" type="hidden" class="form-control" value="belum" />
                         <select name="id_poliklinik" class="form-control">
                           <option value="">-- Pilih --</option>
                           <option value="0">Periksa Darah</option>
                              <?php
                              foreach($polik as $p => $val)
                              {?>
                              <option value="<?php echo $val->id_poliklinik;?>"><?php echo $val->nama_poliklinik; ?></option>
                              <?php
                              }?>
                         </select>
                       </div>
                   </div>
                 </div>
                <!--<div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Laoratorium</label>
                     </div>
                     <div class="col-lg-2">
                         <input type="radio" value="ya" name="pd"> <i></i>Ya</label>
                     </div>
                     <div class="col-lg-2">
                         <input type="radio" value="tidak" name="pd"> <i></i>Tidak</label>
                     </div>
                 </div>
               </div>!-->
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tanggal</label>
                     </div>
                     <div class="col-lg-9">
                        <?php $tanggal = date('Y-m-d') ?>
                        <input name="tanggal" type="text" value="<?php echo $tanggal ?>" readonly="true" class="form-control" />
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
