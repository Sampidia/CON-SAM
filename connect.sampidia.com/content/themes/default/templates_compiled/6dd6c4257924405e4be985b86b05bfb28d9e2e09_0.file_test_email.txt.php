<?php
/* Smarty version 5.4.1, created on 2024-10-04 08:17:45
  from 'file:emails/test_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66ffa4a9471e66_30599247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dd6c4257924405e4be985b86b05bfb28d9e2e09' => 
    array (
      0 => 'emails/test_email.txt',
      1 => 1693736746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ffa4a9471e66_30599247 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This is a test email");?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
