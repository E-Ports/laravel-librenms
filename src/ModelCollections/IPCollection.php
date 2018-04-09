<?php

namespace Axsor\LaravelLibreNMS\ModelCollections;

use Axsor\LaravelLibreNMS\Models\IPv4;
use Axsor\LaravelLibreNMS\Models\IPv6;
use Illuminate\Support\Collection;

class IPCollection extends Collection
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

        foreach ($data['addresses'] as $ip)
        {
            if (array_key_exists('ipv4_address', $ip))
            {
                $this->push(new IPv4($ip));
            }
            else $this->push(new IPv6($ip));
        }
    }
}