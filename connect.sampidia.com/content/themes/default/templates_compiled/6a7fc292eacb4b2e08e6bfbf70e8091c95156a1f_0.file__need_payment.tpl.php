<?php
/* Smarty version 5.4.1, created on 2024-10-06 18:16:31
  from 'file:_need_payment.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6702d3ff496a24_88453678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a7fc292eacb4b2e08e6bfbf70e8091c95156a1f' => 
    array (
      0 => '_need_payment.tpl',
      1 => 1718122578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6702d3ff496a24_88453678 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><!-- need payment -->
<div class="ptb20 plr20" <?php if ($_smarty_tpl->getValue('paid_image')) {?> style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('paid_image');?>
'); background-size: cover; background-position: center; min-height: 500px; position: relative;" <?php }?>>
  <div class="text-center text-muted" <?php if ($_smarty_tpl->getValue('paid_image')) {?> style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 90%;" <?php }?>>
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"locked",'class'=>"main-icon mb20",'width'=>"56px",'height'=>"56px"), (int) 0, $_smarty_current_dir);
?>
    <div class="text-md">
      <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold; font-size: 13px;">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PAID POST");?>

      </span>
    </div>
    <div class="d-grid">
      <button class="btn btn-info rounded rounded-pill mt20 <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>js_login<?php }?>" <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>data-toggle="modal" data-url="#payment" data-options='{ "handle": "paid_post", "paid_post": "true", "id": <?php echo $_smarty_tpl->getValue('post_id');?>
, "price": <?php echo $_smarty_tpl->getValue('price');?>
, "vat": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_vat_value')($_smarty_tpl->getValue('price'));?>
", "fees": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_fees_value')($_smarty_tpl->getValue('price'));?>
", "total": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('price'));?>
", "total_printed": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('price'),true);?>
" }' <?php }?>>
        <i class="fa fa-money-check-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PAY TO UNLOCK");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('price'),2));?>
)
      </button>
      <?php if ($_smarty_tpl->getValue('paid_text')) {?>
        <div class="post-paid-description rounded" <?php if ($_smarty_tpl->getValue('paid_image')) {?> style="background: transparent; color: #fff;" <?php }?>>
          <?php echo $_smarty_tpl->getValue('paid_text');?>

        </div>
      <?php }?>
    </div>
  </div>
</div>
<!-- need payment --><?php }
}
