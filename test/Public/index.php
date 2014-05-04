<?php

require "/Users/pushy/Source/Slim/Slim.php";

define('APP_PATH', dirname(__DIR__));

$config = require APP_PATH . DIRECTORY_SEPARATOR . 'Conf/config.php';

$app = new \Slim\Slim($config);

require APP_PATH . '/router.php';

$app->run();