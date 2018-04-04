<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\Models\Port;
use Axsor\LaravelLibreNMS\ModelCollections\PortCollection;

class PortRequest
{
    /**
     * Return all ports
     *
     * @return PortCollection
     */
    public static function ports()
    {
        return new PortCollection(LibreNMS::$connection->get('ports'));
    }

    /**
     * Return single port
     *
     * @param $port
     * @return Port
     */
    public static function port($port)
    {
        return new Port(LibreNMS::$connection->get('ports/'.$port)['port'][0]);
    }
}