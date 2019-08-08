<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Apotik/edit_obatalkes_proses" method="post">
                   <div class="form-group-inner">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="login2 pull-right pull-right-pro">KODE</label>
                        </div>
                        <div class="col-lg-9">
                            <input name="id_barang" type="hidden" id="xid_barang" class="form-control" />
                            <input name="kode_barang" type="text" id="xkode" readonly="true" class="form-control" placeholder="Kode Barang" />
                        </div>
                    </div>
                  </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Nama</label>
                       </div>
                       <div class="col-lg-9">
                           <input name="nama_barang" type="text" id="xnama" class="form-control" placeholder="Nama Barang" />
                       </div>
                   </div>
                 </div>
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Kategori</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="kategori" class="form-control" id="xkategori">
                             <option value="">-- Pilih --</option>
                             <option value="obat">Obat</option>
                             <option value="alkes">Alat Kesehatan</option>
                          </select>
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Satuan</label>
                      </div>
                      <div class="col-lg-9">
                        <select name="id_satuan" class="form-control" id="xid_satuan">
                          <option value="">-- Pilih --</option>
                             <?php
                             foreach($satuan as $p => $val)
                             {?>
                             <option value="<?php echo $val->id_satuan;?>"><?php echo $val->satuan; ?></option>
                             <?php
                             }?>
                        </select>
                      </div>
                  </div>
                </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Harga</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="harga" type="text" id="xharga" class="form-control" />
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
