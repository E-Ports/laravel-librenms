<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\ModelCollections\ServiceCollection;

class ServiceRequest
{
    /**
     * Return list of all services
     *
     * @return mixed
     */
    public static function services()
    {
        return new ServiceCollection(LibreNMS::$connection->get('services'));
    }

}