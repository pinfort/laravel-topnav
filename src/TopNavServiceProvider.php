<?php

namespace Pinfort\LaravelTopNav;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/TopNav'),
        ], 'public');

        // translate directive
        Blade::directive('topnavlang', function($name) {
            return "<?php echo 'LaravelTopNav::ui.top_nav.'.$name === (\$trans = trans('LaravelTopNav::ui.top_nav.'.$name)) ? $name : \$trans ?>";
        });

        // include directive
        Blade::directive('laraveltopnav', function() {
            return Blade::compileString("@include('LaravelTopNav::menu', ['menu' => config('top_nav.menu')])");
        });
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
