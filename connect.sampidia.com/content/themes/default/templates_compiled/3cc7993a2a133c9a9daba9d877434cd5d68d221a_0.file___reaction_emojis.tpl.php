<?php
/* Smarty version 5.4.1, created on 2024-10-04 11:38:08
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66ffd3a0a42b90_73039642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cc7993a2a133c9a9daba9d877434cd5d68d221a' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1667428218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ffd3a0a42b90_73039642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
