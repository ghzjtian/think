<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 21:35
 */

namespace app\api\model;

use think\Model;

class Profile extends Model
{
    protected $type = [
        'birthday' => 'timestamp:Y-m-d',
    ];
}