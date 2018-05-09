<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 13:36
 */

namespace app\db\model;

use think\Model;
class Profile extends Model
{
    protected $type = [
        'birthday' => 'timestamp:Y-m-d',
    ];
    public function user()
    {
// 档案 BELONGS TO 关联用户
        return $this->belongsTo('User');
    }
}


/**
 * 一对一关联
 *
 * DROP TABLE IF EXISTS `think_user`;
CREATE TABLE IF NOT EXISTS `think_user` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`nickname` varchar(25) NOT NULL,
`name` varchar(25) NOT NULL,
`password` varchar(50) NOT NULL,
`create_time` int(11) UNSIGNED NOT NULL,
`update_time` int(11) UNSIGNED NOT NULL,
`status` tinyint(1) DEFAULT 0,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `think_profile`;
CREATE TABLE IF NOT EXISTS `think_profile` (
`id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
`truename` varchar(25) NOT NULL,
`birthday` int(11) NOT NULL,
`address` varchar(255) DEFAULT NULL,
`email` varchar(255) DEFAULT NULL,
`user_id` int(6) UNSIGNED NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 *
 *
 */


/**
 *
 * 添加: http://tp5.com/user/add
 * 查询: http://tp5.com/user/1
 *  更新: http://tp5.com/user/update/1
 *  删除: http://tp5.com/user/delete/2
 */