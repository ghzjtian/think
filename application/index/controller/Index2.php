<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

//《控制器从入门到精通》/前置操作
class Index2 extends Controller
{

    protected $beforeActionList = [
        'first',
        'second' =>  ['except'=>'hello'],
        'three'  =>  ['only'=>'hello,data'],
    ];

    protected function first()
    {
        echo 'first<br/>';
    }

    protected function second()
    {
        echo 'second<br/>';
    }

    protected function three()
    {
        echo 'three<br/>';
    }

    public function hello()
    {
        return 'hello';
    }

    public function data()
    {
        return 'data';
    }
    public function data2()
    {
        return 'data2';
    }


}
