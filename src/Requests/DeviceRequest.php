<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\Connection;
use Axsor\LaravelLibreNMS\Models\Device;
use Axsor\LaravelLibreNMS\Models\DeviceCollection;

class DeviceRequest
{
    /**
     * @var Connection contains connection parameters
     */
    private $connection;


    public function __construct(Connection $connection)
    {
        $this->connection = $connection;

        return $this;
    }


    /**
     * Return list of all devices
     * @return DeviceCollection
     */
    public function devices()
    {
        return new DeviceCollection($this->connection->get('devices'));
    }


    /**
     * Return single device
     * @param $device
     * @return Device
     */
    public function device($device)
    {
        return new Device($this->connection->get("devices/{$device}")['devices'][0]);
    }


    /**
     * @param $device
     * @return Device
     */
    public function deleteDevice($device)
    {
        return new Device($this->connection->delete("devices/{$device}")['devices'][0]);
    }
}
