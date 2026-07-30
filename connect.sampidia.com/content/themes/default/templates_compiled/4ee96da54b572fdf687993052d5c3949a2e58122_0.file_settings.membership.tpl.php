<?php
/* Smarty version 5.4.1, created on 2024-10-05 10:16:58
  from 'file:settings.membership.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6701121a9809c4_42573472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee96da54b572fdf687993052d5c3949a2e58122' => 
    array (
      0 => 'settings.membership.tpl',
      1 => 1700503308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6701121a9809c4_42573472 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"membership",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>

</div>
<div class="card-body">
  <div class="alert alert-info">
    <div class="text">
      <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>
</strong><br>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
    </div>
  </div>

  <?php if ($_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package Details");?>

    </div>
    <div class="pl-md-4">
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>

        </label>
        <div class="col-md-9">
          <p class="form-control-plaintext">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('user')->_data['package_name']);?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('user')->_data['price']);?>

            <?php if ($_smarty_tpl->getValue('user')->_data['period'] == "life") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("per");?>
 <?php if ($_smarty_tpl->getValue('user')->_data['period_num'] != '1') {
echo $_smarty_tpl->getValue('user')->_data['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('user')->_data['period']));
}?>)
          </p>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscription Date");?>

        </label>
        <div class="col-md-9">
          <p class="form-control-plaintext">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('user')->_data['user_subscription_date'],"%e %B %Y");?>

          </p>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expiration Date");?>

        </label>
        <div class="col-md-9">
          <p class="form-control-plaintext">
            <?php if ($_smarty_tpl->getValue('user')->_data['period'] == "life") {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('user')->_data['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->getValue('user')->_data['subscription_timeleft'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remaining");?>
 <?php echo $_smarty_tpl->getValue('user')->_data['subscription_timeleft'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Days");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expired");
}?>)
            <?php }?>
          </p>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Posts");?>

        </label>
        <div class="col-md-9">
          <p class="form-control-plaintext">
            <?php echo $_smarty_tpl->getValue('user')->_data['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['boost_posts'];?>
 (<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/posts"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage");?>
</a>)
          </p>

          <div class="progress mb5">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->getValue('user')->_data['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('user')->_data['user_boosted_posts']/$_smarty_tpl->getValue('user')->_data['boost_posts'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->getValue('user')->_data['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('user')->_data['user_boosted_posts']/$_smarty_tpl->getValue('user')->_data['boost_posts'])*100;
}?>%"></div>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Pages");?>

        </label>
        <div class="col-md-9">
          <p class="form-control-plaintext">
            <?php echo $_smarty_tpl->getValue('user')->_data['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['boost_pages'];?>
 (<a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage");?>
</a>)
          </p>

          <div class="progress mb5">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->getValue('user')->_data['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('user')->_data['user_boosted_pages']/$_smarty_tpl->getValue('user')->_data['boost_pages'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->getValue('user')->_data['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('user')->_data['user_boosted_pages']/$_smarty_tpl->getValue('user')->_data['boost_pages'])*100;
}?>%"></div>
          </div>
        </div>
      </div>

      <?php if (!$_smarty_tpl->getValue('user')->_data['can_pick_categories']) {?>
        <div class="row form-group">
          <div class="col-md-9 offset-md-3">
            <button type="button" class="btn btn-danger js_unsubscribe-package">
              <i class="fa fa-trash-alt mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

            </button>
          </div>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_data['can_pick_categories']) {?>
        <form class="js_ajax-forms" data-url="users/settings.php?edit=membership">
          <?php if ($_smarty_tpl->getValue('user')->_data['allowed_videos_categories'] > 0) {?>
            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>

              </label>
              <div class="col-md-9">
                <input type="text" class="js_tagify-ajax" data-handle="video_categories" name="package_videos_categories" value='<?php echo $_smarty_tpl->getValue('user')->_data['user_package_videos_categories'];?>
'>
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can select");?>
 <?php echo $_smarty_tpl->getValue('user')->_data['allowed_videos_categories'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("categories");?>

                </div>
              </div>
            </div>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('user')->_data['allowed_blogs_categories'] > 0) {?>
            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs Categories");?>

              </label>
              <div class="col-md-9">
                <input type="text" class="js_tagify-ajax" data-handle="blogs_categories" name="package_blogs_categories" value='<?php echo $_smarty_tpl->getValue('user')->_data['user_package_blogs_categories'];?>
'>
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can select");?>
 <?php echo $_smarty_tpl->getValue('user')->_data['allowed_blogs_categories'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("categories");?>

                </div>
              </div>
            </div>
          <?php }?>

          <div class="row">
            <div class="col-md-9 offset-md-3">
              <button type="button" class="btn btn-danger js_unsubscribe-package">
                <i class="fa fa-trash-alt mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </div>

          <!-- success -->
          <div class="alert alert-success mt15 mb0 x-hidden"></div>
          <!-- success -->

          <!-- error -->
          <div class="alert alert-danger mt15 mb0 x-hidden"></div>
          <!-- error -->
        </form>
      <?php }?>
    </div>
    <div class="divider"></div>
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade Package");?>

    </div>
    <div class="pl-md-4">
      <div class="text-center">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="btn btn-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade Package");?>
</a>
      </div>
    </div>
  <?php } else { ?>
    <div class="text-center">
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="btn btn-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>
</a>
    </div>
  <?php }?>
</div><?php }
}
