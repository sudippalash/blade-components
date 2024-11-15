<?php

namespace Sudip\BladeComponents\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/blade-components.php', 'blade-components'
        );
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-components');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'blade-components');

        $this->registerComponents();

        $this->publishes([
            __DIR__.'/../../config/blade-components.php' => config_path('blade-components.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../lang' => lang_path('vendor/blade-components'),
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
