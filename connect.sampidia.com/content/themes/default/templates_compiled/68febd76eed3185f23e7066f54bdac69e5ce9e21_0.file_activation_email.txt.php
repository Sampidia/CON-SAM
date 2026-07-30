<?php
/* Smarty version 5.4.1, created on 2024-10-04 16:48:40
  from 'file:emails/activation_email.txt' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67001c682e42c4_63352338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68febd76eed3185f23e7066f54bdac69e5ce9e21' => 
    array (
      0 => 'emails/activation_email.txt',
      1 => 1693736736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67001c682e42c4_63352338 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates/emails';
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hi");?>
 <?php echo $_smarty_tpl->getValue('name');?>
,

<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/activation/<?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activiation Code");?>
: <?php echo $_smarty_tpl->getValue('email_verification_code');?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>


<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Team");
}
}
