<?php

namespace RDBI\CMS;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Publication
         */

        // Controller
        $this->app->make(
            'RDBI\CMS\PublicationController'
        );

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Views
        $this->loadViewsfrom(__DIR__ . '/views', 'rdbi-cms');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Filament::serving(function () {
        //     // Register the RDBI Filament Theme.
        //     Filament::registerTheme(
        //         mix('css/filament.css'),
        //     );
        // });

        /**
         * Include Routes
         */
        include __DIR__ . '/routes.php';

        $this->publishes([
            __DIR__.'/Models/User.php' => app_path('Models/User.php'),
            __DIR__.'/config/filament.php' => config_path('filament.php'),
            __DIR__.'/config/settings.php' => config_path('settings.php'),
        ], 'rdbi-config');

        $this->publishes([
            __DIR__.'/Seeders/UserSeeder.php' => database_path('seeders/UserSeeder.php'),
            __DIR__.'/Factories/PublicationTypeFactory.php' => database_path('factories/PublicationTypeFactory.php'),
            __DIR__.'/Factories/PublicationFactory.php' => database_path('factories/PublicationFactory.php'),
            __DIR__.'/Seeders/PublicationTypeSeeder.php' => database_path('seeders/PublicationTypeSeeder.php'),
            __DIR__.'/Seeders/PublicationSeeder.php' => database_path('seeders/PublicationSeeder.php'),
        ], 'rdbi-dev-seeds');

        $this->publishes([
                __DIR__ . '/build/filament.css' => resource_path('css/filament.css'),
                __DIR__ . '/build/package.json' => base_path('package.json'),
                __DIR__ . '/build/postcss.config.js' => base_path('postcss.config.js'),
                __DIR__ . '/build/tailwind.config.js' => base_path('tailwind.config.js'),
                __DIR__ . '/build/webpack.mix.js' => base_path('webpack.mix.js'),
        ], 'rdbi-build');
    }
}
