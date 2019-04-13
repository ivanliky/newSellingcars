<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $fillable = ['name', 'logo', 'country_id'];

    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
