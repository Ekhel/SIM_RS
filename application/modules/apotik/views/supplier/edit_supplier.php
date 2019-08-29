<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Apotik/edit_supplier_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">KODE</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="kode_supplier" type="text" id="xkode_supplier" readonly="true"  class="form-control" />
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nama_supplier" type="text" id="xnama_supplier" class="form-control" />
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
                         <label class="login2 pull-right pull-right-pro">No Kontak</label>
                     </div>
                     <div class="col-lg-9">
                         <input name="no_telpon" type="text" id="xno_telpon" class="form-control" placeholder="Kontak" />
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
