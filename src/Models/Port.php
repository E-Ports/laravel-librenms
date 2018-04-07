<?php

namespace Axsor\LaravelLibreNMS\Models;


use Axsor\LaravelLibreNMS\Requests\PortRequest;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    public function getIp()
    {
        return PortRequest::getIp($this->port_id);
    }

    protected $fillable = [
        "port_id",
        "device_id",
        "port_descr_type",
        "port_descr_descr",
        "port_descr_circuit",
        "port_descr_speed",
        "port_descr_notes",
        "ifDescr",
        "ifName",
        "portName",
        "ifIndex",
        "ifSpeed",
        "ifConnectorPresent",
        "ifPromiscuousMode",
        "ifHighSpeed",
        "ifOperStatus",
        "ifOperStatus_prev",
        "ifAdminStatus",
        "ifAdminStatus_prev",
        "ifDuplex",
        "ifMtu",
        "ifType",
        "ifAlias",
        "ifPhysAddress",
        "ifHardType",
        "ifLastChange",
        "ifVlan",
        "ifTrunk",
        "ifVrf",
        "counter_in",
        "counter_out",
        "ignore",
        "disabled",
        "detailed",
        "deleted",
        "pagpOperationMode",
        "pagpPortState",
        "pagpPartnerDeviceId",
        "pagpPartnerLearnMethod",
        "pagpPartnerIfIndex",
        "pagpPartnerGroupIfIndex",
        "pagpPartnerDeviceName",
        "pagpEthcOperationMode",
        "pagpDeviceId",
        "pagpGroupIfIndex",
        "ifInUcastPkts",
        "ifInUcastPkts_prev",
        "ifInUcastPkts_delta",
        "ifInUcastPkts_rate",
        "ifOutUcastPkts",
        "ifOutUcastPkts_prev",
        "ifOutUcastPkts_delta",
        "ifOutUcastPkts_rate",
        "ifInErrors",
        "ifInErrors_prev",
        "ifInErrors_delta",
        "ifInErrors_rate",
        "ifOutErrors",
        "ifOutErrors_prev",
        "ifOutErrors_delta",
        "ifOutErrors_rate",
        "ifInOctets",
        "ifInOctets_prev",
        "ifInOctets_delta",
        "ifInOctets_rate",
        "ifOutOctets",
        "ifOutOctets_prev",
        "ifOutOctets_delta",
        "ifOutOctets_rate",
        "poll_time",
        "poll_prev",
        "poll_period",
    ];
}