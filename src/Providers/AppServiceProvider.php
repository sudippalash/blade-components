<?php

namespace Sudip\BladeComponents\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/blade-components.php', 'blade-components'
        );
    }


    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/components', 'spcomponents');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'blade-components');

        $this->registerComponents();


        $this->publishes([
            __DIR__ . '/../../config/blade-components.php' => config_path('blade-components.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/blade-components'),
        ], 'lang');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blade-components'),
        ], 'views');
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        Blade::componentNamespace('Sudip\\BladeComponents\\View\\Components', 'sp-components');

        return $this;
    }
}
