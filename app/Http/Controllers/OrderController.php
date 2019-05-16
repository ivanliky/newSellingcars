<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function store()
    {

        $input = request()->all();

        $input['user_id'] = \Auth::id();

        Question::create($input);

        return redirect()->back();
    }
}
