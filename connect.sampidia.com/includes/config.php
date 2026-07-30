<?php  
/**
 * Sngine Configuration File
 * Environment-aware configuration reading from Docker/Koyeb environment variables
 */
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