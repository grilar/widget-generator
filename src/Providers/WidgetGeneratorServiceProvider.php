<?php

namespace Grilar\WidgetGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;

class WidgetGeneratorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(CommandServiceProvider::class);
    }
}
