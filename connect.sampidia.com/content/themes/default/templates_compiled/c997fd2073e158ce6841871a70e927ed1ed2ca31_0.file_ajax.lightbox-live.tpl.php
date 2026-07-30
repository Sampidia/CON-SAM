<?php
/* Smarty version 5.4.1, created on 2024-10-04 11:42:46
  from 'file:ajax.lightbox-live.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66ffd4b666f1e8_46017082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c997fd2073e158ce6841871a70e927ed1ed2ca31' => 
    array (
      0 => 'ajax.lightbox-live.tpl',
      1 => 1647979400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_live.tpl' => 1,
  ),
))) {
function content_66ffd4b666f1e8_46017082 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="lightbox-post" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post_live.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  </div>
</div><?php }
}
