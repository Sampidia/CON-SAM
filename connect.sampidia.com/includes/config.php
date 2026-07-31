<?php  
/**
 * Sngine Configuration File
 * Environment-aware configuration reading from .env file or environment variables
 */

// Load .env file if it exists in root or app directory
$env_paths = [__DIR__ . '/../.env', __DIR__ . '/../../.env'];
foreach ($env_paths as $env_file) {
  if (file_exists($env_file)) {
    $lines = file($env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
      $line = trim($line);
      if ($line === '' || strpos($line, '#') === 0) continue;
      if (strpos($line, '=') !== false) {
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value, " \t\n\r\0\x0B\"'");
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
          putenv("{$name}={$value}");
          $_ENV[$name] = $value;
          $_SERVER[$name] = $value;
        }
      }
    }
    break;
  }
}

define("DB_NAME", getenv('DB_NAME') ?: 'defaultdb');
define("DB_USER", getenv('DB_USER') ?: 'avnadmin');
define("DB_PASSWORD", getenv('DB_PASSWORD') ?: '');
define("DB_HOST", getenv('DB_HOST') ?: 'localhost');
define("DB_PORT", getenv('DB_PORT') ?: '3306');

define("SYS_URL", rtrim(getenv('SYS_URL') ?: 'https://connect.sampidia.com', '/'));
define("DEBUGGING", getenv('DEBUGGING') === 'false' ? false : true);
define("DEFAULT_LOCALE", getenv('DEFAULT_LOCALE') ?: 'en_us');

define("LICENCE_KEY", getenv('LICENCE_KEY') ?: 'xxxxxxxx');
define("JWT_SECRET", getenv('JWT_SECRET') ?: '0b0cfc07fca81c956ab9181d8576f4a8');
?>