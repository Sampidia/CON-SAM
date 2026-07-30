<?php
/* Smarty version 5.4.1, created on 2024-10-04 11:38:52
  from 'file:live.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66ffd3cc246af3_63887857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c99b88a1640c259781126dc8bd205cc719fc74e' => 
    array (
      0 => 'live.tpl',
      1 => 1723297990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_66ffd3cc246af3_63887857 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">

      <div class="live-stream-wrapper">

        <!-- live stream title -->
        <div class="live-stream-title clearfix">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live");?>

          <div class="float-end">
            <?php if (!$_smarty_tpl->getValue('page_id') && $_smarty_tpl->getValue('user')->_data['can_receive_tip']) {?>
              <span class="x-hidden" id="js_live-tips">
                <input type="checkbox" class="btn-check" name="tips_enabled" id="tips_enabled">
                <label class="btn btn-md btn-outline-info rounded-pill" for="tips_enabled"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable Tips");?>
</label>
              </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('can_be_for_subscriptions')) {?>
              <span class="x-hidden" id="js_live-subscriptions">
                <input type="checkbox" class="btn-check" name="for_subscriptions" id="for_subscriptions">
                <label class="btn btn-md btn-outline-info rounded-pill" for="for_subscriptions"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers Only");?>
</label>
              </span>
            <?php }?>
            <span class="btn btn-md btn-danger rounded-pill x-hidden" id="js_live-end"><i class="fas fa-power-off mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End");?>
</span>
            <span class="btn btn-md btn-danger rounded-pill x-hidden" id="js_live-start" <?php if ($_smarty_tpl->getValue('page_id')) {?> data-node-id=<?php echo $_smarty_tpl->getValue('page_id');?>
 data-node='page' <?php }
if ($_smarty_tpl->getValue('group_id')) {?> data-node-id=<?php echo $_smarty_tpl->getValue('group_id');?>
 data-node='group' <?php }
if ($_smarty_tpl->getValue('event_id')) {?> data-node-id=<?php echo $_smarty_tpl->getValue('event_id');?>
 data-node='event' <?php }?>><i class="fas fa-play mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Live");?>
</span>
          </div>
        </div>
        <!-- live stream title -->

        <!-- live stream video -->
        <div class="live-stream-video">

          <!-- live counter -->
          <div class="live-counter">
            <span class="status offline" id=js_live-counter-status><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offline");?>
</span>
            <span class="number">
              <i class="fas fa-eye mr5"></i><strong id="js_live-counter-number">0</strong>
            </span>
          </div>
          <!-- live counter -->

          <!-- live recording -->
          <?php if ($_smarty_tpl->getValue('system')['save_live_enabled']) {?>
            <div class="live-recording" id="js_live-recording">
              <span>
                <i class="fas fa-record-vinyl mr5"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recording");?>
</span>
              </span>
            </div>
          <?php }?>
          <!-- live recording -->

          <!-- live status -->
          <div class="live-status" id="js_live-status">
            <div class="mb5"><i class="fas fa-camera fa-2x"></i></div>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Getting the Camera and Mic permissions");?>
<span class="spinner-grow spinner-grow-sm ml10"></span>
          </div>
          <!-- live status -->

          <!-- live comments -->
          <div class="live-comments x-hidden" id="live-comments">
            <ul class="js_scroller" data-slimScroll-height="100%"></ul>
          </div>
          <!-- live comments -->

          <!-- live video -->
          <div class="live-video-player" id="js_live-video"></div>
          <!-- live video -->
        </div>
        <!-- live stream video -->

        <!-- live stream buttons -->
        <div class="live-stream-buttons" id="js_live-stream-buttons">
          <!-- camera selection -->
          <span class="dropdown" id="camera-select-menu">
            <div class="btn btn-md btn-icon btn-rounded btn-secondary mr10" data-bs-toggle="dropdown">
              <i class="fa-solid fa-lg fa-camera-rotate fa-fw"></i>
            </div>
            <ul class="dropdown-menu">
            </ul>
          </span>
          <!-- camera selection -->
          <!-- mute/unmute mic -->
          <button class="btn btn-md btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-mic" id="mic-btn" disabled>
            <i class="fas fa-lg fa-microphone fa-fw"></i>
          </button>
          <!-- mute/unmute mic -->
          <!-- mute/unmute cam -->
          <button class="btn btn-md btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_mute-cam" id="cam-btn" disabled>
            <i class="fas fa-lg fa-video fa-fw"></i>
          </button>
          <!-- mute/unmute cam -->
          <!-- share/unshare screen -->
          <button class="btn btn-md btn-icon btn-rounded btn-secondary mr10 d-none d-sm-none d-md-inline js_share-screen" id="screen-btn" disabled>
            <i class="fas fa-lg fa-desktop fa-fw"></i>
          </button>
          <!-- share/unshare screen -->
          <!-- mute/unmute comments -->
          <button class="btn btn-md btn-icon btn-rounded btn-secondary mr10 js_mute-comments" id="comments-btn" disabled>
            <i class="fas fa-lg fa-comments fa-fw"></i>
          </button>
          <!-- mute/unmute comments -->
        </div>
        <!-- live stream buttons -->

      </div>

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
