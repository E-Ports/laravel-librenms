<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29/03/18
 * Time: 17:08
 */

namespace Axsor\LaravelLibreNMS\ModelCollections;


use Axsor\LaravelLibreNMS\Models\Location;
use Illuminate\Support\Collection;

class LocationCollection extends Collection
{
    // Necessary attribute?
    /**
     * @var mixed Result of request
     */
    public $status;

    /**
     * For each location creates new location
     *
     * LocationCollection constructor.
     * @param array $data
     */
    public function __construct(Array $data)
    {
        parent::__construct();

        $this->status = $data['status'];

        foreach ($data['locations'] as $location)
        {
            $this->push(new Location($location));
        }
    }

}