<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Lab/tambah_periksa_lab_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="id_pasien" type="hidden" id="idpasien" readonly="true" class="form-control" />
                           <input name="id_poliklinik" type="hidden" id="idpolik" readonly="true" class="form-control" />
                           <input name="id_periksa" type="hidden" id="idperiksa" readonly="true" class="form-control" />
                           <input name="nama" type="text" id="nama" readonly="true" class="form-control" />
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">KODE LAB</label>
                      </div>
                      <div class="col-lg-9">
                          <input name="kode_pemeriksaan" type="text" value="<?php echo $kode ?>" readonly="true" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Tanggal</label>
                     </div>
                     <div class="col-lg-9">
                        <?php $tanggal = date('Y-m-d') ?>
                        <input name="tanggal_periksa" type="text" value="<?php echo $tanggal ?>" readonly="true" class="form-control" />
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
