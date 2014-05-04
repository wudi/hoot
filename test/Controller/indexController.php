<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/02
 *
 */

namespace Controller;

class indexController extends baseController
{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->setBody(array('data' => 'Hello Hoot', 'ret' => 0));
    }

}