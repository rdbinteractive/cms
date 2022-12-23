<?php

namespace Tests\Feature;

use Tests\TestCase;
use function PHPUnit\Framework\assertEmpty;

class BaseTest extends TestCase
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
