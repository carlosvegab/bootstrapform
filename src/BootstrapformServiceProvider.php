<?php

namespace Cvega\Bootstrapform;

use Illuminate\Support\ServiceProvider;

class BootstrapformServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/components/' => resource_path('views/components/bootstrapform'),
            ], 'bootstrapform_components');
        }
    }
}
