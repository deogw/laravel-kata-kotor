<?php

namespace Deogw\KataKotorLaravel\Providers;

use Deogw\KataKotorLaravel\KataKotor;
use Illuminate\Support\ServiceProvider;

class KataKotorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(realpath(__DIR__.'/../../config/config.php'), 'kata.kotor');

        // publish config
        if ($this->app->runningInConsole()) {
            $this->publishes([
                realpath(__DIR__.'/../../config/config.php') => config_path('kata-kotor.php'),
            ], 'config');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        $this->app->bind('KataKotor', function() {
            return new KataKotor;
        });
    }


}
