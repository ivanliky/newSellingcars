<?php

namespace App\Http\Controllers;

use App\Car;
use App\Fuel;
use App\Type;
use App\Year;
use App\Brand;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $types = Type::all();

        $brands = Brand::pluck("name", "id");

        $fuels = Fuel::all();

        $years = Year::all();



        return view('cars.index', compact('brands', 'types', 'fuels', 'years'));
    }

    public function getModels($id)
    {
        $cars = Car::where("brand_id", $id)->pluck("name", "id");

        return json_encode($cars);
    }
}
