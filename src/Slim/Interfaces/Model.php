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


interface Model
{

    /**
     * Clearly show of return model object structure.
     *
     * @param array $options
     * @return mixed  overwrite of model name
     */
    public static function model($options = array());

} 