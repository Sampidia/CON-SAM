<?php
/* Smarty version 5.4.1, created on 2024-10-08 11:59:54
  from 'file:ajax.who_votes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67051ebab073d1_47838976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf6f6cbdeb1961001492daf20423bd4918407f74' => 
    array (
      0 => 'ajax.who_votes.tpl',
      1 => 1688818972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
))) {
function content_67051ebab073d1_47838976 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People Who Voted For This Option");?>
</h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->getValue('users')) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')["connection"]), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('users')) >= $_smarty_tpl->getValue('system')['max_results']) {?>
      <!-- see-more -->
      <div class="alert alert-info see-more js_see-more" data-get="voters" data-id="<?php echo $_smarty_tpl->getValue('id');?>
">
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
      <!-- see-more -->
    <?php }?>
  <?php } else { ?>
    <p class="text-center text-muted">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No people voted for this");?>

    </p>
  <?php }?>
</div><?php }
}
