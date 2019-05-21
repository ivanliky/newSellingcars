<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    protected $fillable = [

        'first_name', 'last_name', 'address', 'mobile_phone' , 'home_phone' , 'email'

    ];

    public function registrations()
    {

        return $this->hasMany(Registration::class);
    }
}
