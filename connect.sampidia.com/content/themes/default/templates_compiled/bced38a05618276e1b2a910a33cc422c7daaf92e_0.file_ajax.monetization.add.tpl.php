<?php
/* Smarty version 5.4.1, created on 2024-10-05 14:59:44
  from 'file:ajax.monetization.add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_67015460e92ff0_61813425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bced38a05618276e1b2a910a33cc422c7daaf92e' => 
    array (
      0 => 'ajax.monetization.add.tpl',
      1 => 1696939534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_67015460e92ff0_61813425 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Plan");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="monetization/controller.php?do=insert">
  <div class="modal-body">
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <!-- price -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)</label>
      <input name="price" type="text" class="form-control">
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For example 10, 20, 30 (0 for free)");?>

      </div>
    </div>
    <!-- price -->
    <!-- paid every -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Every");?>
</label>
      <div class="row">
        <div class="col-sm-8">
          <input class="form-control" name="period_num">
        </div>
        <div class="col-sm-4">
          <select class="form-select" name="period">
            <option value="minute"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Minute");?>
</option>
            <option value="hour"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hour");?>
</option>
            <option value="day"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day");?>
</option>
            <option value="week"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Week");?>
</option>
            <option value="month"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Month");?>
</option>
            <option value="year"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Year");?>
</option>
          </select>
        </div>
      </div>
      <div class="form-text">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For example 15 days, 2 Months, 1 Year");?>

      </div>
    </div>
    <!-- paid every -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="custom_description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- description -->
    <!-- order -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</label>
      <input name="plan_order" type="text" class="form-control">
    </div>
    <!-- order -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="node_id" value="<?php echo $_smarty_tpl->getValue('node_id');?>
">
    <input type="hidden" name="node_type" value="<?php echo $_smarty_tpl->getValue('node_type');?>
">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form><?php }
}
