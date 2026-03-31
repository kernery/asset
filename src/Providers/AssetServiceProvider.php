<?php

namespace Kernery\Assets\Providers;

use Illuminate\Support\ServiceProvider;
use Kernery\Main\Traits\LoadAndPublishDataTrait;

class AssetServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/assets.php', 'assets');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'assets');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config/assets.php' => config_path('assets.php')], 'config');
            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/assets')], 'views');
        }
    }
}
