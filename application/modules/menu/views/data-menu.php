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
                                <li><a href="#">Setting</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('simpan');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('hapus');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Menu Appplikasi</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Menu/tambah_menu" title="Registrasi Pasien baru" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                          </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="kode">KODE</th>
                                        <th data-field="menu">Nama Menu</th>
                                        <th data-field="icon">icon</th>
                                        <th data-field="status">Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($menu as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $item->kode_menu ?></td>
                                    <td><?php echo $item->menu ?></td>
                                    <td><i class="<?php echo $item->icon ?>"></i></td>
                                    <td><?php if($item->status_menu=='aktif'){
                                      echo "<i class='fa fa-eye'></i> ";
                                    }
                                    else{
                                      echo "<i class='fa fa-eye-slash'></i>";
                                    }?></td>
                                    <td>
                                      <a href="<?php echo base_url()?>Menu/edit_menu/<?php echo $item->id_menu ?>" type="button" class="btn btn-custon-three btn-primary btn-xs" ><i class="fa fa-edit"></i></a>
                                      <a href="<?php echo base_url()?>Menu/hapus_menu/<?php echo $item->id_menu ?>" type="button" title="Hapus" onclick="return confirm('Hapus item ini Dari Database ?')" class="btn btn-custon-three btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
