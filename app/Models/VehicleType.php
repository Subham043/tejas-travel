<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;
    protected $table="vehicletypes";

    public function Vehicle()
    {
        return $this->hasMany('App\Models\Vehicle');
    }

    public function LocalRide()
    {
        return $this->hasMany('App\Models\LocalRide');
    }
}
