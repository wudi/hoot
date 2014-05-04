<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/04
 *
 */

namespace Library;


class Sign
{

    protected static $sign_error_info = ''; //错误信息
    protected static $sign_encrypt_key = '67f91ef0929a8febd5b068ae22e6bc67'; //签名密钥

    /**
     * 签名方法
     *
     * @param array $params
     * @return string
     */
    public static function buildSign(array $params) {
        if (isset($params['sign'])) {
            unset($params['sign']);
        }
        ksort($params);
        $str = http_build_query($params);
        return md5($str . self::$sign_encrypt_key);
    }

    /**
     * 校验签名是否正确
     *
     * @param $params array
     * @return bool
     */
    public static function checkSign(array $params) {
        if (isset($params['sign'])) {
            if (self::buildSign($params) == $params['sign']) {
                return true;
            } else {
                self::$sign_error_info = 'sign invalid';
                return false;
            }
        } else {
            self::$sign_error_info = 'sign not found';
            return false;
        }
    }

    /**
     * 错误信息
     *
     * @return string
     */
    public static function  getError() {
        return self::$sign_error_info;
    }

} 