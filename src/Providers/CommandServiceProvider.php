<?php

namespace Grilar\WidgetGenerator\Providers;

use Grilar\Base\Supports\ServiceProvider;
use Grilar\WidgetGenerator\Commands\WidgetCreateCommand;
use Grilar\WidgetGenerator\Commands\WidgetRemoveCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                WidgetCreateCommand::class,
                WidgetRemoveCommand::class,
            ]);
        }
    }
}
