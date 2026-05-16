<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'customer_name',
        'vehicle_model',
        'service_type',
        'service_cost',
        'service_date',
        'vehicle_image'
    ];
}