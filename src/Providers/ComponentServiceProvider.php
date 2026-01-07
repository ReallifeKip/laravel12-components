<?php

namespace Reallifekip\Components\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'reallifekip');

        Blade::anonymousComponentPath(__DIR__.'/../Resources/views', 'reallifekip');

        $this->publishes([
            __DIR__.'/../Resources/dist/components.css' => public_path('vendor/reallifekip/components.css'),
        ], 'reallifekip-assets');
    }
}