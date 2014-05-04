<?php

define('APP_PATH', dirname(__DIR__));

require APP_PATH . "/../src/Slim/Slim.php";

$config = require APP_PATH . DIRECTORY_SEPARATOR . 'Conf/config.php';

$app = new \Slim\Slim($config);

require APP_PATH . '/router.php';

$app->run();
