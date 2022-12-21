<?php
namespace RDBI\CMS;

use Filament\Facades\Filament;
use Spatie\LaravelPackageTools\Package;
use Filament\PluginServiceProvider;
use Filament\Events\ServingFilament;
use Illuminate\Support\Facades\Event;

class FilamentServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-cms');
    }

    public function packageConfiguring(Package $package): void
    {
        Event::listen(ServingFilament::class, [$this, 'registerStuff']);
    }

    protected function registerStuff(ServingFilament $event): void
    {
        Filament::registerTheme(
            mix('css/filament.css'),
        );
    }
}
