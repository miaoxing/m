<?php

namespace MiaoxingTest\M\Pages\Api\JsConfig;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::get('/api/js-config');
        $this->assertRetSuc($ret);
        $this->assertArrayHasKey('theme', $ret['data']);
    }
}
