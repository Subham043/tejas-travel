<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListLayout extends Model
{
    use HasFactory;
    protected $table="listlayout";

    public function ListLayoutList()
    {
        return $this->hasMany('App\Models\ListLayoutList', 'listlayout_id');
    }
}
