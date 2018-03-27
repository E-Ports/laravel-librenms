<?php

namespace Axsor\LaravelLibrenms;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class LibrenmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info('Hola');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
