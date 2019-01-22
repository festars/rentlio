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

        Blade::if('realtor', function() {
            return auth()->user()->hasRole('realtor');
        });

        Blade::if('notrealtor', function() {
            return !auth()->user()->hasRole('realtor');
        });

        Blade::if('landlord', function() {
            return auth()->user()->hasRole('landlord');
        });

        Blade::if('notlandlord', function() {
            return !auth()->user()->hasRole('landlord');
        });

        Blade::if('tenant', function() {
            return auth()->user()->hasRole('tenant');
        });

        Blade::if('nottenant', function() {
            return !auth()->user()->hasRole('tenant');
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
