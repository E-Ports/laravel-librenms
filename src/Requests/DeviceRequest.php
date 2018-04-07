<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\ModelCollections\IPCollection;
use Axsor\LaravelLibreNMS\Models\Device;
use Axsor\LaravelLibreNMS\ModelCollections\DeviceCollection;

class DeviceRequest
{
    /**
     * Return list of all devices
     *
     * @return DeviceCollection
     */
    public static function devices()
    {
        return new DeviceCollection(LibreNMS::$connection->get('devices'));
    }


    /**
     * Return single device
     *
     * @param $device
     * @return Device
     */
    public static function device($device)
    {
        return new Device(LibreNMS::$connection->get("devices/{$device}")['devices'][0]);
    }


    /**
     * TODO Not tested
     * @param $device
     * @return Device
     */
    public static function deleteDevice($device)
    {
        return new Device(LibreNMS::$connection->delete("devices/{$device}")['devices'][0]);
    }

    /**
     * TODO Not tested
     * @param $data
     * @return mixed
     */
    public static function addDevice($data)
    {
        return LibreNMS::$connection->post("devices", $data);
    }

    public static function getIps($device)
    {
        return new IPCollection(LibreNMS::$connection->get("devices/{$device}/ip"));
    }

    /**
     * TODO Testing not completed cause server error
     *
     * @param $device
     * @return mixed
     */
    public static function getPorts($device)
    {
        return LibreNMS::$connection->get("devices/{$device}/port_stack");
    }
}
