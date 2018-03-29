<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29/03/18
 * Time: 17:03
 */

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\Connection;
use Axsor\LaravelLibreNMS\ModelCollections\LocationCollection;

class LocationRequest
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

    public function locations()
    {
        return new LocationCollection($this->connection->get('resources/locations'));
    }
}