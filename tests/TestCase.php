<?php

namespace KodeKeep\Hashids\Tests;

use KodeKeep\Hashids\Facades\Hashids;
use KodeKeep\Hashids\HashidsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [HashidsServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['Hashids' => Hashids::class];
    }
}
