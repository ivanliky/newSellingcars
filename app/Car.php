<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [

        'name' , 'power' , 'doors' , 'brand_id' , 'type_id' , 'seats'

    ];


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
