<?php

namespace Axsor\LaravelLibreNMS\Models;

use Illuminate\Database\Eloquent\Model;


class Device extends Model
{
    protected $fillable = [
        'device_id',
        'hostname',
        'sysName',
        'ip',
        'community',
        'authlevel',
        'authname',
        'authpass',
        'authalgo',
        'cryptopass',
        'cryptoalgo',
        'snmpver',
        'port',
        'transport',
        'timeout',
        'retries',
        'snmp_disable',
        'bgpLocalAs',
        'sysObjectID',
        'sysDescr',
        'sysContact',
        'version',
        'hardware',
        'features',
        'location',
        'os',
        'status',
        'status_reason',
        'ignore',
        'disabled',
        'uptime',
        'agent_uptime',
        'last_polled',
        'last_poll_attempted',
        'last_polled_timetaken',
        'last_discovered_timetaken',
        'last_discovered',
        'last_ping',
        'last_ping_timetaken',
        'purpose',
        'type',
        'serial',
        'icon',
        'poller_group',
        'override_sysLocation',
        'notes',
        'port_association_mode',
        'attribs',
    ];
}