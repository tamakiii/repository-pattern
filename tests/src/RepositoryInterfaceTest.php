<?php

namespace Concretehouse\Dp\Repository\Test;

use Phake;

/**
 * Test for repository interface.
 */
class RepositoryInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canImplement()
    {
        Phake::mock('Concretehouse\Dp\Repository\RepositoryInterface');
    }
}
