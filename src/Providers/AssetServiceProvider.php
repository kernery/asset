<?php

namespace Kernery\Assets\Providers;

use Illuminate\Support\ServiceProvider;
use Kernery\Main\Traits\LoadAndPublishDataTrait;

class AssetServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->setNamespace('modules/assets')
            ->loadAndPublishConfigs('assets')
            ->loadHelpers();
    }
}
