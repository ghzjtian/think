<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 数据库类型
    'type'            => 'mysql',
    // 服务器地址
    'hostname'        => 'localhost',
    // 数据库名
    'database'        => 'tp5_demo',
    // 用户名
    'username'        => 'root',
    // 密码
    'password'        => 'mysql1230',
    // 端口
    'hostport'        => '3306',
    // 连接dsn
    'dsn'             => '',
    // 数据库连接参数
    'params'          => [],
    // 数据库编码默认采用utf8
    'charset'         => 'utf8',
    // 数据库表前缀
    'prefix'          => 'think_',
    // 数据库调试模式
    'debug'           => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 自动读取主库数据
    'read_master'     => false,
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => 'array',
    // 自动写入时间戳字段
    'auto_timestamp'  => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
];


/**
 *
 * 来自 《thinkPHP 5.0 快速入门》
 * 在数据库 tp5_demo 中插入表think_data

 * CREATE TABLE IF NOT EXISTS `think_data`(
`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
`data` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
)ENGINE=MYISAM DEFAULT CHARSET=utf8;
 *
 *
 * 往表 tp5_demo 中插入数据
 INSERT INTO `think_data` (`id`,`data`) VALUES
 (1,`thinkphp`),
 (2,`php`),
 (3,`framework`);

INSERT INTO `think_data` (`id`, `data`) VALUES ('1', 'thinkphpAuto');

 *
 */