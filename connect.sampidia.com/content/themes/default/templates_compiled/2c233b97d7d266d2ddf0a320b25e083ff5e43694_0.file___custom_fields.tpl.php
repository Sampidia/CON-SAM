<?php
/* Smarty version 5.4.1, created on 2024-10-28 12:18:17
  from 'file:__custom_fields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671f8109549372_26627652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c233b97d7d266d2ddf0a320b25e083ff5e43694' => 
    array (
      0 => '__custom_fields.tpl',
      1 => 1714487354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671f8109549372_26627652 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
if ($_smarty_tpl->getValue('_registration')) {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_custom_fields'), 'custom_field');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach1DoElse = false;
?>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
 <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>*<?php }?></label>
      <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox") {?>
        <input class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" type="text" <?php if (!$_smarty_tpl->getValue('_search')) {?>placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
" <?php }?> <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "textarea") {?>
        <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if (!$_smarty_tpl->getValue('_search')) {?>placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
" <?php }?> <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>></textarea>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "selectbox") {?>
        <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
          <?php if ($_smarty_tpl->getValue('_search')) {?>
            <option selected value="any"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Any");?>
</option>
          <?php } else { ?>
            <option selected value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</option>
          <?php }?>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('value'));?>
</option>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
        <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->getValue('custom_field')['mandatory'] && !$_smarty_tpl->getValue('_search')) {?>required<?php }?>>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach3DoElse = false;
?>
            <option value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('value'));?>
</option>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('custom_field')['description'] && !$_smarty_tpl->getValue('_search')) {?>
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['description']);?>

        </div>
      <?php }?>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} else { ?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_custom_fields'), 'custom_field');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach4DoElse = false;
?>
    <div class="form-group <?php if ($_smarty_tpl->getValue('_inline')) {?>row<?php }?>">
      <label class="form-label <?php if ($_smarty_tpl->getValue('_inline')) {?>col-md-3<?php }?>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
 <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>*<?php }?></label>
      <?php if ($_smarty_tpl->getValue('_inline')) {?><div class="col-md-9"><?php }?>
        <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox") {?>
          <input class="form-control" type="text" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" value="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "textarea") {?>
          <textarea class="form-control" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</textarea>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "selectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
" <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
            <option <?php if ($_smarty_tpl->getValue('custom_field')['value'] == '') {?>selected<?php }?> value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach5DoElse = false;
?>
              <option <?php if ($_smarty_tpl->getValue('custom_field')['value'] == $_smarty_tpl->getValue('value')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('value'));?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
          <select class="form-select" name="fld_<?php echo $_smarty_tpl->getValue('custom_field')['field_id'];?>
[]" multiple <?php if ($_smarty_tpl->getValue('custom_field')['mandatory']) {?>required<?php }?>>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_field')['options'], 'value', false, 'id');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach6DoElse = false;
?>
              <option <?php if ((null !== ($_smarty_tpl->getValue('custom_field')['value'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('id'),$_smarty_tpl->getValue('custom_field')['value'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('id');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('value'));?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('custom_field')['description']) {?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['description']);?>

          </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('_inline')) {?>
      </div><?php }?>
    </div>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
