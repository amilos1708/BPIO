<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name', 'brand', 'model', 'fuel_type', 'produced_at'
    ];
}
