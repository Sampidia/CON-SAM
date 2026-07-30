<?php
/* Smarty version 5.4.1, created on 2024-10-20 21:32:41
  from 'file:__feeds_profile_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_671576f92e6f62_24781636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4005b08d3ed5ee133754b6c000aba0c5d86b008d' => 
    array (
      0 => '__feeds_profile_photo.tpl',
      1 => 1690156248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_671576f92e6f62_24781636 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="col-4 mb10">
  <div class="pg_photo pointer <?php if ($_smarty_tpl->getValue('_filter') == "avatar") {?>js_profile-picture-change<?php } else { ?>js_profile-cover-change<?php }?>" data-id=<?php echo $_smarty_tpl->getValue('id');?>
 data-type=<?php echo $_smarty_tpl->getValue('type');?>
 data-image="<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
);">
  </div>
</div><?php }
}
