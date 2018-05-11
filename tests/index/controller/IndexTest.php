<?php
/**
 * Created by PhpStorm.
 * User: tianzeng
 * Date: 2018/5/9
 * Time: 16:16
 */

namespace tests\index\controller;

use tests\TestCase;


//单元测试,P241
class IndexTest extends TestCase
{
    public function testIndex()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }
}