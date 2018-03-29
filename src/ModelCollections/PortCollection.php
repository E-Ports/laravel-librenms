<?php

namespace Axsor\LaravelLibreNMS\ModelCollections;


use Axsor\LaravelLibreNMS\Models\Port;
use Illuminate\Support\Collection;

class PortCollection extends Collection
{
    // Necessary attribute?
    /**
     * @var mixed Result of request
     */
    public $status;

    /**
     * For each port creates new port
     *
     * PortCollection constructor.
     * @param array $data
     */
    public function __construct(Array $data)
    {
        parent::__construct();

        $this->status = $data['status'];

        foreach ($data['ports'] as $port)
        {
            $this->push(new Port($port));
        }
    }
}