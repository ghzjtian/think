<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/15
 * Time: 13:44
 */

namespace app\db;

use think\db\Query;

// error : Cannot access property app\db\ModelQuery::$readMaster
class ModelQuery extends  Query
{

    public function top($num)
    {
        return $this->limit($num)->select();
    }
}