<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\Models\IPv4;
use Axsor\LaravelLibreNMS\Models\IPv6;
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

    /**
     * Return IPv4/IPv6 model
     *
     * @param $port
     * @return IPv4|IPv6
     */
    public static function getIp($port)
    {
        $ip = LibreNMS::$connection->get("ports/{$port}/ip")['addresses'][0];

        if (array_key_exists('ipv4_address', $ip))
        {
            return new IPv4($ip);
        }
        else return new IPv6($ip);
    }
}