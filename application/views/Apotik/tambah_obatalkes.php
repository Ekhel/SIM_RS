<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                  <input type="text" placeholder="Search..." class="form-control">
                                  <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Apotik</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="<?php echo base_url()?>Apotik">Obat & Alat Kesehatan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Tambah item</span>
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
                    <h1>Form Tambah Obat & Alat Kesehatan</h1>
                    <div class="sparkline12-outline-icon">
                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Apotik/tambah_obatalkes_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">KODE</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input name="kode_barang" type="text" value="<?php echo $kode ?>" readonly="true"  class="form-control" placeholder="Kode Barang" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Nama</label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" />
                                       </div>
                                   </div>
                                 </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Kategori</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="kategori" class="form-control">
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
                                        <select name="id_satuan" class="form-control">
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
                                        <input name="harga" type="text" class="form-control" />
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
