<?php
  $this->load->model('menu/M_menu');
  $listmenu = $this->M_menu->menu_level_akses();
  $subslist = $this->M_menu->sub_menu_level_akses();
?>
<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
        <?php
        foreach($listmenu as $menus){
        $id_menu = $menus->id_menu;
        ?>
        <li class="nav-item">
          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="<?php echo $menus->icon ?>"></i> <span class="mini-dn"><?php echo $menus->menu ?></span> <span class="indicator-right-menu mini-dn">
          <i class="fa indicator-mn fa-angle-left"></i></span></a>
          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
            <?php foreach($subslist as $submenus){
              $modul = $submenus->modul;
              $func = $submenus->function;
              if($id_menu==$submenus->id_menu){
              ?>
              <a href="<?php echo base_url()?><?php echo $modul ?>/<?php echo $func ?>" class="dropdown-item"><?php echo $submenus->sub_menu ?></a>
            <?php } ?>
          <?php } ?>
          </div>
        </li>
      <?php } ?>
    </ul>
</div>
