<?php

namespace Axsor\LaravelLibreNMS\Models;


use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        "id",
        "location",
        "lat",
        "lng",
        "timestamp",
    ];
}