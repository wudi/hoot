<?php
/**
 *
 * Hoot PHP Framework
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/06
 */

namespace Slim;

use \Slim\Interfaces\Singleton as SingletonInterface;

abstract class Singleton implements SingletonInterface
{

    /**
     * @var array
     */
    protected static $instance = array();


    /**
     * @param array $options
     * @return object
     */
    public static function getInstance($options = array()) {
        $className = get_called_class();
        $instance  = & self::$instance[$className];
        if (!$instance instanceof self) {
            self::$instance[$className] = new $className($options);
        }
        return self::$instance[$className];
    }

}