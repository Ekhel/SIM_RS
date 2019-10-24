<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Lab/update_status_lab" method="post">
                  <br/>
                  <div class="col-md-12">
                    <div class="row">
                      <input name="id_periksa_lab" id="xxidperiksalab" type="hidden" class="form-control" />
                      <h4>Ubah Status Pemeriksaan Laboratorium !</h4>
                    </div>
                    <hr/>
                  </div>

                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Status</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="sudah" name="status_lab"> <i></i>Sudah</label>
                       </div>
                       <div class="col-lg-2">
                           <input type="radio" value="belum" name="status_lab"> <i></i>Belum</label>
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
