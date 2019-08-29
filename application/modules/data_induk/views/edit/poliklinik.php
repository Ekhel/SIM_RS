<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Data_induk/edit_poliklinik_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama Poliklinik</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="id_poliklinik" type="hidden" id="xid_poliklinik" class="form-control" readonly="true" />
                           <input name="nama_poliklinik" type="text" id="xnama_polik" class="form-control" />
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
