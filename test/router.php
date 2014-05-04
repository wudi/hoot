<?php

$app->get('/', array('\\Controller\\indexController', 'index'));

$app->get('/user/:uid/', '\\Controller\\userController::userList');
