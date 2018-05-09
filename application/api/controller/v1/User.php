<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 21:32
 */

namespace app\api\controller\v1;

use app\api\model\User as UserModel;

class User
{
// 获取用户信息
    public function read($id = 0)
    {
        $user = UserModel::get($id);
        if ($user) {
            return json($user);
        } else {
//            return json(['error' => '用户不存在'], 404);
            //抛出 HTTP 异常 并发送 404 状态码
            abort(404,'用户不存在');
        }
    }
}