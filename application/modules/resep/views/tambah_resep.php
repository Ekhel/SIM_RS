<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen/bootstrap-chosen.css">

<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Resep/tambah_resep_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="id_periksa" type="hidden" id="idperiksax" readonly="true" class="form-control" />
                           <input name="nama_pasien" type="text" id="nama_pasien" readonly="true" class="form-control" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Obat/Alkes</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="id_barang" class="chosen-select">
                           <option value="">-- Pilih --</option>
                              <?php
                              foreach($barang as $p => $val)
                              {?>
                              <option value="<?php echo $val->id_barang?>"><?php echo $val->nama_barang; ?></option>
                              <?php
                              }?>
                         </select>
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">e - Tiket</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="eticket" type="text" class="form-control" />
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
