<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Amenity;

class Vehicle extends Model
{
    use HasFactory;
    protected $table="vehicles";

    public function VehicleDisplayImage()
    {
        return $this->hasMany('App\Models\VehicleDisplayImage');
    }

    public function VehicleType()
    {
        return $this->belongsTo('App\Models\VehicleType');
    }

    public function Amenities()
    {
        return $this->belongsToMany(Amenity::class, 'vehicleamenities');
    }
}
