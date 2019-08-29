<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n"></span> Pegawai</h1>
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
                                        <th data-field="nik">NIK</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="jekel">Jekel</th>
                                        <th data-field="pend">Pend. Terahir</th>
                                        <th data-field="tmp">tmp & tgl lahir</th>
                                        <th data-field="jabatan">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($pegawai as $item){
                                  ?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->nik ?></td>
                                    <td><?php echo $item->nama_pegawai ?></td>
                                    <td><?php echo $item->jekel ?></td>
                                    <td><?php echo $item->pend_terahir ?></td>
                                    <td><?php echo $item->tmp_lahir ?> / <?php echo $item->tgl_lahir ?></td>
                                    <td><?php echo $item->nama_jabatan ?></td>
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
