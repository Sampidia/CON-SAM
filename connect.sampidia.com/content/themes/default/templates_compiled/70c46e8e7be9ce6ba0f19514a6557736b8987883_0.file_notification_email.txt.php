<?php
/* Smarty version 5.4.1, created on 2024-10-05 10:10:08
  from 'file:emails/notification_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6701108055eb29_35900753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70c46e8e7be9ce6ba0f19514a6557736b8987883' => 
    array (
      0 => 'emails/notification_email.txt',
      1 => 1707311388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6701108055eb29_35900753 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('receiver')['name'];?>
,

<?php if (!$_smarty_tpl->getValue('notification')['system_notification']) {
echo $_smarty_tpl->getValue('user')->_data['name'];
}?> <?php echo $_smarty_tpl->getValue('notification')['message'];?>

<?php echo $_smarty_tpl->getValue('notification')['url'];?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
