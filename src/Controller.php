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


class Controller
{

    protected static $instance = array();

    /**
     * @var Slim
     */
    protected $app;

    /**
     * @var Http\Request
     */
    protected $request;

    /**
     * @var Http\Response
     */
    protected $response;


    public function __construct() {
        $this->app = Slim::getInstance();

        $this->request  = $this->app->request;
        $this->response = $this->app->response;
    }


    public function setBody($body) {
        $this->response->setBody($body);
    }

    public function setStatus($status) {
        $this->response->setStatus($status);
    }

    public function halt($status, $message) {
        $this->app->halt($status, $message);
    }


    public function render($template, $data = array(), $status = NULL) {
        $this->app->render($template, $data = array(), $status = NULL);
    }


    public static function  getInstance($options = NULL) {
        $className = get_called_class();
        $instance  = & self::$instance[$className];
        if (!$instance instanceof self) {
            self::$instance[$className] = new $className($options);
        }
        return self::$instance[$className];
    }

} 