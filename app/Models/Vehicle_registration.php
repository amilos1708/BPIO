<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle_registration extends Model
{
    protected $fillable = [
        'date_registration', 'note'
    ];
}
