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
            'RDBI\CMS\Controllers\PublicationController'
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
        /**
         * Include Routes
         */
        include __DIR__ . '/routes.php';

        /**
         * Publish Required Configuration
         */
        $this->publishes([
            __DIR__.'/AppServiceProvider.php' => app_path('Providers/AppServiceProvider.php'),
            __DIR__.'/Models/User.php' => app_path('Models/User.php'),
            __DIR__.'/config/filament.php' => config_path('filament.php'),
            __DIR__.'/config/settings.php' => config_path('settings.php'),
        ], 'rdbi-config');

        /**
         * Publish User Seeder
         */
        $this->publishes([
            __DIR__.'/Seeders/UserSeeder.php' => database_path('seeders/UserSeeder.php'),
        ], 'rdbi-dev-seeds');

        /**
         * Publish script/style build files and configurations.
         */
        $this->publishes([
                __DIR__ . '/build/filament.css' => resource_path('css/filament.css'),
                __DIR__ . '/build/package.json' => base_path('package.json'),
                __DIR__ . '/build/postcss.config.js' => base_path('postcss.config.js'),
                __DIR__ . '/build/tailwind.config.js' => base_path('tailwind.config.js'),
                __DIR__ . '/build/webpack.mix.js' => base_path('webpack.mix.js'),
        ], 'rdbi-build');
    }
}
