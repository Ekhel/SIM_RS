<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen/bootstrap-chosen.css">

<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>Menu/Menu_level/update_level_menu_proses" method="post">
                  <div class="form-group-inner">
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="login2 pull-right pull-right-pro">level</label>
                         </div>
                         <div class="col-lg-9">
                           <input type="hidden" id="xid_menu_level" name="id_menu_level">
                           <select name="id_level" class="form-control" id="xid_level">
                             <option value="">-- Pilih --</option>
                                <?php
                                foreach($level as $p => $val)
                                {?>
                                <option value="<?php echo $val->id_level;?>"><?php echo $val->level; ?></option>
                                <?php
                                }?>
                           </select>
                         </div>
                     </div>
                   </div>
                   <div class="form-group-inner">
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="login2 pull-right pull-right-pro">Menu</label>
                         </div>
                         <div class="col-lg-9">
                           <select name="id_menu" class="form-control" id="xid_menu">
                             <option value="">-- Pilih --</option>
                                <?php
                                foreach($menu as $p => $val)
                                {?>
                                <option value="<?php echo $val->id_menu;?>"><?php echo $val->menu; ?></option>
                                <?php
                                }?>
                           </select>
                         </div>
                     </div>
                   </div>
                   <div class="form-group-inner">
                     <div class="row">
                         <div class="col-lg-2">
                             <label class="login2 pull-right pull-right-pro">Sub Menu</label>
                         </div>
                         <div class="col-lg-9">
                           <select name="id_sub_menu" class="chosen-select" id="xid_sub_menu">
                             <option value="">-- Pilih --</option>
                                <?php
                                foreach($submenu as $p => $val)
                                {?>
                                <option value="<?php echo $val->id_sub_menu;?>"><?php echo $val->sub_menu; ?></option>
                                <?php
                                }?>
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
