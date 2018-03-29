<?php

namespace Axsor\LaravelLibreNMS\ModelCollections;


use Axsor\LaravelLibreNMS\Models\Device;
use Illuminate\Support\Collection;

class DeviceCollection extends Collection
{
    // Necessary attribute?
    /**
     * @var mixed Result of request
     */
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