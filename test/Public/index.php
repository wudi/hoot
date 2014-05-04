<?php

require "/Users/pushy/Source/Slim/Slim.php";

define('APP_PATH', dirname(__DIR__));

$config = require APP_PATH . DIRECTORY_SEPARATOR . 'Conf/config.php';

$app = new \Slim\Slim($config);

$app->contentType('application/json');

$app->response->registerBodyFormater(function ($body) {

    $body = (array)$body;

    if (!isset($body['ret'])) {
        $body['ret'] = 0;
    }

    return json_encode($body);
});

require APP_PATH . '/router.php';

$app->run();