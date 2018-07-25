<?php
namespace Michelangelo\Confy;

use Illuminate\Support\ServiceProvider;

class ConfyServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadMigrationsFrom(__DIR__ . '../database/');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->publishes([
            __DIR__.'/../database/' => database_path('migrations')
        ], 'migrations');
    }

}