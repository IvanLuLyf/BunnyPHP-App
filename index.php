<?php
header('X-Powered-By:BunnyFramework');
define('APP_PATH', __DIR__ . '/');
define('APP_DEBUG', true);
date_default_timezone_set('PRC');
require 'vendor/autoload.php';
(new BunnyPHP\BunnyPHP())->run();