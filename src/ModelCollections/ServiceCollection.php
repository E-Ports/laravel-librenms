<?php

namespace Axsor\LaravelLibreNMS\ModelCollections;


use Axsor\LaravelLibreNMS\Models\Service;
use Illuminate\Support\Collection;

class ServiceCollection extends Collection
{
    // Necessary attribute?
    /**
     * @var mixed Result of request
     */
    public $status;

    /**
     * For each service creates new service
     *
     * ServiceCollection constructor.
     * @param array $data
     */
    public function __construct(Array $data)
    {
        parent::__construct();

        $this->status = $data['status'];

        foreach ($data['services'] as $service)
        {
            $this->push(new Service($service));
        }
    }
}