<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Hashids.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Hashids\Tests\Hashids\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Hashids\Hashids;
use KodeKeep\Hashids\Facades\Hashids as Facade;
use KodeKeep\Hashids\HashidsServiceProvider;
use KodeKeep\Hashids\Tests\TestCase;

/**
 * @covers \KodeKeep\Hashids\Facades\Hashids
 */
class HashidsTest extends TestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'hashids';
    }

    protected function getFacadeClass()
    {
        return Facade::class;
    }

    protected function getFacadeRoot()
    {
        return Hashids::class;
    }

    protected function getServiceProviderClass()
    {
        return HashidsServiceProvider::class;
    }
}
