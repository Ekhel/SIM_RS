<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen/bootstrap-chosen.css">

<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Jadwal">Jadwal Praktek</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah Jadwal Praktek</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1>Form Tambah Jadwal Praktek Baru</h1>

                </div>
            </div>
            <div class="sparkline13-list">
              <br/>
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Jadwal/tambah_jadwal_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                          <select name="id_dokter" class="chosen-select">
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
                                         <select name="id_poliklinik" class="chosen-select">
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
                                        <input name="jadwal" type="text" class="form-control" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Jam</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="jam" type="text" class="form-control" />
                                     </div>
                                 </div>
                               </div>
                            <div class="form-group-inner">
                             <div class="row">
                                 <div class="col-lg-2">
                                     <label class="login2 pull-right pull-right-pro">Status</label>
                                 </div>
                                 <div class="col-lg-9">
                                   <select name="is_active" class="form-control">
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
        </div>
    </div>
  </div>
  </div>
</div>


<script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
 <script src="<?php echo base_url()?>assets/js/chosen/chosen-active.js"></script>
