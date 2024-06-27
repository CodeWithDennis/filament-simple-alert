<?php

namespace CodeWithDennis\SimpleAlert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeWithDennis\SimpleAlert\SimpleAlert
 */
class SimpleAlert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodeWithDennis\SimpleAlert\SimpleAlert::class;
    }
}
