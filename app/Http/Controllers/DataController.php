<?php

namespace App\Http\Controllers;

use App\Car;
use App\Type;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        $types = Type::all();

        $brands = Brand::pluck("name", "id");

        return view('cars.index', compact('brands', 'types'));
    }

    public function getModels($id)
    {
        $cars = Car::where("brand_id", $id)->pluck("name", "id");

        return json_encode($cars);
    }
}
