<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getBrands()
    {
        $brands = DB::table('brands')->pluck("name", "id");
        return view('cars.index', compact('brands'));
    }

    public function getModels($id)
    {
        $cars = DB::table("cars")->where("brand_id", $id)->pluck("name", "id");
        return json_encode($cars);
    }
}
