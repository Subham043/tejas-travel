<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coupon;

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

    public function Coupons()
    {
        return $this->belongsToMany(Coupon::class, 'couponvehicletypes', 'vehicletype_id');
    }
}
