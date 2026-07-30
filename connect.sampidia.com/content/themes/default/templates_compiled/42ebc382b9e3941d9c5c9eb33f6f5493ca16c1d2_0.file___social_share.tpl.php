<?php
/* Smarty version 5.4.1, created on 2024-10-04 15:23:52
  from 'file:__social_share.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670008884c5102_34696519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ebc382b9e3941d9c5c9eb33f6f5493ca16c1d2' => 
    array (
      0 => '__social_share.tpl',
      1 => 1710343814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 7,
  ),
))) {
function content_670008884c5102_34696519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"facebook",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitter",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social" target="_blank">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"vk",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social" target="_blank">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linkedin",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social d-none d-sm-inline-block" target="_blank">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"whatsapp",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social" target="_blank">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reddit",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a>
<a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->getValue('_link');?>
" class="btn-icon-social" target="_blank">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pinterest",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
</a><?php }
}
