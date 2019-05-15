<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function registrations()
    {

        return $this->hasMany(Registration::class);
    }
}
