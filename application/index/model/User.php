<?php

namespace app\index\model;

use think\Model;
use traits\model\SoftDelete;

class User extends Model
{
    use SoftDelete;
//    protected $query = '\app\db\ModelQuery';

    protected $resultSetType = 'collection';

    // 开启时间字段自动写入
    protected $autoWriteTimestamp = 'datetime';

    protected $type = [
        'birthday' => 'datetime:Y/m/d',
        'create_time'=>'int',
        'update_time'=>'int'
    ];


    protected static function init()
    {
        User::beforeInsert(function ($user) {
            $user->reg_ip = request()->ip();
        });
        User::beforeWrite(function ($user) {
            $user->name = strtoupper($user->name);
        });
    }

//    protected function setBirthdayAttr($value){
//        return strtotime($value);
//    }
//    //模型读取器
//    protected function getBirthdayAttr($value){
//        return date('Y-m-d',$value);
//    }

    // 全局查询范围
    protected static function base($query)
    {
        // 查询状态为1的数据
        $query->where('reg_ip', '0.0.0.0');
    }

    protected function getCreateTimeAttr($value){
        return date('Y-m-d H:i:s',$value);
    }

    protected function getUserTitleAttr($value,$data){
        return $data['name'].':'.$data['birthday'];
    }


    // email查询
    protected function scopeEmail($query)
    {
        $query->where('email', 'tian_1@qq.com');
    }



}
