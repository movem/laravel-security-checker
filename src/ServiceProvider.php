<?php

namespace Movem\SecurityChecker;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.security-checker.check', function ($app) {
                return new Console\CheckCommand();
            }
        );

        $this->commands(['command.security-checker.check']);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.security-checker.check'];
    }
}
