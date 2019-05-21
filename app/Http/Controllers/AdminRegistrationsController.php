<?php

namespace App\Http\Controllers;

use App\Car;
use App\Fuel;
use App\Type;
use App\Brand;
use App\Owner;
use App\Registration;
use Illuminate\Http\Request;

class AdminRegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $brand = Brand::findOrFail($request->brand);
        // $model = Car::findOrFail($request->car);
        // $type = Type::findOrFail($request->type);
        // $price = $request->price;
        // $color = $request->color;
        // $fuel = Fuel::findOrFail($request->fuel);
        // $yearOfManufacture = $request->manufactured;
        // $kilometers = $request->kilometers;
        // $photo = '';
        // $registered_to = $request->registered;
        // $health = $request->health;
        // $aircondition = $request->air;
        // $triangle = $request->triangle;
        // $extraWheels = $request->e_wheels;
        // $o_fname = $request->o_fname;
        // $o_lname = $request->o_fname;
        // $address = '';
        // $m_phone = $request->m_phone;
        // $h_phone = $request->m_phone;
        // $email = $request->email;

        // $car = Car::findOrFail($brand->id);
        // $car['power'] = $request->power;
        // $car = $car->toArray();

        // Car::create($car);


         $request['car_id'] = $request->car;

         $owner = Owner::create($request->all());

         $request['owner_id'] = $owner->id;

         $file = $request->file('car_photo');

         $name = time() . $file->getClientOriginalName();

         $input = $request->all();

         $input['car_photo'] = $name;

         $file->move('images/sellCars', $name);

         Registration::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
