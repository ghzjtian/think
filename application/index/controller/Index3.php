<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/11
 * Time: 17:47
 */

namespace app\index\controller;

use think\Request;

//架构函数注入
class Index3
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function hello()
    {
        return 'Hello,' . $this->request->param('name') . '！';
    }

}