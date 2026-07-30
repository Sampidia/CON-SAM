<?php
/* Smarty version 5.4.1, created on 2024-10-06 00:02:09
  from 'file:_need_age_verification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6701d3817ebdb6_70020139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870bc2f16522ad284d78fc171d156a1695e30bab' => 
    array (
      0 => '_need_age_verification.tpl',
      1 => 1718122212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6701d3817ebdb6_70020139 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><!-- need age verification -->
<div class="ptb20 plr20">
  <div class="text-center text-muted">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"adult",'class'=>"main-icon mb20",'width'=>"56px",'height'=>"56px"), (int) 0, $_smarty_current_dir);
?>
    <div class="text-md">
      <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold; font-size: 13px;">
        <?php if (!$_smarty_tpl->getValue('user')->_data['user_adult']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You must be 18+ to view this content");?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your age must be verified to view this content");?>

        <?php }?>
      </span>
    </div>
  </div>
</div>
<!-- need age verification --><?php }
}
