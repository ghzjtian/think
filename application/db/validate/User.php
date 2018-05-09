<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 11:52
 */

namespace app\db\validate;

use think\Validate;

class User extends Validate
{

//    protected $rule = [
//        'nickname' => 'require|min:5|token',
//        'email' => 'require|email',
//        'birthday' => 'dateFormat:Y-m-d',
//    ];

    //数组方式
    // 验证规则
    protected $rule = [
        ['nickname', 'require|min:5', '昵称必须|昵称不能短于5个字符'],
        ['email', 'email', '邮箱格式错误'],
        ['birthday', 'dateFormat:Y-m-d', '生日格式错误'],
    ];

}