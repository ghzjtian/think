<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 21:33
 */

namespace app\api\controller\v2;

use app\api\model\User as UserModel;

class User
{
//// 获取用户信息
//    public function read($id = 0)
//    {
//        $user = UserModel::get($id, 'profile');
//        if ($user) {
//            return json($user);
//        } else {
////            return json(['error' => '用户不存在'], 404);
//            //抛出 HTTP 异常 并发送 404 状态码
//            abort(404,'用户不存在');
//        }
//    }

    // 获取用户信息,P160
    public function read($id = 0)
    {
        try {
// 制造一个方法不存在的异常
            $user = UserModel::geet($id, 'profile');
            if ($user) {
                return json($user);
            } else {
                return abort(404, '用户不存在');
            }
        } catch (\Exception $e) {
// 捕获异常并转发为HTTP异常
            return abort(404, $e->getMessage());
        }
    }

}