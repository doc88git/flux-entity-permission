<?php

namespace Doc88\LaravelEntityPermission;

use Illuminate\Support\ServiceProvider;

class LaravelEntityPermissionServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
    }
}
