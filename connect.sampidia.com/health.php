<?php
/**
 * Health Check Endpoint
 * 
 * Lightweight endpoint that pings the database to keep it alive.
 * Use an external cron service (cron-job.org, UptimeRobot, etc.)
 * to hit this URL every 5-10 minutes.
 * 
 * URL: https://connect.sampidia.com/health.php
 */

require(__DIR__ . '/bootstrap.php');

$status = ['ok' => false, 'db' => false, 'ts' => time()];

try {
  $db = init_db_connection();
  $result = $db->query("SELECT 1");
  $status['db'] = ($result !== false);
  $status['ok'] = $status['db'];
  $db->close();
} catch (Exception $e) {
  $status['error'] = 'DB connection failed';
}

http_response_code($status['ok'] ? 200 : 503);
header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache');
echo json_encode($status);
