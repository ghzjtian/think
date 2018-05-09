<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/7
 * Time: 16:03
 */


namespace app\index\controller;

use think\Url;

/**
 * Class GenerateUrl
 * @package app\index\controller
 * 生成 URL 地址,P30
 */
class GenerateUrl
{
    public function getUrl(){
//        return Url::build('blog/read','name=thinkphp');
        return url('blog/read','name=thinkphp');
    }

}
