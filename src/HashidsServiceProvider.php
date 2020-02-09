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

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class HashidsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/hashids.php', 'hashids');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/hashids.php' => $this->app->configPath('hashids.php'),
            ], 'config');
        }

        $this->app->singleton('hashids.factory', fn () => new HashidsFactory());

        $this->app->singleton('hashids', fn (Container $app) => $app['hashids.factory']->make($app['config']['hashids']));
    }

    public function provides(): array
    {
        return ['hashids', 'hashids.factory'];
    }
}
