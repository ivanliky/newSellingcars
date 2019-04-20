<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brand()
    {

        return $this->belongsTo('App\Brand');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function registration()
    {

        return $this->hasMany('App\Registration');
    }
}
