<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\SubCity;
use App\Models\Vehicle;

class Transporter extends Model
{
    use HasFactory;
    protected $table="transporters";

    public function State()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function Cities()
    {
        return $this->belongsToMany(City::class, 'transportercities');
    }

    public function GetCitiesId(){
        return $this->Cities()->pluck('cities.id')->toArray();
    }

    public function GetCitiesName(){
        return $this->Cities()->pluck('cities.name');
    }

    public function SubCities()
    {
        return $this->belongsToMany(SubCity::class, 'transportersubcities');
    }

    public function Vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'transportervehicles');
    }

    public function GetVehiclesId(){
        return $this->Vehicles()->pluck('vehicles.id')->toArray();
    }

    public function GetVehiclesName(){
        return $this->Vehicles()->pluck('vehicles.name');
    }
}
