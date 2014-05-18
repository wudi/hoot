<?php
/**
 *
 * YunyingApp
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/07
 *
 */

namespace Slim\Interfaces;

interface Singleton
{


    /**
     * Alias Class Singleton::getInstance
     *
     * Should Write clearness return var
     *
     * @param array $options
     * @return mixed
     */
    public static function getInstance($options = array());


    /**
     * Some link handler should close in destory
     */
    public function __destruct();
}