<?php 

error_reporting(E_ALL);

require_once __DIR__.'/src/core/bootstrap.php';

$app = new Bootstrap();
die('ready');
return $app->start();


\system\core\Config\Load::method();