<?php

namespace Axsor\LaravelLibreNMS\Models;


use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        "service_id",
        "device_id",
        "service_ip",
        "service_type",
        "service_desc",
        "service_param",
        "service_ignore",
        "service_status",
        "service_changed",
        "service_message",
        "service_disabled",
        "service_ds",
    ];
}