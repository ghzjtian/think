<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


//API 开发，P156
use think\Route;
Route::rule(':version/user/:id','api/:version.User/read');

//RESTFul , P161
Route::resource('blogs','db/blog');


return [



    //全局变量规则定义

    '__pattern__' => [
        'id' => '\d+',
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    //添加路由规则，路由到 index 控制器的 hello 操作方法,P25
    'hello/[:name]$' => 'index/hello',

    //闭包定义,P27
    'hello3/[:name]' => function ($name) {
        return 'Hello3,'.$name.'!';
    },

    // 变量规则,P28
//    'blog/:year/:month' => ['blog/archive',['method' => 'get'],['year' => '\d{4}','month' => '\d{2}']],
//    'blog/[:id]$' => ['blog/get',['method'=>'get'],['id'=>'\d+']],
//    'blog/[:name]$' => ['blog/read',['method'=>'get'],['name'=>'\w+']],
//    '[blog]' => [
//        ':year/:month' => ['blog/archive',['method' => 'get'],['year' => '\d{4}','month' => '\d{2}']],
//        '[:id]$' => ['blog/get',['method'=>'get'],['id'=>'\d+']],
//        '/[:name]$' => ['blog/read',['method'=>'get'],['name'=>'\w+']],
//],
//复杂路由,P29
        'blog/<year>-<month>' => ['blog/archive',['method' => 'get'],['year' => '\d{4}','month' => '\d{2}']],
        'blog/:id' => ['blog/get',['method'=>'get'],['id'=>'\d+']],
        'blog/:name' => ['blog/read',['method'=>'get'],['name'=>'\w+']],


    //模型定义,P70
// 全局变量规则定义

    'user/index' => 'db/user/index',
    'user/myquery' => 'db/user/myquery',
    'user/create' => 'db/user/create',
    'user/add' => 'db/user/add',
    'user/add_list' => 'db/user/addList',
    'user/update/:id' => 'db/user/update',
    'user/delete/:id' => 'db/user/delete',
    'user/:id' => 'db/user/read',


];

