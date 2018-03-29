<?php

namespace Axsor\LaravelLibreNMS\Requests;


use Axsor\LaravelLibreNMS\Connection;
use Axsor\LaravelLibreNMS\Models\Port;
use Axsor\LaravelLibreNMS\ModelCollections\PortCollection;

class PortRequest
{
    /**
     * @var Connection contains connection parameters
     */
    private $connection;


    /**
     * PortRequest constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;

        return $this;
    }


    public function ports()
    {
        return new PortCollection($this->connection->get('ports'));
    }

    public function port($port)
    {
        return new Port($this->connection->get('ports/'.$port)['port'][0]);
    }
}