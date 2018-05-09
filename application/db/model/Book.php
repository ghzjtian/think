<?php

namespace app\db\model;

use think\Model;

class Book extends Model
{
    protected $type = [
        'publish_time' => 'timestamp:Y-m-d',
    ];
// 开启自动写入时间戳
    protected $autoWriteTimestamp = true;
// 定义自动完成的属性
    protected $insert = ['status' => 1];

    // 定义关联方法
    public function user()
    {
        return $this->belongsTo('User');
    }

}



/**
 * 一对多关联
 *
 * DROP TABLE IF EXISTS `think_book`;
CREATE TABLE IF NOT EXISTS `think_book` (
`id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` varchar(255) NOT NULL,
`publish_time` int(11) UNSIGNED DEFAULT NULL,
`create_time` int(11) UNSIGNED NOT NULL,
`update_time` int(11) UNSIGNED NOT NULL,
`status` tinyint(1) NOT NULL,
`user_id` int(6) UNSIGNED NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 *
 *
 */