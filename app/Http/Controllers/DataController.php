<?php

namespace App\Http\Controllers;

use App\Car;
use App\Fuel;
use App\Type;
use App\Year;
use App\Brand;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchForm;

class DataController extends Controller
{
    public function index()
    {
        $types = Type::all();

        $brands = Brand::pluck("name", "id");

        $fuels = Fuel::all();

        $years = Year::all();

        $sellCars = Registration::paginate(12);

        return view('cars.index', compact('brands', 'types', 'fuels', 'years', 'sellCars'));
    }



    public function show()
    {
        return view('cars.searchResults');
    }


    public function getModels($id)
    {
        $cars = Car::where("brand_id", $id)->pluck("name", "id");

        return json_encode($cars);
    }

    public function getSearch(SearchForm $request)
    {


        $brand = Brand::findOrFail($request->brand);

        $model = Car::findOrFail($request->car);

        $from = Year::findOrFail($request->from);

        $to = Year::findOrFail($request->to);

        $fuel = Fuel::findOrFail($request->fuel);

        $type = Type::findOrFail($request->type);

        $price_from = $request->price_from;

        $price_to = $request->price_to;


        $search = DB::select(

            "select brands.name as brand ,

            concat(owners.first_name ,' ', owners.last_name) as owner ,

            owners.mobile_phone as mobile ,

            registrations.car_photo as photo ,

            registrations.price as price ,

            registrations.kilometers as kilometers ,

            registrations.registered_to as registration ,

            registrations.air_condition as air_condition ,

            registrations.price as price ,

            registrations.created_at as published ,

            colors.name as color ,

            cars.power as power ,

            cars.name as model ,

            cars.seats as seats ,

            cars.doors as doors ,

            years.year as year ,

            fuels.name as fuel ,

            types.name as type

            from brands

            join

            cars on brands.id = cars.brand_id

            join

            registrations ON cars.id = registrations.car_id

            join

            types on types.id = cars.type_id join fuels on fuels.id = registrations.fuel_id

            join

            years on years.id = registrations.year_id

            join

            colors on colors.id = registrations.color_id

            join

            owners on owners.id = registrations.owner_id

            WHERE

            brands.name =  ?

            AND

            cars.name =  ?

            AND

            (years.year  >= ? AND years.year <= ?)

            AND

            (registrations.price >= ? AND registrations.price <= ?)

            AND

            fuels.name   = ?

            AND

            types.name   = ?",

            [$brand->name, $model->name, $from->year, $to->year, $price_from, $price_to,  $fuel->name, $type->name]
        );


        return view('cars.searchResults', compact('search'));
    }
}
