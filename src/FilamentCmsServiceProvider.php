<?php

namespace RDBI\CMS;

use Filament\PluginServiceProvider;
use RDBI\CMS\Filament\Resources\CategoryResource;
use RDBI\CMS\Filament\Resources\PublicationResource;
use RDBI\CMS\Filament\Resources\PublicationResource\RelationManagers\CategoriesRelationManager;
use RDBI\CMS\Filament\Resources\PublicationTypeResource;
use RDBI\CMS\Filament\Resources\PublicationTypeResource\RelationManagers\PublicationsRelationManager;
use Spatie\LaravelPackageTools\Package;

class FilamentCmsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'laravel-cms';

    protected array $relationManagers = [
        PublicationsRelationManager::class,
        CategoriesRelationManager::class
    ];

    protected array $resources = [
        PublicationResource::class,
        PublicationTypeResource::class,
        CategoryResource::class
    ];


    public function configurePackage(Package $package): void
    {
        $package->name('laravel-cms');
    }
}
