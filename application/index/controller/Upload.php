<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/9
 * Time: 15:16
 */

namespace app\index\controller;

use think\Request;


//文件上传,P216
class Upload extends \think\Controller
{
// 文件上传表单
    public function index()
    {
        return $this->fetch();
    }

// 文件上传提交
    public function up(Request $request)
    {
// 获取表单上传文件
        $file = $request->file('file');
        if (empty($file)) {
            $this->error('请选择上传文件');
        }
// 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if ($info) {
            $this->success('文件上传成功：' . $info->getRealPath());
        } else {
// 上传失败获取错误信息
            $this->error($file->getError());
        }
    }
}