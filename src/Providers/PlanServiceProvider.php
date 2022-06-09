<?php

namespace ConfrariaWeb\Plan\Providers;

use Illuminate\Support\ServiceProvider;

class PlanServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        $this->publishes([__DIR__ . '/../../config/cw_plan.php' => config_path('cw_plan.php')], 'config');
    }

    public function register()
    {

    }

}
