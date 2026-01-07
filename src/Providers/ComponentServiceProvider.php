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
    }
}