<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $fillable = [

        'car_id' , 'owner_id' , 'fuel_id' , 'year_id' , 'air_condition' ,
        'wheels_number' , 'first_health' , 'triangle' , 'color' , 'kilometers' ,
        'registered_to' , 'car_photo' , 'price'

    ];

    public function car()
    {

        return $this->belongsTo('App\Car');
    }

    public function owner()
    {

        return $this->belongsTo(Owner::class);
    }

    public function color()
    {

        return $this->belongsTo(Color::class);
    }

    public function fuel()
    {

        return $this->belongsTo(Fuel::class);
    }

    public function year()
    {

        return $this->belongsTo(Year::class);
    }
}
