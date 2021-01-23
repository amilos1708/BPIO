<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\VehicleMovementController;
use App\Http\Controllers\VehicleRegistrationController;


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
Route::resource('countries', 'CountryController');
Route::resource('roles', 'RoleController');
Route::resource('companies', 'CompanyController');
Route::resource('sexes', 'SexController');
Route::resource('users', 'UserController');
Route::resource('vehicles', 'VehicleController');
Route::resource('vehicle_movements', 'VehicleMovementController');
Route::resource('vehicle_registrations', 'VehicleRegistrationController');
Route::resource('purposes', 'PurposeController');



//Route::resource('roles', RoleController::class);

