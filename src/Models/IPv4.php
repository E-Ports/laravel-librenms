<?php
namespace Axsor\LaravelLibreNMS\Models;

use Illuminate\Database\Eloquent\Model;


class IPv4 extends Model
{
    protected $fillable = [
        "ipv4_address_id",
        "ipv4_address",
        "ipv4_prefixlen",
        "ipv4_network_id",
        "port_id",
        "context_name",
    ];
}