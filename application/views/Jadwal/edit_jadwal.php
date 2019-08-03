<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Jadwal/edit_jadwal_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">Nama</label>
                        </div>
                        <div class="col-lg-9">
                          <input name="id_jadwal" id="xid_jadwal" type="hidden" readonly="true" />
                          <select name="id_dokter" id="xid_dokter" class="form-control">
                            <option value="">-- Pilih --</option>
                               <?php
                               foreach($dokter as $p => $val)
                               {?>
                               <option value="<?php echo $val->id_dokter;?>"><?php echo $val->nama_dokter; ?></option>
                               <?php
                               }?>
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Poliklinik</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="id_poliklinik" id="xid_poliklinik" class="form-control">
                           <option value="">-- Pilih --</option>
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
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Jadwal</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="jadwal" type="text" id="xjadwal" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Jam</label>
                     </div>
                     <div class="col-lg-9">
                         <input name="jam" type="text" id="xjam" class="form-control" />
                     </div>
                 </div>
               </div>
            <div class="form-group-inner">
             <div class="row">
                 <div class="col-lg-2">
                     <label class="login2 pull-right pull-right-pro">Status</label>
                 </div>
                 <div class="col-lg-9">
                   <select name="is_active" id="xis_active" class="form-control">
                       <option value="">-- Pilih --</option>
                       <option value="aktif">Aktif</option>
                       <option value="nonaktif">Non Aktif</option>
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

<script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
 <script src="<?php echo base_url()?>assets/js/chosen/chosen-active.js"></script>
