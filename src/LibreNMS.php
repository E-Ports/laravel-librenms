<?php

namespace Axsor\LaravelLibreNMS;


use Axsor\LaravelLibreNMS\Requests\AlertRequest;
use Axsor\LaravelLibreNMS\Requests\DeviceRequest;
use Axsor\LaravelLibreNMS\Requests\LocationRequest;
use Axsor\LaravelLibreNMS\Requests\PortRequest;
use Axsor\LaravelLibreNMS\Requests\ServiceRequest;

class LibreNMS
{
    public static $connection;

    public function __construct()
    {
        self::$connection = new Connection();
    }

    /**
     * Use specific connection
     *
     * @param $connection
     * @return LibreNMS
     */
    public function use($connection)
    {
        self::$connection = new Connection($connection);

        return $this;
    }


    /*
     * #################################################################################################################
     * #############################################          DEVICE         ###########################################
     * #################################################################################################################
     */

    public static function devices()
    {
        return DeviceRequest::devices();
    }

    public static function device($id)
    {
        return DeviceRequest::device($id);
    }

    public static function deleteDevice($id)
    {
        return DeviceRequest::deleteDevice($id);
    }

    public static function addDevice($data)
    {
        return DeviceRequest::addDevice($data);
    }

    public static function getDeviceIps($device)
    {
        return DeviceRequest::getIps($device);
    }

    public static function getDevicePorts($device)
    {
        return DeviceRequest::getPorts($device);
    }

    // TODO add resting device funcionalities

    /*
     * #################################################################################################################
     * ############################################          SERVICE         ###########################################
     * #################################################################################################################
     */

    public static function services()
    {
        return ServiceRequest::services();
    }

    // TODO add resting service funcionalities

    /*
     * #################################################################################################################
     * #############################################          PORT         #############################################
     * #################################################################################################################
     */

    public static function ports()
    {
        return PortRequest::ports();
    }

    public static function port($id)
    {
        return PortRequest::port($id);
    }

    public static function getPortIp($port)
    {
        return PortRequest::getIp($port);
    }

    // TODO add resting port funcionalities

    /*
     * #################################################################################################################
     * ##########################################          LOCATIONS         ###########################################
     * #################################################################################################################
     */
    public static function locations()
    {
        return LocationRequest::locations();
    }

    /*
     * #################################################################################################################
     * ############################################          ALERT         #############################################
     * #################################################################################################################
     */

    public static function alerts()
    {
        return AlertRequest::alerts();
    }

    public static function alert($id)
    {
        return AlertRequest::alert($id);
    }

    // TODO add 'alert', 'routing', 'switching', 'inventory', 'bill', 'arp' and 'log' funcionalities
}