<?php
/**
 * @author Jonathon Wallen
 * @date 26/6/17
 * @time 11:54 AM
 * @copyright 2008 - present, Monkii Digital Agency (http://monkii.com.au)
 */

namespace MonkiiBuilt\LadSettings;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    protected $defer = false;

    public function boot(\MonkiiBuilt\LaravelAdministrator\PackageRegistry $packageRegistry)
    {
        $packageRegistry->registerPackage('MonkiiBuilt\LadSettings');

        $this->loadMigrationsFrom(__DIR__.'/../resources/database');

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lad-settings');

        $this->publishes([
            __DIR__. '/../config/lad-settings.php' => config_path('/laravel-administrator/lad-settings.php')
        ], 'lad-settings');
    }

}