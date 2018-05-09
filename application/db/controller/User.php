<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 10:30
 */

namespace app\db\controller;

use app\DB\model\User as UserModel;

use app\db\model\Profile;
use app\db\model\Book;
use app\db\model\Role;

use think\Controller;

/**
 * Class User
 * @package app\db\controller
 * 模型定义,P70
 */
class User extends Controller
{
//    // 新增用户数据
//    public function add()
//    {
//        $user = new UserModel;
//        $user->nickname = '流年';
//        $user->email = 'thinkphp@qq.com';
////        $user->birthday = strtotime('1977-03-05');
////        $user->birthday = '1977-03-05';
////        $user->create_time = strtotime('2018/03/05');
//        if ($user->save()) {
//            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
//        } else {
//            return $user->getError();
//        }
//    }

//// 新增用户数据,P96,输入和验证
//    public function add()
//    {
//        $user = new UserModel;
//        if ($user->allowField(true)->validate(true)->save(input('post.'))) {
//            return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
//        } else {
//            return $user->getError();
//        }
//    }

// 关联新增数据,P111
    public function add()
    {
        $user = new UserModel;
        $user->name = 'tian';

        $user->password = '1230';
        $user->nickname = '景天9';
        if ($user->save()) {
// 写入关联数据
            $profile = new Profile;
            $profile->truename = '曾天';
            $profile->birthday = '1990-04-15';
            $profile->address = '中国广州';
            $profile->email = '2941249122@qq.com';
            $user->profile()->save($profile);
            return '用户新增成功';
        } else {
            return $user->getError();
        }
    }

//// 关联新增数据
//    public function add()
//    {
//        $user = UserModel::getByNickname('流年');
//// 新增用户角色 并自动写入枢纽表
////        $user->roles()->save(['name' => 'editor', 'title' => '编辑']);
//        // 给当前用户新增多个用户角色
//        $user->roles()->saveAll([
//            ['name' => 'leader', 'title' => '领导'],
//            ['name' => 'admin', 'title' => '管理员'],
//        ]);
//
//        return '用户角色新增成功';
//    }




//
//    // 批量新增用户数据
//    public function addList()
//    {
//        $user = new UserModel;
//        $list = [
//            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => strtotime('1
//988-01-15')],
//            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => strtotime('1990-0
//9-19')],
//        ];
//        if ($user->saveAll($list)) {
//            return '用户批量新增成功';
//        } else {
//            return $user->getError();
//        }
//    }
//
//    // 读取用户数据
//    public function read($id = '')
//    {
//        $user = UserModel::get($id);
////        $user = UserModel::get(['nickname'=>'流年']);
////        $user = UserModel::where('nickname', '流年')->find();
//        echo $user->nickname . '<br/>';
//        echo $user->email . '<br/>';
////        echo date('Y/m/d', $user->birthday) . '<br/>';
//        echo $user->birthday . '<br/>';
////        echo $user->user_birthday.'<br/>';
//        echo $user->status . '<br/>';
//        echo $user->create_time . '<br/>';
//        echo $user->update_time . '<br/>';
//
//        echo $user->profile->truename . '<br/>';
//        echo $user->profile->email . '<br/>';
//    }

////关联查询,P112
//    public function read($id)
//    {
//        $user = UserModel::get($id);
//
//        echo $user->name . '<br/>';
//        echo $user->nickname . '<br/>';
//        echo $user->profile->truename . '<br/>';
//        echo $user->profile->email . '<br/>';
////        $books = $user->books;
////        dump($books[0]);
//    }

//// 关联查询,P121
//    public function read()
//    {
//        $user = UserModel::getByNickname('流年');
//        dump($user->roles);
//    }

// 读取用户数据并输出数组,P122
    public function read($id = '')
    {
        $user = UserModel::get($id);
//        dump($user->toArray());
        echo ($user->toJson());
    }


//    // 获取用户数据列表
//    public function index()
//    {
//        $list = UserModel::all(['status' => 0]);
//        foreach ($list as $user) {
//            echo $user->nickname . '<br/>';
//            echo $user->email . '<br/>';
////            echo date('Y/m/d', $user->birthday) . '<br/>';
//            echo $user->birthday . '<br/>';
//            echo $user->status . '<br/>';
//            echo '----------------------------------<br/>';
//        }
//    }

// 获取用户数据列表并输出,P126
    public function index()
    {
//        $list = UserModel::all();
//        var_dump($list);
//        $this->assign('list', $list);
//        $this->assign('count', count($list));
        // 分页输出列表 每页显示3条数据
        $list = UserModel::paginate(3);
        $this->assign('list',$list);

        return $this->fetch('user/index');
    }

//
//    // 根据查询范围获取用户数据列表
//    public function myquery()
//    {
//        //
//        $list = UserModel::scope('email')
//            ->scope('status')
//            ->scope(function ($query) {
//                $query->order('id', 'desc');
//            })
//            ->all();
//        foreach ($list as $user) {
//            echo $user->nickname . '<br/>';
//            echo $user->email . '<br/>';
//            echo $user->birthday . '<br/>';
//            echo $user->status . '<br/>';
//            echo '-------------------------------------<br/>';
//        }
//    }
//
//    // 更新用户数据
//    public function update($id)
//    {
//        $user = UserModel::get($id);
//        $user->nickname = '刘晨';
//        $user->email = 'liu21st@gmail.com';
//        if (false !== $user->save()) {
//            return '更新用户成功';
//        } else {
//            return $user->getError();
//        }
//    }


//关联更新
    public function update($id)
    {
        $user = UserModel::get($id);
        $user->name = 'framework';
        if ($user->save()) {
// 更新关联数据
            $user->profile->email = 'liu21st@gmail.com';
            $user->profile->save();
            return '用户[ ' . $user->name . ' ]更新成功';
        } else {
            return $user->getError();
        }
    }


//
//    // 删除用户数据
//    public function delete($id)
//    {
//        $user = UserModel::get($id);
//        if ($user) {
//            $user->delete();
//            return '删除用户成功';
//        } else {
//            return '删除的用户不存在';
//        }
//    }

//关联删除
    public function delete($id)
    {
        $user = UserModel::get($id);
        if ($user->delete()) {
// 删除关联数据
            $user->profile->delete();
            return '用户[ ' . $user->name . ' ]删除成功';
        } else {
            return $user->getError();
        }
    }

    //关联新增,P116
    public function addBook()
    {
        $user = UserModel::get(1);
        $book = new Book;
        $book->title = 'ThinkPHP5快速入门';
        $book->publish_time = '2016-05-06';
        $user->books()->save($book);
        return '添加Book成功';
    }


    // 创建用户数据页面,P96,输入和验证
    public function create()
    {
        return view();
    }

}
