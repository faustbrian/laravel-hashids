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

namespace KodeKeep\Hashids\Tests;

use Hashids\Hashids;
use Illuminate\Support\Str;
use KodeKeep\Hashids\HashidsFactory;

/**
 * @covers \KodeKeep\Hashids\HashidsFactory
 */
class HashidsFactoryTest extends TestCase
{
    /** @test */
    public function creates_a_hashids_instance(): void
    {
        $hashids = (new HashidsFactory())->make([
            'salt'     => Str::random(64),
            'length'   => 64,
            'alphabet' => Str::random(64),
        ]);

        $this->assertInstanceOf(Hashids::class, $hashids);
    }
}
