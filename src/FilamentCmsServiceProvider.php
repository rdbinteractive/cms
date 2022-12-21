<?php

namespace RDBI\CMS;

use Filament\PluginServiceProvider;
use RDBI\CMS\Filament\Resources\PublicationResource;
use Spatie\LaravelPackageTools\Package;

class FilamentCmsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-cms';

    protected array $resources = [
        PublicationResource::class
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('laravel-cms');
    }
}
