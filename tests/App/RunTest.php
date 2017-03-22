<?php
namespace MyUnitTests\App;

use Mockery\Mock;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Project\App;
use Project\Controller;
use Project\Logger;


class RunTest extends TestCase {

    /**
     * When true is true then pass
     */
    public function testWhenTrueIsTrueThenPass() {
        self::assertTrue(true);
    }

    /**
     * When run is called then return null
     */
    public function testWhenRunIsCalledThenReturnNull()
    {
        /** @var MockInterface|Controller $controller */
        $controller = \Mockery::mock(Controller::class);
        $logger = new Logger();

        $controller->shouldReceive('index');

        $instance = new App($controller, $logger);
        $response = $instance->run();

        static::assertNull($response);
    }
}
