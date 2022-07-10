<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Creating two 'components' workspaces, one for admin and one for front
        Blade::anonymousComponentNamespace('admin.components', 'admin');
        Blade::anonymousComponentNamespace('front.components', 'front');
    }
}
