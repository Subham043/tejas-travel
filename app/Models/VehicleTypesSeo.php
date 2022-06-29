<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\SubCity;
use App\Models\Vehicle;
use App\Models\VehicleType;

class VehicleTypesSeo extends Model
{
    use HasFactory;
    protected $table="vehicletypesseos";

    public function State()
    {
        return $this->belongsTo('App\Models\State');
    }
    
    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function Vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'vehicletypesseovehicles', 'vehicle_id', 'vehicletypesseo_id');
    }

    public function GetVehiclesId(){
        return $this->Vehicles()->pluck('vehicles.id')->toArray();
    }

    public function GetVehiclesName(){
        return $this->Vehicles()->pluck('vehicles.name');
    }

    public function VehicleType()
    {
        return $this->belongsTo('App\Models\VehicleType', 'vehicletype_id');
    }

    public function VehicleTypeSeoImage()
    {
        return $this->hasMany('App\Models\VehicleTypeSeoImage', 'vehicletypesseo_id');
    }
    
    public function VehicleTypeSeoListLayout()
    {
        return $this->hasMany('App\Models\VehicleTypeSeoListLayout', 'vehicletypesseo_id');
    }
    
    public function VehicleTypeSeoContentLayout()
    {
        return $this->hasMany('App\Models\VehicleTypeSeoContentLayout', 'vehicletypesseo_id');
    }
}
