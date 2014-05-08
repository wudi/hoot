<?php
/**
 *
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2013/11/29
 *
 */

namespace Slim;

abstract class Cache extends Singleton
{

    public $handler;

    public $pconnect = false;

    public $prefix = '';

    public function __call($method, $args) {
        if (method_exists($this->handler, $method)) {
            return call_user_func_array(array($this->handler, $method), $args);
        } else {
            throw new \Exception("Method {$method} not found");
        }
    }

}