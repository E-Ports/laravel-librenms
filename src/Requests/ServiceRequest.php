<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\Connection;

class ServiceRequest
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
     * Return list of all services
     *
     * @return mixed
     */
    public function services()
    {
        return $this->connection->get('services');
    }

}