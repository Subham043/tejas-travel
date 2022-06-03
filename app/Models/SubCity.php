<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transporter;

class SubCity extends Model
{
    use HasFactory;
    protected $table="subcities";

    public function Country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function State()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function Transporters()
    {
        return $this->belongsToMany(Transporter::class, 'transportercities');
    }
}
