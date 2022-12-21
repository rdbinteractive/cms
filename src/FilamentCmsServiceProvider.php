<?php

namespace RDBI\CMS;

use Filament\PluginServiceProvider;
use RDBI\CMS\Filament\Resources\PublicationResource;
use RDBI\CMS\Filament\Resources\PublicationTypeResource;
use RDBI\CMS\Filament\Resources\PublicationTypeResource\RelationManagers\PublicationsRelationManager;
use Spatie\LaravelPackageTools\Package;

class FilamentCmsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-cms';

    protected array $relationManagers = [
        PublicationsRelationManager::class
    ];

    protected array $resources = [
        PublicationResource::class,
        PublicationTypeResource::class
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('laravel-cms');
    }
}
