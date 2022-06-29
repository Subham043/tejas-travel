<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleTypeSeoListLayoutList extends Model
{
    use HasFactory;
    protected $table="vehicletypesseolistlayoutlists";

    public function VehicleTypeSeoListLayout()
    {
        return $this->belongsTo('App\Models\VehicleTypeSeoListLayout');
    }

}
