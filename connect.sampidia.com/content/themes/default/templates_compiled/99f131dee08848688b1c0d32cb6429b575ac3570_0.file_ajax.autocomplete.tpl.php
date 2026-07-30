<?php
/* Smarty version 5.4.1, created on 2024-10-05 23:42:16
  from 'file:ajax.autocomplete.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6701ced868d1b3_97384781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f131dee08848688b1c0d32cb6429b575ac3570' => 
    array (
      0 => 'ajax.autocomplete.tpl',
      1 => 1707841892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6701ced868d1b3_97384781 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><ul>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
    <li>
      <div class="data-container clickable small <?php if ($_smarty_tpl->getValue('type') == 'tags') {?>js_tag-add<?php } else { ?>js_autocomplete-add<?php }?>" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?>" <?php if ($_smarty_tpl->getValue('_user')['chat_price']) {?>data-chat-price="<?php echo $_smarty_tpl->getValue('_user')['chat_price'];?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_user')['call_price']) {?>data-call-price="<?php echo $_smarty_tpl->getValue('_user')['call_price'];?>
" <?php }?>>
        <div class="data-avatar">
          <img class="data-avatar" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="">
        </div>
        <div class="data-content">
          <div><strong><?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?></strong></div>
        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul><?php }
}
