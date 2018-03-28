<?php

namespace Axsor\LaravelLibreNMS\Http\Controllers;



use Axsor\LaravelLibreNMS\Connection;

class Device
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

    public function devices()
    {
        return $this->connection->get('devices');
    }

    public function device($device)
    {
        return $this->connection->get("devices/{$device}");
    }

    public function deleteDevice($device)
    {
        return $this->connection->delete("devices/{$device}");
    }
}