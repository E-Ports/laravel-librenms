<?php
namespace Axsor\LaravelLibreNMS\Models;

use Illuminate\Database\Eloquent\Model;


class IPv6 extends Model
{
    protected $fillable = [
        "ipv6_address_id",
        "ipv6_address",
        "ipv6_compressed",
        "ipv6_prefixlen",
        "ipv6_origin",
        "ipv6_network_id",
        "port_id",
        "context_name",
    ];
}