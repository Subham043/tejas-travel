<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table="cities";

    public function Country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function State()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function SubCity()
    {
        return $this->hasMany('App\Models\SubCity');
    }
}