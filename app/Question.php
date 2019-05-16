<?php

namespace App;

use auth;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['question', 'user_id'];
}
