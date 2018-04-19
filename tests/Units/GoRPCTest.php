<?php
// +----------------------------------------------------------------------
// | 基础测试类 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Units;

use App\Common\Clients\Rpc\BasicClient;
use Tests\UnitTestCase;

/**
 * Class UnitTest
 */
class GoRPCTest extends UnitTestCase
{
    public function testVersionCase()
    {
        $version = BasicClient::getInstance()->version();
        $this->assertEquals('1.0.0', $version);
    }

    public function testGetUserById()
    {
        $user = BasicClient::getInstance()->getUserById(1);
        dd($user);
    }
}
