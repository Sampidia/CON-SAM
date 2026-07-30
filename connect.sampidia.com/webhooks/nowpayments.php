<?php

/**
 * webhooks -> nowpayments
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../bootstrap.php');

try {
    // get input data
    $input_data = file_get_contents('php://input');
    $post_data = json_decode($input_data, true);

    if (!$post_data) {
        throw new Exception("Invalid IPN payload");
    }

    $transaction_id = $post_data['order_id'] ?? null;
    if (!$transaction_id) {
        throw new Exception("Missing order_id in IPN");
    }

    // handle the transaction
    $transaction = $user->get_nowpayments_transaction($transaction_id);
    if ($transaction) {
        // check payment
        $payment = $user->check_nowpayments_payment($transaction_id, $input_data);
        if ($payment) {
            /* prepare handle & product_id */
            $handle = $_GET['handle'] ?? $transaction['handle'];
            $id = $_GET['package_id'] ?? $_GET['post_id'] ?? $_GET['plan_id'] ?? $_GET['movie_id'] ?? $_GET['orders_collection_id'] ?? $transaction['product_id'];

            switch ($handle) {
                case 'packages':
                    // valid inputs
                    if (!isset($id) || !is_numeric($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [package_id is not set]", '-1');
                    }

                    // get package
                    $package = $user->get_package($id);
                    if (!$package) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [Package is invalid or not exist]", '-1');
                    }

                    /* update user package */
                    $user->update_user_package($package['package_id'], $package['name'], $package['price'], $package['verification_badge_enabled'], $transaction['user_id']);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $package['price'], 'nowpayments', 'packages');
                    break;

                case 'wallet':
                    /* update user wallet balance */
                    $db->query(sprintf("UPDATE users SET user_wallet_balance = user_wallet_balance + %s WHERE user_id = %s", secure($transaction['amount']), secure($transaction['user_id'], 'int')));
                    /* wallet transaction */
                    $user->wallet_set_transaction($transaction['user_id'], 'recharge', 0, $transaction['amount'], 'in');
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'wallet');
                    break;

                case 'donate':
                    // valid inputs
                    if (!isset($id) || !is_numeric($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [post_id is not set]", '-1');
                    }

                    /* funding donation */
                    $user->funding_donation($id, $transaction['amount'], $transaction['user_id']);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'donate');
                    break;

                case 'subscribe':
                    // valid inputs
                    if (!isset($id) || !is_numeric($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [plan_id is not set]", '-1');
                    }

                    // get monetization plan
                    $monetization_plan = $user->get_monetization_plan($id, true);
                    if (!$monetization_plan) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [monetization plan is invalid or not exist]", '-1');
                    }

                    /* subscribe to node */
                    $user->subscribe($id, $transaction['user_id']);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'subscribe');
                    break;

                case 'paid_post':
                    // valid inputs
                    if (!isset($id) || !is_numeric($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [post_id is not set]", '-1');
                    }

                    /* unlock paid post */
                    $user->unlock_paid_post($id, $transaction['user_id']);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'paid_post');
                    break;

                case 'movies':
                    // valid inputs
                    if (!isset($id) || !is_numeric($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [movie_id is not set]", '-1');
                    }

                    /* movie payment */
                    $user->movie_payment($id, $transaction['user_id']);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'movies');
                    break;

                case 'marketplace':
                    // valid inputs
                    if (!isset($id)) {
                        $user->update_nowpayments_transaction($transaction['transaction_id'], "Error (400): Bad Request [orders_collection_id is not set]", '-1');
                    }

                    /* mark orders collection as paid */
                    $user->mark_orders_collection_as_paid($id);
                    /* update nowpayments transaction */
                    $user->update_nowpayments_transaction($transaction['transaction_id'], __("Transaction complete successfully"), '2');
                    /* notify the user */
                    $user->post_notification(['to_user_id' => $transaction['user_id'], 'from_user_id' => '1', 'action' => 'nowpayments_complete']);
                    /* log payment */
                    $user->log_payment($transaction['user_id'], $transaction['amount'], 'nowpayments', 'marketplace');
                    break;
            }
        }
    }
} catch (Exception $e) {
    /* do nothing */
}
