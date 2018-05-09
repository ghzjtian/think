<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/8
 * Time: 09:09
 */


return [
    // 数据库表前缀
    'prefix'          => 'think_',
];


/**

CREATE TABLE IF NOT EXISTS `think_test`(
 `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL COMMENT '名称',
 `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
 PRIMARY KEY (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `think_data`(`id`,`name`,`status`) VALUES
 (1,'thinkphp',1),
(2,'onethink',1),
(3,'topthink',1);

 *
 *
 *
 *
 */