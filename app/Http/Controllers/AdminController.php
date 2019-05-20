<?php

namespace App\Http\Controllers;

use App\Car;
use App\Fuel;
use App\Type;
use App\Brand;
use App\Country;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $types = Type::all();
      $Allbrands = Brand::all();
      $brands = Brand::pluck("name", "id");

      $countries = Country::all();
      $fuels = Fuel::all();
      $cars = Car::all();

      return view('admin.create', compact('types', 'Allbrands', 'countries', 'fuels', 'cars', 'brands'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $brand = Brand::findOrFail($request->brand);

        $type = Type::findOrFail($request->type);

        $brand->cars()->create(['name' => $request->model,
                                'power' => $request->power ,
                                'doors' => $request->doors ,
                                'type_id' => $type->id ,
                                'seats' => $request->seats]);

    }

    public function getModels($id)
    {

        $cars = Car::where("brand_id", $id)->pluck("name", "id");

        return json_encode($cars);
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
