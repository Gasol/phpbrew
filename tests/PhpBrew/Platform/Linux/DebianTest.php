<?php

namespace PhpBrew\Tests\Platform\Linux;

use PhpBrew\Platform\Linux\Debian;
use PHPUnit\Framework\TestCase;

/**
 * @small
 */
class DebianTest extends TestCase
{
    private $distribution;

    public function setUp()
    {
        $this->distribution = new Debian();
    }

    public function testIsDebian()
    {
        $this->assertTrue($this->distribution->isDebian());
    }

    public function testIsCentOS()
    {
        $this->assertFalse($this->distribution->isCentOS());
    }
}
