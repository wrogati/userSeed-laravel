<?php

namespace Wrogati\UserSeed\Providers;

use Illuminate\Support\ServiceProvider;

class UserSeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Wrogati\UserSeed\Controllers\UserSeedController');

    }
}
