<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTypeSeoListLayout extends Model
{
    use HasFactory;
    protected $table="vehicletypesseolistlayout";

    public function VehicleTypeSeo()
    {
        return $this->belongsTo('App\Models\VehicleTypeSeo');
    }

    public function VehicleTypeSeoListLayoutList()
    {
        return $this->hasMany('App\Models\VehicleTypeSeoListLayoutList', 'vehicletypesseolistlayout_id');
    }
}
