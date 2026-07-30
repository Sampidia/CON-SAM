<?php
/* Smarty version 5.4.1, created on 2024-10-28 13:43:52
  from 'file:ajax.addresses.edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671f95188e5510_05345437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb8c070a9df6b15a644c4ad3bfd3dd2f04ea0b67' => 
    array (
      0 => 'ajax.addresses.edit.tpl',
      1 => 1696939626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_671f95188e5510_05345437 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Address");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="users/addresses.php?do=update">
  <div class="modal-body">
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
      <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('address')['address_title'];?>
">
    </div>
    <!-- title -->
    <div class="row">
      <!-- country -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
        <input name="country" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('address')['address_country'];?>
">
      </div>
      <!-- country -->
      <!-- city -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("City");?>
</label>
        <input name="city" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('address')['address_city'];?>
">
      </div>
      <!-- city -->
    </div>
    <div class="row">
      <!-- zip code -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Zip Code");?>
</label>
        <input name="zip_code" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('address')['address_zip_code'];?>
">
      </div>
      <!-- zip code -->
      <!-- phone -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone");?>
</label>
        <input name="phone" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('address')['address_phone'];?>
">
      </div>
      <!-- phone -->
    </div>
    <!-- address -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Address");?>
</label>
      <textarea name="address" rows="2" dir="auto" class="form-control"><?php echo $_smarty_tpl->getValue('address')['address_details'];?>
</textarea>
    </div>
    <!-- address -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="address_id" value="<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update");?>
</button>
  </div>
</form><?php }
}
