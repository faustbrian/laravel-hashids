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

return [

    /*
    |--------------------------------------------------------------------------
    | Default Salt
    |--------------------------------------------------------------------------
    |
    | Here you may specify which salt should be used for your hashids. Do not
    | change this after your application has gone into production or you won't
    | be able to decode hashids that have been generated with the old salt.
    |
    */

    'salt' => config('app.key'),

    /*
    |--------------------------------------------------------------------------
    | Default Length
    |--------------------------------------------------------------------------
    |
    | Here you may specify which length your hashids should have. Try to keep
    | this to a reasonable length if you intend to use this for the public
    | eye or need to store a large amount of hashids in your database.
    |
    */

    'length' => 32,

    /*
    |--------------------------------------------------------------------------
    | Default Alphabet
    |--------------------------------------------------------------------------
    |
    | Here you may specify which alphabet should be used to generate your
    | hashids. You generally will not need to touch this. If you do, make sure
    | that your alphabet contains at least 16 unique characters.
    |
    */

    'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',

];
