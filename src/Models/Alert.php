<?php

namespace Axsor\LaravelLibreNMS\Models;


use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{

    protected $fillable = [
        "hostname",
        "id",
        "device_id",
        "rule_id",
        "state",
        "alerted",
        "open",
        "timestamp",
    ];
}