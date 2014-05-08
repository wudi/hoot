<?php
/**
 *
 * YunyingApp
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/06
 *
 */

namespace Slim\Cache;


use Slim\Cache;
use Slim\Config;

class Memcache extends Cache
{

    /**
     * @var \Memcached
     */
    public $handler = NULL;


    /**
     * Memcaches set servers
     *
     * @var array
     */
    private $server = array(
        array(
            'host' => '127.0.0.1',
            'port' => 11211
        ),
    );

    public function __construct() {
        $this->server  = Config::get('memcache');
        $this->handler = new \Memcached();
        $this->handler->addServers($this->server);
    }


    /**
     * @param array $options
     * @return \Memcached
     */
    public static function getInstance($options = array()) {
        return parent::getInstance();
    }

    public function close() {
        $this->handler->quit();
    }

}