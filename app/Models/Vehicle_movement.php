<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle_movement extends Model
{
    protected $fillable = [
        'date_start_moving', 'date_stop_moving', 'beginning_km', 'fuel_status', 'notes'
    ];
}
