<?php

namespace Tests\Unit;

use App\Helpers\CommentLinesHelper;

class CommentLinesHelperTest extends ReflectionTestCase
{
    /**
     * @var CommentLinesHelper
     */
    protected $sut;

    public function setUp()
    {
        $this->sut = new CommentLinesHelper;
    }

    public function testSimpleProcessLines()
    {
        $expected = array(1);

        $unProcessedLines = [1 => 1];

        $result = $this->invokeMethod($this->sut, 'processCodeLines', [$unProcessedLines]);

        $this->assertSame($expected, $result);
    }

    public function testMultiLinesProcessLines()
    {
        $expected = array('1-25');

        $unProcessedLines = [1 => 25];

        $result = $this->invokeMethod($this->sut, 'processCodeLines', [$unProcessedLines]);

        $this->assertSame($expected, $result);
    }

    public function testMixedLines()
    {
        $expected = array('1-25', 12, 69, '75-80', '82-100', 101);

        $unProcessedLines = [
            1 => 25,
            12 => 12,
            69 => 69,
            75 => 80,
            82 => 100,
            101 => 101
        ];

        $result = $this->invokeMethod($this->sut, 'processCodeLines', [$unProcessedLines]);

        $this->assertSame($expected, $result);
    }

}
