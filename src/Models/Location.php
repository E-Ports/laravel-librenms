<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29/03/18
 * Time: 17:09
 */

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