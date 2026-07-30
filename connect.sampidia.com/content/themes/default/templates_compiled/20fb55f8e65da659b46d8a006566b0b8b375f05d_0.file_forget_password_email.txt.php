<?php
/* Smarty version 5.4.1, created on 2026-01-12 15:03:07
  from 'file:emails/forget_password_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_69650d2bd80af2_47495032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20fb55f8e65da659b46d8a006566b0b8b375f05d' => 
    array (
      0 => 'emails/forget_password_email.txt',
      1 => 1693736740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69650d2bd80af2_47495032 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the reset password process, please copy this token");?>
:

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Token");?>
: <?php echo $_smarty_tpl->getValue('reset_key');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
