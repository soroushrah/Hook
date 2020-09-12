<?php

namespace Soroush\Action;

use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('action', function () {
            return new Actions();
        });
    }
}
