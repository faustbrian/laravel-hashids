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

namespace KodeKeep\Hashids;

use Hashids\Hashids;
use Illuminate\Support\Arr;

class HashidsFactory
{
    public function make(array $config): Hashids
    {
        return new Hashids(
            Arr::get($config, 'salt', ''),
            Arr::get($config, 'length', 0),
            Arr::get($config, 'alphabet', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),
        );
    }
}
