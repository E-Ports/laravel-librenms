<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\ModelCollections\LocationCollection;

class LocationRequest
{
    /**
     * Return all locations
     *
     * @return LocationCollection
     */
    public static function locations()
    {
        return new LocationCollection(LibreNMS::$connection->get('resources/locations'));
    }
}