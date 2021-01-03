<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;


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

Route::get('/', function () {
    return view('welcome');
});
// ::post, ::put, ::patch, ::delete
//duza verzija
    //Route::get('countries', 'CountryController@index');
    //Route::post('countries', 'CountryController@store');
    //Route::put('countries', 'CountryController@index');

//skraceno
Route::resource('countries', CountryController::class);
Route::resource('roles', RoleController::class);

