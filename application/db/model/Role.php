<?php

namespace app\db\model;

use think\Model;


/**
 * Class Role
 * @package app\db\model
 * 多对多关联,P118
 */
class Role extends Model
{
    public function user()
    {
// 角色 BELONGS_TO_MANY 用户
        return $this->belongsToMany('User', 'think_access');
    }
}


/**
 *
 * DROP TABLE IF EXISTS `think_role`;
CREATE TABLE IF NOT EXISTS `think_role` (
`id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(25) NOT NULL,
`title` varchar(50) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 *
 *
 *
 *
 *
 * DROP TABLE IF EXISTS `think_access`;
CREATE TABLE IF NOT EXISTS `think_access` (
`user_id` int(6) UNSIGNED NOT NULL,
`role_id` int(5) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 *
 */