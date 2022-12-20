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
            __DIR__.'/Seeders/UserSeeder.php' => database_path('seeders/UserSeeder.php'),
            __DIR__.'/config/filament.php' => config_path('filament.php'),
            __DIR__.'/config/settings.php' => config_path('settings.php'),
        ], 'rdbi-config');
    }
}
