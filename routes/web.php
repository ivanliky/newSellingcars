<?php
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('data');
    });
});

Route::get('dropdownlist/brands/{id}', 'DataController@getModels');

Route::get('admin/dropdownlist/brands/{id}', 'AdminController@getModels');

Route::get('/search', 'DataController@getSearch');

Route::resource('admin', 'AdminController')->middleware('auth');

Route::resource('registration', 'AdminRegistrationsController')->middleware('auth');

Route::resource('/data', 'DataController')->middleware('auth');

Route::resource('find', 'CarsController')->middleware('auth');

Route::resource('ask', 'OrderController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
