<?php  
/**
 * Sngine Configuration File
 * Environment-aware configuration reading from .env file or environment variables
 */

// Helper to resolve environment variable from $_ENV, $_SERVER, getenv(), or fallback
function get_config_env($name, $default = '') {
  if (isset($_ENV[$name]) && $_ENV[$name] !== '') {
    return $_ENV[$name];
  }
  if (isset($_SERVER[$name]) && $_SERVER[$name] !== '') {
    return $_SERVER[$name];
  }
  $val = getenv($name);
  if ($val !== false && $val !== '') {
    return $val;
  }
  return $default;
}

// Load .env file if it exists in root or app directory
$env_paths = [__DIR__ . '/../.env', __DIR__ . '/../../.env', __DIR__ . '/.env'];
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
        putenv("{$name}={$value}");
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
      }
    }
    break;
  }
}

define("DB_NAME", get_config_env('DB_NAME', 'defaultdb'));
define("DB_USER", get_config_env('DB_USER', 'avnadmin'));
define("DB_PASSWORD", get_config_env('DB_PASSWORD', ''));
define("DB_HOST", get_config_env('DB_HOST', 'localhost'));
define("DB_PORT", get_config_env('DB_PORT', '3306'));

define("SYS_URL", rtrim(get_config_env('SYS_URL', 'https://connect.sampidia.com'), '/'));
define("DEBUGGING", get_config_env('DEBUGGING', 'true') === 'false' ? false : true);
define("DEFAULT_LOCALE", get_config_env('DEFAULT_LOCALE', 'en_us'));

define("LICENCE_KEY", get_config_env('LICENCE_KEY', 'xxxxxxxx'));
define("JWT_SECRET", get_config_env('JWT_SECRET', '0b0cfc07fca81c956ab9181d8576f4a8'));
?>