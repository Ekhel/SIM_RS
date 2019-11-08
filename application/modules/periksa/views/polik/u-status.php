<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Periksa/edit_status_polik_proses" method="post">
                  <br/>
                  <div class="col-md-12">
                    <div class="row">
                      <input name="id_periksa" id="xid_periksa" type="hidden" class="form-control" />
                      <input name="status" type="hidden" class="form-control" value="sudah" />
                      <h4>Ubah Status Pemeriksaan Dokter !!</h4>

                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Status</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="sudah" name="status"> <i></i>Sudah</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="belum" name="status"> <i></i>Belum</label>
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
