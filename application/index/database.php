<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/7
 * Time: 17:55
 */


//会覆盖全局 /application/database.php 的配置
return [
    //数据库名,
    'database'=>'tp5_demo',
    'prefix'=>'think_',
    'params'=>[
        //使用长连接
        \PDO::ATTR_PERSISTENT=>true,
    ],
];