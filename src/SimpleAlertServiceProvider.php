<?php

namespace CodeWithDennis\SimpleAlert;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpleAlertServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-simple-alert';

    public static string $viewNamespace = 'filament-simple-alert';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command->askToStarRepoOnGitHub('codewithdennis/filament-simple-alert');
            });

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    protected function getAssetPackageName(): ?string
    {
        return 'codewithdennis/filament-simple-alert';
    }
}
