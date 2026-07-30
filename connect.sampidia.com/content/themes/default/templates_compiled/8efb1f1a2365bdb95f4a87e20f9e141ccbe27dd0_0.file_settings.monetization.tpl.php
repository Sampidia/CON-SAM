<?php
/* Smarty version 5.4.1, created on 2024-10-05 09:11:51
  from 'file:settings.monetization.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_670102d7ad4bf5_29290786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efb1f1a2365bdb95f4a87e20f9e141ccbe27dd0' => 
    array (
      0 => 'settings.monetization.tpl',
      1 => 1726168724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
    'file:_no_transactions.tpl' => 2,
  ),
))) {
function content_670102d7ad4bf5_29290786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u0526974/connect.sampidia.com/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="alert alert-info">
      <div class="text">
        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</strong><br>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Now you can earn money via paid posts, paid chat, paid audio/video calls or subscriptions plans.");?>

        <br>
        <?php if ($_smarty_tpl->getValue('system')['monetization_commission'] > 0) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("There is commission");?>
 <strong><span class="badge rounded-pill bg-warning"><?php echo $_smarty_tpl->getValue('system')['monetization_commission'];?>
%</span></strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("will be deducted");?>
.
          <br>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['monetization_money_withdraw_enabled']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/monetization/payments" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("withdraw your money");?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['monetization_money_transfer_enabled']) {?>
          <?php if ($_smarty_tpl->getValue('system')['monetization_money_withdraw_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("or");?>
 <?php }?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("wallet");?>
</a>
        <?php }?>
      </div>
    </div>

    <?php if ($_smarty_tpl->getValue('system')['verification_for_monetization'] && !$_smarty_tpl->getValue('user')->_data['user_verified']) {?>
      <div class="alert alert-danger">
        <div class="icon">
          <i class="fa fa-exclamation-circle fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account Verification Required");?>
</strong><br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To enable monetization your account must be verified");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/verification"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verify Now");?>
</a>
        </div>
      </div>
    <?php }?>

    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Settings");?>

    </div>
    <div class="pl-md-4">
      <form class="js_ajax-forms" data-url="users/settings.php?edit=monetization">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable or disable monetization for your content");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="user_monetization_enabled">
              <input type="checkbox" name="user_monetization_enabled" id="user_monetization_enabled" <?php if ($_smarty_tpl->getValue('user')->_data['user_monetization_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Chat");?>

        </div>
        <div class="pl-md-4">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Message");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="user_monetization_chat_price" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_monetization_chat_price'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The price you want to charge for each message sent by the user (0 for free)");?>

              </div>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio/Video Call");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="user_monetization_call_price" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_monetization_call_price'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The price you want to charge for each audio/video call by the user (0 for free)");?>

              </div>
            </div>
          </div>
        </div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>

        </div>
        <div class="pl-md-4">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions Plans");?>

            </label>
            <div class="col-md-9">
              <div class="payment-plans">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('monetization_plans'), 'plan');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach0DoElse = false;
?>
                  <div class="payment-plan">
                    <div class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('plan')['title']);?>
</div>
                    <div class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('plan')['price']);?>
 / <?php if ($_smarty_tpl->getValue('plan')['period_num'] != '1') {
echo $_smarty_tpl->getValue('plan')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('plan')['period']));?>
</div>
                    <?php ob_start();
echo $_smarty_tpl->getValue('plan')['custom_description'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                      <div><?php echo $_smarty_tpl->getValue('plan')['custom_description'];?>
</div>
                    <?php }?>
                    <div class="mt10">
                      <span class="text-link mr10 js_monetization-deleter" data-id="<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
">
                        <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>

                      </span>
                      |
                      <span data-toggle="modal" data-url="monetization/controller.php?do=edit&id=<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
" class="text-link ml10">
                        <i class="fa fa-pen mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>

                      </span>
                    </div>
                  </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <div data-toggle="modal" data-url="monetization/controller.php?do=add&node_id=<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
&node_type=profile" class="payment-plan new">
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="fa fa-plus mr5"></i>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New");?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 offset-md-3">
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
    </div>

    <div class="divider"></div>

    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Balance");?>

    </div>
    <div class="pl-md-4">
      <div class="row">
        <!-- subscribers -->
        <div class="col-sm-6">
          <div class="section-title mb20">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Profile Subscribers");?>

          </div>
          <div class="stat-panel bg-gradient-teal">
            <div class="stat-cell">
              <i class="fa fas fa-users bg-icon"></i>
              <div class="h3 mtb10">
                <?php echo $_smarty_tpl->getValue('subscribers_count');?>

              </div>
            </div>
          </div>
        </div>
        <!-- subscribers -->

        <!-- money balance -->
        <div class="col-sm-6">
          <div class="section-title mb20">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Money Balance");?>

          </div>
          <div class="stat-panel bg-primary">
            <div class="stat-cell">
              <i class="fa fa-donate bg-icon"></i>
              <div class="h3 mtb10">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user')->_data['user_monetization_balance'],2));?>

              </div>
            </div>
          </div>
        </div>
        <!-- monetization balance -->
      </div>
    </div>
  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "payments") {?>
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Withdrawal Request");?>

    </div>
    <div class="pl-md-4">
      <form class="js_ajax-forms" data-url="users/withdraw.php?type=monetization">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Balance");?>

          </label>
          <div class="col-md-9">
            <h6>
              <span class="badge badge-lg bg-info">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user')->_data['user_monetization_balance'],2));?>

              </span>
            </h6>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="amount">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The minimum withdrawal request amount is");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['monetization_min_withdrawal']);?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Method");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("paypal",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_paypal" value="paypal" class="form-check-input">
                <label class="form-check-label" for="method_paypal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PayPal");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("skrill",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_skrill" value="skrill" class="form-check-input">
                <label class="form-check-label" for="method_skrill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Skrill");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("moneypoolscash",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_moneypoolscash" value="moneypoolscash" class="form-check-input">
                <label class="form-check-label" for="method_moneypoolscash"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("MoneyPoolsCash");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("bank",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_bank" value="bank" class="form-check-input">
                <label class="form-check-label" for="method_bank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfer");?>
</label>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_custom" value="custom" class="form-check-input">
                <label class="form-check-label" for="method_custom"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['monetization_payment_method_custom']);?>
</label>
              </div>
            <?php }?>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transfer To");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="method_value">
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make a withdrawal");?>
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
    </div>

    <div class="divider"></div>

    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Withdrawal History");?>

    </div>
    <div class="pl-md-4">
      <?php if ($_smarty_tpl->getValue('payments')) {?>
        <div class="table-responsive mt20">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Method");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transfer To");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payments'), 'payment');
$_smarty_tpl->getVariable('payment')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('payment')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('payment');
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getVariable('payment')->iteration;?>
</td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('payment')['amount'],2));?>
</td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('payment')['method'] == "custom") {?>
                      <?php echo $_smarty_tpl->getValue('system')['monetization_payment_method_custom'];?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('payment')['method']);?>

                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->getValue('payment')['method_value'];?>
</td>
                  <td>
                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('payment')['time'];?>
"><?php echo $_smarty_tpl->getValue('payment')['time'];?>
</span>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('payment')['status'] == '0') {?>
                      <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('payment')['status'] == '1') {?>
                      <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
</span>
                    <?php } else { ?>
                      <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Declined");?>
</span>
                    <?php }?>
                  </td>
                </tr>
              <?php
$_smarty_tpl->setVariable('payment', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
    </div>
  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "earnings") {?>
    <div class="row">
      <div class="col-sm-6">
        <div class="stat-panel bg-gradient-primary">
          <div class="stat-cell narrow">
            <i class="fa fa-dollar-sign bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_earnings'),2));?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Earnings");?>
</span><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="stat-panel bg-gradient-info">
          <div class="stat-cell narrow">
            <i class="fa fa-dollar-sign bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('this_month_earnings'),2));?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Earnings");?>
</span><br>
          </div>
        </div>
      </div>
    </div>

    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("History");?>

    </div>
    <div class="pl-md-4">
      <?php if ($_smarty_tpl->getValue('earnings')) {?>
        <div class="table-responsive mt20">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Earning");?>
</th>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('earnings'), 'earning');
$_smarty_tpl->getVariable('earning')->iteration = 0;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('earning')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('earning')->iteration++;
$foreach2Backup = clone $_smarty_tpl->getVariable('earning');
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getVariable('earning')->iteration;?>
</td>
                  <td>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('earning')['user_name'];?>
">
                      <img src="<?php echo $_smarty_tpl->getValue('earning')['user_picture'];?>
" class="rounded-circle" width="30" height="30">
                      <?php echo $_smarty_tpl->getValue('earning')['user_fullname'];?>

                    </a>
                  </td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('earning')['price'],2));?>
</td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('earning')['commission'],2));?>
</td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('earning')['earning'],2));?>
</td>
                  <td>
                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('earning')['time'];?>
"><?php echo $_smarty_tpl->getValue('earning')['time'];?>
</span>
                  </td>
                </tr>
              <?php
$_smarty_tpl->setVariable('earning', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
    </div>
  <?php }?>
</div><?php }
}
