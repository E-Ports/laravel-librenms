<?php

namespace Axsor\LaravelLibreNMS;


use Axsor\LaravelLibreNMS\Http\Controllers\Device;
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


    public function devices()
    {
        $device = new Device($this->connection);

        return $device->devices();
    }

    public function device($id)
    {
        $device = new Device($this->connection);

        return $device->device($id);
    }

    public function deleteDevice($id)
    {
        $device = new Device($this->connection);

        return $device->deleteDevice($id);
    }


    /**
     * FUNCIÓ PER DESENVOLUPAR
     * ELIMINAR UN COP ACABAT EL PAQUET
     */
    public function log()
    {
        Log::info('inicialitzat');
        Log::info($this->connection->__toString());
    }
}