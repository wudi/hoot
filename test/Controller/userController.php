<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/02
 *
 */

namespace Controller;

use Model\User;

class userController extends baseController
{

    public function userList() {
        $this->setStatus(201);

        $this->setBody(array(
            'data'  => User::model()->getAllUser(),
            'sql'   => User::model()->last_query(),
           // 'debug' => debug_backtrace()
    ));
    }

} 