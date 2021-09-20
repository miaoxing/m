<?php

namespace MiaoxingTest\M\Pages\MApi\JsConfig;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::get('/m-api/js-config');
        $this->assertRetSuc($ret);
        $this->assertArrayHasKey('theme', $ret['data']);
    }
}
