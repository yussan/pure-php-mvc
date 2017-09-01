<?php namespace app;

use app\Config\Bootstrap;

// error_reporting(E_ALL);

// global modules declaration

// load app bootstrap
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/Config/Bootstrap.php';
$bootstrap = new Bootstrap();
return $bootstrap::run();