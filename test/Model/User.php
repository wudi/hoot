<?php
/**
 *
 * Slim
 *
 * Author:EagleWu <eaglewudi@gmail.com>
 * Date: 2014/05/02
 *
 */

namespace Model;

use Slim\Model;

class User extends Model
{


    protected $table_name = 'ff_tag';

    public function getAllUser() {
        return $this->get('*', array(
            'LIMIT' => 5,
            'AND'   => array(
                'tag_id'   => array(1430),
                'tag_name' => '搞笑'
            )
        ));
    }

} 