<?php

namespace Outsmartit\Failedlogins;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class FailedLoginsServiceProvider extends ServiceProvider
{
    /**
     *
     * Register services.
     *
     * @return void
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/failedlogins.php', 'failedlogins'
        );
        $this->app->make('Outsmartit\Failedlogins\FailedLoginsController');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'failedlogins');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'failedlogins');
        //laravel looks for views in vendor/package
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/failedlogins'),
        ]);
        Event::listen('Illuminate\Auth\Events\Failed', 'Outsmartit\Failedlogins\Listeners\FailedLoginAttempt');
    }
}
