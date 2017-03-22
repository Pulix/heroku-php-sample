<?php
namespace MyUnitTests\App;

use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Project\App;
use Project\Controller;
use Project\Logger;


class LogTest extends TestCase {

    /**
     * When log is called then return null
     */
    public function testWhenLogIsCalledThenReturnNull()
    {
        $logger = new Logger();
        static::assertNull($logger->log('test'));
    }
}
