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

use think\Route;

//动态注册

// 静态路由规则
//Route::rule('hello','index/index/hello');
// 动态路由规则
//Route::rule('hello/[:name]','index/index/hello','GET');

//Route::any('hello/[:name]','index/index/hello',['ext' => 'html','method'=> 'get'],['name'=>'[A-Za-z0-9].']);

//路由变量/可选变量
//Route::get('hello/[:name]/[:city]','index/index/hello');
//路由变量/变量规则
Route::pattern([ 'name' => '[0-9]+' , 'city' => '[A-Za-z]+' ]);
Route::get('hello/:name/[:city]','index/index/hello',[],[ 'name' => '[A-Za-z0-9]+' , 'city' => '[A-Za-z]+' ]);

//资源路由
Route::resource('blogs','index/Blog');
//MISS 路由
//Route::miss(function(){
//    return '请求错误';
//});

//静态注册
return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],

];
