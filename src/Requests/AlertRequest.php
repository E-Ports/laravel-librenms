<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\LibreNMS;
use Axsor\LaravelLibreNMS\ModelCollections\AlertCollection;
use Axsor\LaravelLibreNMS\Models\Alert;

class AlertRequest
{
    /**
     * Return all alerts
     * TODO NOT TESTED
     * @return mixed
     */
    public static function alerts()
    {
        return new AlertCollection(LibreNMS::$connection->get('alerts'));
    }

    /**
     * @param $id
     * @return Alert
     */
    public static function alert($id)
    {
        return new Alert(LibreNMS::$connection->get("alerts/{$id}")['alerts'][0]);
    }
}