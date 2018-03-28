<?php

namespace Axsor\LaravelLibreNMS\Models;


use Illuminate\Support\Collection;

class DeviceCollection extends Collection
{
    public $status;

    /**
     * For each device creates new device
     *
     * DeviceCollection constructor.
     * @param array $data
     */
    public function __construct(Array $data)
    {
        parent::__construct();

        $this->status = $data['status'];

        foreach ($data['devices'] as $device)
        {
            $this->push(new Device($device));
        }
    }
}