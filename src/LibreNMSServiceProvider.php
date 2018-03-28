<?php

namespace Axsor\LaravelLibreNMS;

use Illuminate\Support\ServiceProvider;

class LibreNMSServiceProvider extends ServiceProvider
{
    /**
     * @var string Name with which the file will be created
     */
    protected $configFile = 'librenms.php';

    /**
     * @var string Path to package configuration file
     */
    protected $configPath = '/../config/librenms.php';


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . $this->configPath => config_path($this->configFile),
            'config'
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('librenms', function () {
            return new LibreNMS;
        });
    }
}
