<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/9
 * Time: 09:29
 */

namespace app\db\model;

use think\Model;

class Blog extends Model
{
    protected $autoWriteTimestamp = true;
    protected $insert = [
        'status' => 1,
    ];
    protected $field = [
        'id' => 'int',
        'create_time' => 'int',
        'update_time' => 'int',
        'name', 'title', 'content',
    ];
}