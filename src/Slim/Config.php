<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/04
 *
 */

namespace Slim;


class Config
{

    protected static $config = array();


    public static function get($offset = NULL) {
        if (is_null($offset)) {
            return self::$config;
        }
        return isset(self::$config[$offset]) ? self::$config[$offset] : NULL;
    }


    public static function set($offset, $value = NULL) {
        if (is_array($offset)) {
            self::$config = array_merge(self::$config, $offset);
        } else {
            self::$config[$offset] = $value;
        }
    }


} 