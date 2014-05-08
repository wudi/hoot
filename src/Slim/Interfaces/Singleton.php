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
     * Some link handler should close in destory
     *
     * @return mixed
     */
    public function destory();


    /**
     * Alias Class Singleton::getInstance
     *
     * Should Write clearness return var
     *
     * @param array $options
     * @return mixed
     */
    public static function getInstance($options = array());
}