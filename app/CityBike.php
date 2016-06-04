<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityBike extends Model
{
    //
    protected $fillable = [
        'stationName', 'availableDocks', 'totalDocks',
        'latitude', 'longitude', 'statusValue',
        'statusKey', 'availableBikes', 'stAddress1',
        'stAddress2', 'city', 'postalCode',
        'location', 'altitude', 'testStation',
        'lastCommunicationTime', 'landMark'
    ];
}
