<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/9
 * Time: 15:03
 */


namespace app\index\controller;


//验证码显示,P204
class Captcha extends \think\Controller
{
// 验证码表单
    public function index()
    {
        return $this->fetch();
    }

    // 验证码检测
    public function check($code = '')
    {
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
            $this->success('验证码正确');

        }
    }

}