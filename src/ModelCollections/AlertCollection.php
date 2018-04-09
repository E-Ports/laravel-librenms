<?php

namespace Axsor\LaravelLibreNMS\ModelCollections;


use Axsor\LaravelLibreNMS\Models\Alert;
use Illuminate\Support\Collection;

class AlertCollection extends Collection
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

        foreach ($data['alerts'] as $alert)
        {
            $this->push(new Alert($alert));
        }
    }

}