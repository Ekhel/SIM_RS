<?php if ($this->session->userdata('level')=='1') {?>

<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="dashboard.html" class="dropdown-item">Dashboard</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Induk</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Data_induk/agama" class="dropdown-item">Agama</a>
                <a href="<?php echo base_url()?>Data_induk/jabatan" class="dropdown-item">Jabatan</a>
                <a href="<?php echo base_url()?>Data_induk/departemen" class="dropdown-item">Departemen</a>
                <a href="<?php echo base_url()?>Data_induk/ruangan" class="dropdown-item">Ruangan</a>
                <a href="<?php echo base_url()?>Data_induk/spesialis" class="dropdown-item">Spesialis</a>
                <a href="<?php echo base_url()?>Data_induk/Poliklinik" class="dropdown-item">Poliklinik</a>
                <a href="#" class="dropdown-item">Pegawai</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Dokter</a>
                <a href="#" class="dropdown-item">Poliklinik</a>
                <a href="#" class="dropdown-item">Rawat Inap</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Registrasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Pasien" class="dropdown-item">Pasien</a>
                <a href="<?php echo base_url()?>Periksa" class="dropdown-item">Periksa</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Apotik</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                <a href="bar-charts.html" class="dropdown-item">Jenis Obat</a>
                <a href="bar-charts.html" class="dropdown-item">Jenis Alkes</a>
                <a href="line-charts.html" class="dropdown-item">Obat & Alkes</a>
                <a href="area-charts.html" class="dropdown-item">Stock</a>
                <a href="rounded-chart.html" class="dropdown-item">Resep Dokter</a>
                <a href="c3.html" class="dropdown-item">Pengembalian</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Pengguna</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="bar-charts.html" class="dropdown-item">Level Akses</a>
                <a href="bar-charts.html" class="dropdown-item">Pengguna</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cogs"></i> <span class="mini-dn">Pengaturan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="bar-charts.html" class="dropdown-item">Level Akses</a>
                <a href="bar-charts.html" class="dropdown-item">Pengguna</a>
            </div>
        </li>

    </ul>
</div>

<?php }
elseif ($this->session->userdata('level')=='2'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
          <li class="nav-item">
              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="dashboard.html" class="dropdown-item">Dashboard</a>
              </div>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Registrasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>Periksa" class="dropdown-item">Periksa</a>
              </div>
          </li>
      </ul>
  </div>
<?php } ?>
