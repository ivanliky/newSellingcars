<?php

namespace App\Http\Controllers;

use App\Question;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{


    public function store(Request $request)
    {


        $this->validate($request, [

            'question' => 'required|max:2000'

        ]);

        $input = $request->all();

        $input['user_id'] = \Auth::id();

        Mail::to('ivanmitic@gmail.com')->send(new ContactForm($request));

        Question::create($input);



        return redirect()->back();
    }
}
