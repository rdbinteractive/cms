<?php

namespace Tests;

use RDBI\CMS\CMSServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            CMSServiceProvider::class,
        ];
    }
}
