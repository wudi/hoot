<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/03
 *
 */

namespace Controller;

use \Slim\Controller;
use Library\Sign;

class baseController extends Controller
{

    /**
     * @var $_POST
     */
    protected $post;

    /**
     * @var $_GET
     */
    protected $get;

    public function __construct() {
        parent::__construct();

        $this->post = $this->request->post();
        $this->get  = $this->request->get();

        $this->app->contentType('application/json');

        //注册body内容处理函数
        $this->response->registerBodyFormater(__CLASS__ . "::bodyFormater");

        //签名校验
        /*if (Sign::checkSign($this->request->post()) === false) {
            $this->error(Sign::getError(), -1);
        }*/
    }


    /**
     * 响应成功消息
     *
     * @param $date
     * @param int $ret
     */
    public function success($date, $ret = 0) {
        $this->response->setBody(array('data' => $date, 'ret' => $ret));
    }


    /**
     * 相应错误信息
     *
     * @param $message
     * @param $ret
     */
    public function error($message, $ret = -1) {
        $this->app->halt(400, array('msg' => $message, 'ret' => $ret));
    }


    /**
     * 响应body统一处理函数
     *
     * @param $body
     * @return string
     */
    public function bodyFormater($body) {
        $body = (array)$body;
        $ret  = & $body['ret'];
        $ret or ($body['ret'] = 0);
        return json_encode($body);
    }


}