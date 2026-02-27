<?php

namespace CodeWithDennis\SimpleAlert\Tests;

use CodeWithDennis\SimpleAlert\SimpleAlertServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            SimpleAlertServiceProvider::class,
        ];
    }
}
