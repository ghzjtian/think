<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 10:25
 */

namespace app\db\model;

use think\Model;

/**
 * Class User
 * @package app\db\model
 * 模型定义,P70
 */
class User extends Model
{


//    // 定义类型转换
//    protected $type = [
//        'birthday' => 'timestamp:Y/m/d',
//    ];
//// 定义自动完成的属性
//    protected $insert = ['status'];
//// status属性修改器
//    protected function setStatusAttr($value, $data)
//    {
//        return '流年' == $data['nickname'] ? 1 : 2;
//    }
//// status属性读取器
//    protected function getStatusAttr($value)
//    {
//        $status = [-1 => '删除', 0 => '禁用', 1 => '正常', 2 => '待审核'];
//        return $status[$value];
//    }
//
//    //查询范围,P92
//    // email查询
//    protected function scopeEmail($query)
//    {
//        $query->where('email', 'thinkphp@qq.com');
//    }
//// status查询
//    protected function scopeStatus($query)
//    {
//        $query->where('status', 1);
//    }

//    // 定义类型转换
//    protected $type = [
//        'birthday' => 'timestamp:Y/m/d',
//    ];
//// 定义自动完成的属性
//    protected $insert = ['status' => 1];


//    //类型转换,P86
//    protected $dateFormat = 'Y/m/d';
//    protected $type = [
//// 设置birthday为时间戳类型（整型）
//        'birthday' => 'timestamp',
//    ];

//    // birthday读取器,P82
//    protected function getBirthdayAttr($birthday)
//    {
//        return date('Y-m-d', $birthday);
//    }
//
//    // user_birthday读取器
//    protected function getUserBirthdayAttr($value,$data)
//    {
//        return date('Y/m/d', $data['birthday']);
//    }
//
//    // birthday修改器
//    protected function setBirthdayAttr($value)
//    {
//        return strtotime($value);
//    }

////关联定义,P110
    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;
// 定义自动完成的属性
    protected $insert = ['status' => 1];
// 定义 一对一 关联方法
    public function profile()
    {
        return $this->hasOne('Profile');
    }
// 定义 一对多 关联,P114
    public function books()
    {
        return $this->hasMany('Book');
    }

    // 定义多对多关联
    public function roles()
    {
// 用户 BELONGS_TO_MANY 角色
        return $this->belongsToMany('Role', 'access');
    }


}



/**
<h2>用户列/*表（{$count}）</h2>
{volist name="list" id="user" }
<div class="info">
ID：{$user.id}<br/>
昵称：{$user.nickname}<br/>
邮箱：{$user.profile.email}<br/>
生日：{$user.profile.birthday}<br/>
</div>
{/volist}

 */


/**
 *
 * <!--分页显示 Start-->
<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css" />
<h2>用户列表（{$list->total()}）</h2>
{volist name="list" id="user"}
ID：{$user.id}<br/>
昵称：{$user.nickname}<br/>
邮箱：{$user.profile.email}<br/>
生日：{$user.profile.birthday}<br/>
------------------------<br/>
{/volist}
{$list->render()}

<!--分页显示 End-->
 *
 *
 *
 */