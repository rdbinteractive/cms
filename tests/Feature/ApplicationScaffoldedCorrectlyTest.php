<?php

namespace Tests\Feature;

use Tests\TestCase;
use function PHPUnit\Framework\assertEmpty;

class ApplicationScaffoldedCorrectlyTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function basic_test(): void
    {
        assertEmpty([]);
    }
}
