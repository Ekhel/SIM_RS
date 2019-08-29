<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Periksa/update_diagnosa_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="id_periksa" id="xxid_periksa" type="hidden" readonly="true" class="form-control" />
                           <input name="nama_pasien" id="xxnama" type="text" readonly="true" class="form-control" />
                       </div>
                   </div>
                 </div>
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Diagnosa</label>
                        </div>
                        <div class="col-lg-9">
                            <textarea name="diagnosa" id="xdiagnosa" rows="8" cols="80" class="form-control"></textarea>
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

<script src="<?php echo base_url()?>assets/js/summernote.min.js"></script>
<script src="<?php echo base_url()?>assets/js/summernote-active.js"></script>
