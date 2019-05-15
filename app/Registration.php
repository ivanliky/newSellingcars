<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
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
