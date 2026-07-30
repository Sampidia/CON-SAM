<div class="card-header with-icon">
  <i class="fab fa-bitcoin main-icon mr15" style="color: #64acff;"></i>
  {__("NOWPayments Transactions")}
</div>
<div class="card-body">
  <div class="heading-small mb20">
    {__("Transactions History")}
  </div>
  <div class="pl-md-4">
    {if $_GET['status'] == 'success'}
      <div class="alert alert-success mt20">
        <i class="fa fa-check-circle mr5"></i>
        {__("Payment Successful! Your transaction is being processed and your wallet will be updated shortly.")}
      </div>
    {elseif $_GET['status'] == 'cancel'}
      <div class="alert alert-warning mt20">
        <i class="fa fa-info-circle mr5"></i>
        {__("Payment Cancelled! You have cancelled the payment process.")}
      </div>
    {elseif $_GET['status'] == 'error'}
      <div class="alert alert-danger mt20">
        <i class="fa fa-times-circle mr5"></i>
        {__("Payment Error! Something went wrong while processing your payment.")}
      </div>
    {/if}

    {if $nowpayments_transactions}
      <div class="table-responsive mt20">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>{__("ID")}</th>
              <th>{__("Product")}</th>
              <th>{__("Amount")}</th>
              <th>{__("Created")}</th>
              <th>{__("Updated")}</th>
              <th>{__("Status")}</th>
              <th>{__("Status Message")}</th>
            </tr>
          </thead>
          <tbody>
            {foreach $nowpayments_transactions as $transaction}
              <tr>
                <td>{$transaction@iteration}</td>
                <td>{$transaction['product']}</td>
                <td>{print_money($transaction['amount'])}</td>
                <td>
                  <span class="js_moment" data-time="{$transaction['created_at']}">{$transaction['created_at']}</span>
                </td>
                <td>
                  <span class="js_moment" data-time="{$transaction['last_update']}">{$transaction['last_update']}</span>
                </td>
                <td>
                  {if $transaction['status'] == '-1'}
                    <span class="badge rounded-pill badge-lg bg-danger">{__("Error")}</span>
                  {elseif $transaction['status'] == '0'}
                    <span class="badge rounded-pill badge-lg bg-info">{__("Processing")}</span>
                  {elseif $transaction['status'] == '1'}
                    <span class="badge rounded-pill badge-lg bg-warning">{__("Pending")}</span>
                  {elseif $transaction['status'] == '2'}
                    <span class="badge rounded-pill badge-lg bg-success">{__("Complete")}</span>
                  {/if}
                </td>
                <td>
                  {if $transaction['status'] == '-1'}
                    {__("Error while processing your payment")}
                  {else}
                    {$transaction['status_message']}
                  {/if}
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    {else}
      {include file='_no_transactions.tpl'}
    {/if}
  </div>
</div>
