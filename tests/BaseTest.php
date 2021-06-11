<?php

namespace Php\Project\Tests;

use PHPUnit\Framework\TestCase;
use Php\Project\Base;

class BaseTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [0, 0, 0],
            [5, 10, 15],
            [100, 505, 605],
            [12, 21, 33],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testSum($a, $b, $expected)
    {
        $obj = new Base();

        $result = $obj->sum($a, $b);
        $this->assertEquals($expected, $result);
    }
}
