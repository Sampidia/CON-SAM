<?php
/* Smarty version 5.4.1, created on 2024-10-05 09:13:30
  from 'file:ajax.profile_photos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6701033ade71a7_16231154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d37b41dbde0f204f9e04bb1cb89f1f1a0e77de' => 
    array (
      0 => 'ajax.profile_photos.tpl',
      1 => 1690154454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_profile_photo.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
))) {
function content_6701033ade71a7_16231154 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Photo");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->getValue('photos')) {?>
    <ul class="row">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('photos'), 'photo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach0DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_profile_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
    <!-- see-more -->
    <div class="alert alert-post see-more mt20 js_see-more" data-get="profile_photos" data-id="<?php echo $_smarty_tpl->getValue('id');?>
" data-type='<?php echo $_smarty_tpl->getValue('type');?>
' data-filter="<?php echo $_smarty_tpl->getValue('filter');?>
">
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }?>
</div><?php }
}
