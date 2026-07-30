<?php
/* Smarty version 5.4.1, created on 2024-11-02 13:37:46
  from 'file:ajax.mutual_friends.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67262b2a3a8261_58049313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072b876896705bd804abad3bc2cfd43f01646163' => 
    array (
      0 => 'ajax.mutual_friends.tpl',
      1 => 1688818926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
))) {
function content_67262b2a3a8261_58049313 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mutual Friends");?>
 (<?php echo $_smarty_tpl->getValue('total_mutual_friends');?>
)</h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mutual_friends'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"remove"), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </ul>

  <?php if ($_smarty_tpl->getValue('total_mutual_friends') >= $_smarty_tpl->getValue('system')['max_results']) {?>
    <!-- see-more -->
    <div class="alert alert-info see-more js_see-more" data-get="mutual_friends" data-uid="<?php echo $_smarty_tpl->getValue('uid');?>
">
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php }?>
</div><?php }
}
