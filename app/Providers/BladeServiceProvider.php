<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function() {
            return auth()->user()->hasRole('admin');
        });

        Blade::if('notadmin', function() {
            return !auth()->user()->hasRole('admin');
        });

        Blade::if('engineer', function() {
            return auth()->user()->hasRole('engineer');
        });

        Blade::if('notengineer', function() {
            return !auth()->user()->hasRole('engineer');
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
