<?php
/* Smarty version 5.4.1, created on 2024-10-05 14:26:28
  from 'file:settings.delete.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67014c94c9a2e4_68845022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e030eb5b37e1a088d6bb8e2efa938519aa61cced' => 
    array (
      0 => 'settings.delete.tpl',
      1 => 1685367900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67014c94c9a2e4_68845022 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete_user",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Account");?>

</div>
<div class="card-body">
  <div class="alert alert-warning">
    <div class="icon">
      <i class="fa fa-exclamation-triangle fa-2x"></i>
    </div>
    <div class="text pt5">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Once you delete your account you will no longer can access it again");?>

    </div>
  </div>

  <div class="text-center">
    <button class="btn btn-danger js_delete-user">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete My Account");?>

    </button>
  </div>
</div><?php }
}
