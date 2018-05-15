<?php

namespace app\index\controller;

use think\Db;
use app\index\model\User;

class Index
{
    public function index()
    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
//        Db::execute('insert into data (id, name) values (2, "hinkphp")');
//        Db::query('select * from data where id=2');
//        Db::execute('insert into data (id, name) values (:id, :name)',['id'=>3,'name'=>'topthink']);
//        Db::query('select * from data where id=:id',['id'=>3]);


        $lists = Db::table('data')
            ->where('id', '<>', 8)
            ->whereOr('name', 'like', '%thinkphp')
            ->where('id', 'between', [1, 20])
            ->select();


        return var_dump($lists);
    }

    //获取查询 SQL
    public function test()
    {
        // 不会进行实际的查询   返回SQL字符串
//        $result = Db::table('data')
//            ->fetchSql(true)
//            ->where('id', 1)
//            ->find();

//        $pdo = Db::table('data')
//            ->where('id', 1)
//            ->field('name')
//            ->getPdo();
//        $result = $pdo->fetchColumn();


        //SELECT `think_data`.`id`,`think_data`.`name`,`think_data`.`status`,`data`.`name` AS `truename`,
        //`data`.`phone`,`data`.`email` FROM `think_data` INNER JOIN `data` ON `data`.`user_id`=`think_data`.`id`
        // WHERE  `think_data`.`status` = 1 ORDER BY `think_data`.`id` DESC
        $result = Db::view('think_data', 'id,name,status')
            ->view('data', ['name' => 'truename', 'phone', 'email'], 'data.user_id=think_data.id')
            ->where('status', 1)
            ->order('id desc')
            ->fetchSql(true)
            ->select();

        return var_dump($result);
    }


    //模型数据处理
    public function addData()
    {
        $user = new User;

//        //添加一条数据
//        $user->name = "tian";
//        $user->email = "tian@qq.com";
//        $user -> birthday = "2018-1-1";
//        $user->save();


        //添加多条数据
        $data = [];
        for ($i = 1; $i < 2; $i++) {
            $data[$i] = [
                'name' => "tian_{$i}",
                'email' => "tian_{$i}@qq.com",
//                'birthday' => "123456{$i}890"
                'birthday' => "2018-{$i}-1"
            ];
        }
        // insertAll 对于 setBirthdayAttr 无效, saveAll 才有效
//        $res = $user->insertAll($data);
//        var_dump($res);
        $user->saveAll($data);

    }

    //模型数据处理,读写测试
    public function read()
    {
        $user = User::get(28);

//        var_dump($user);

        if($user){
            $data = $user->hidden(['id'],true)->append(['user_title'],true)->toArray();
            var_dump($data);
        }

//        echo $user->birthday;
//        echo date('Y-m-d',$user->birthday);

//        echo $user->create_time;

//        echo $user->birthday;
//        $user -> birthday = '2019/02/02';
//        $user -> save();
//        echo $user->birthday;
    }

    //数据转换
    public function readAll()
    {
        $list = User::all();
//        foreach ($list as $user) {
//            echo $user->name . ':' . $user['name'].'<br/>';
//        }

        $list = $list->toArray();
        var_dump($list);
//// 当然如果你需要也可以直接
//            echo $list[0]->name . ':' . $list[0]['name'];
    }

    public function getEmail(){
        $users = User::scope('email')->select()->hidden(['id'])->toArray();
        var_dump($users);
    }

    //模型高级用法，删除
    public function deleteData(){
        User::destroy(3);
    }

//    public function getQuery(){
//         User::where('id desc')->top(10);
////        var_dump($res);
//    }

}

