<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/7
 * Time: 15:23
 */
namespace  app\index\controller;

use think\Url;

/**
 * Class Blog
 * @package app\index\controller
 * 变量规则,P28
 */
class Blog{
    public function  get($id){
        return '查看id='.$id.'的内容';
    }
    public function read($name){
        return '查看name='.$name.'的内容';
    }
    public function archive($year,$month){
        return '查看'.$year.'/'.$month.'的归档内容';
    }

    public function getUrl(){
        return Url::build('blog/read','name=thinkphp');
    }

}