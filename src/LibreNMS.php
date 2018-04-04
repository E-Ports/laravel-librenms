<?php

namespace Axsor\LaravelLibreNMS;


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


    /*
     * #################################################################################################################
     * ############################################          SERVICE         ###########################################
     * #################################################################################################################
     */

    public static function services()
    {
        return ServiceRequest::services();
    }


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


    /*
     * #################################################################################################################
     * ##########################################          LOCATIONS         ###########################################
     * #################################################################################################################
     */
    public static function locations()
    {
        return LocationRequest::locations();
    }
}