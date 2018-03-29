<?php

namespace Axsor\LaravelLibreNMS;


use Axsor\LaravelLibreNMS\Requests\DeviceRequest;
use Axsor\LaravelLibreNMS\Requests\LocationRequest;
use Axsor\LaravelLibreNMS\Requests\PortRequest;
use Axsor\LaravelLibreNMS\Requests\ServiceRequest;
use Illuminate\Support\Facades\Log;

class LibreNMS
{

    protected $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    /**
     * Use specific connection
     *
     * @param $connection
     * @return LibreNMS
     */
    public function use($connection)
    {
        $this->connection = new Connection($connection);

        return $this;
    }


    /*
     * #################################################################################################################
     *
     * #############################################          DEVICE         ###########################################
     *
     * #################################################################################################################
     */

    public function devices()
    {
        $device = new DeviceRequest($this->connection);

        return $device->devices();
    }

    public function device($id)
    {
        $device = new DeviceRequest($this->connection);

        return $device->device($id);
    }

    public function deleteDevice($id)
    {
        $device = new DeviceRequest($this->connection);

        return $device->deleteDevice($id);
    }


    /*
     * #################################################################################################################
     *
     * ############################################          SERVICE         ###########################################
     *
     * #################################################################################################################
     */

    public function services()
    {
        $service = new ServiceRequest($this->connection);

        return $service->services();
    }


    /*
     * #################################################################################################################
     *
     * #############################################          PORT         #############################################
     *
     * #################################################################################################################
     */

    public function ports()
    {
        $port = new PortRequest($this->connection);

        return $port->ports();
    }

    public function port($id)
    {
        $port = new PortRequest($this->connection);

        return $port->port($id);
    }


    /*
     * #################################################################################################################
     *
     * #############################################          PORT         #############################################
     *
     * #################################################################################################################
     */
    public function locations()
    {
        $location = new LocationRequest($this->connection);

        return $location->locations();
    }
}