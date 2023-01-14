<?php

namespace Filament\Infolists;

use Filament\Infolists\Testing\TestsInfolists;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InfolistsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-infolists')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews();
    }
}
