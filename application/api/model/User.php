<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 21:34
 */

namespace app\api\model;

use think\Model;

class User extends Model{
// 定义一对一关联
    public function profile()
    {
        return $this->hasOne('Profile');
    }
}