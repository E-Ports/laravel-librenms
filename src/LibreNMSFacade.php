<?php

namespace Axsor\LaravelLibreNMS;


use Illuminate\Support\Facades\Facade;

class LibreNMSFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'librenms';
    }
}