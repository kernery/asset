<?php

namespace Kernery\Assets\Facades;

use Illuminate\Support\Facades\Facade;
use Kernery\Assets\Assets as AssetsClass;

class AssetsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AssetsClass::class;
    }
}
