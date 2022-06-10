<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\SubCity;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\PackageType;

class LocalRide extends Model
{
    use HasFactory;
    protected $table="localrides";

    public function State()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function Cities()
    {
        return $this->belongsToMany(City::class, 'localridecities');
    }

    public function GetCitiesId(){
        return $this->Cities()->pluck('cities.id')->toArray();
    }

    public function GetCitiesName(){
        return $this->Cities()->pluck('cities.name');
    }

    public function Vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function VehicleType()
    {
        return $this->belongsTo('App\Models\VehicleType');
    }

    public function PackageType()
    {
        return $this->belongsTo('App\Models\PackageType');
    }

    public function SpecialFareLocalRide()
    {
        return $this->hasMany('App\Models\SpecialFareLocalRide');
    }
}
