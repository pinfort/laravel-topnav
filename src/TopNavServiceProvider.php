<?php

namespace Pinfort\LaravelTopNav;

use Illuminate\Support\ServiceProvider;

class TopNavServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // config
        $this->publishes([
            __DIR__.'/config/top_nav.php' => config_path('top_nav.php'),
        ]);

        // lang
        $this->loadTranslationsFrom(__DIR__.'/translations', 'LaravelTopNav');
        $this->publishes([
            __DIR__.'/translations' => resource_path('lang/vendor/LaravelTopNav'),
        ]);

        // view
        $this->loadViewsFrom(__DIR__.'/views', 'LaravelTopNav');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/LaravelTopNav'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
