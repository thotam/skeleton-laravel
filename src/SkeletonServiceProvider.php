<?php

namespace :vendor_namespace;

use App\Models\User;
use Livewire\Livewire;
use Thotam\DtpStarterKit\Models\Hr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class :studly_package_nameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':package_name');
        $this->loadViewsFrom(__DIR__.'/../resources/views', ':package_name');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
		$this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');

        if ($this->app->runningInConsole()) {
            // Publishing the config.
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path(':package_name.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/:package_name'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/:package_name'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/:package_name'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        /*
        |--------------------------------------------------------------------------
        | Seed Service Provider need on boot() method
        |--------------------------------------------------------------------------
        */
        $this->app->register(SeedServiceProvider::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', ':package_name');

        // Register the main class to use with the facade
        $this->app->singleton(':package_name', function () {
            return new :studly_package_name;
        });

        if (class_exists(Livewire::class)) {
            //Livewire::component(':package_name::canhan-livewire', CaNhanLivewire::class);
        };
    }
}
