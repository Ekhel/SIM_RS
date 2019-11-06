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
                                <li><a href="#">Pengguna</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pengguna App</span>
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
                            <h1>Data <span class="table-project-n"></span> Pengguna Applikasi</h1>
                            <div class="sparkline13-outline-icon">
                              <span><a href="<?php echo base_url()?>Users/tambah_pengguna" title="Registrasi Pasien baru" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
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
                                        <th data-field="no">No</th>
                                        <th data-field="nik">Nik</th>
                                        <th data-field="level">Level</th>
                                        <th data-field="user">User</th>
                                        <th data-field="status">Status</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($user as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nik ?></td>
                                    <td>
                                      <?php if($item->id_level == '3'){
                                        echo $item->level. " <span><label class='label label-success'>" .$item->nama_poliklinik. "</label></span>";
                                      }
                                      else{
                                        echo $item->level;
                                      }?>
                                    </td>
                                    <td><?php echo $item->nama ?></td>
                                    <td><?php echo $item->status ?></td>
                                    <td>
                                      <a class="btn btn-xs btn-primary" href="<?php echo base_url()?>users/edit_users/<?php echo $item->id_user ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a class="btn btn-xs btn-danger" href="<?php echo base_url()?>users/delete_users/<?php echo $item->id_user ?>" title="Hapus"><i class="fa fa-trash"></i></a>
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
