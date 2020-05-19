<?php

use Illuminate\Support\Facades\Route;

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
    #return view('welcome');
    #return view('hello');
    return redirect(route('login'));
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/patient/create', 'PatientController@create');
Route::get('/patient/all', 'PatientController@all');
Route::get('/patient/id/1', 'PatientController@single');

Route::get('/doctor/create', 'DoctorController@create');
Route::get('/doctor/all', 'DoctorController@all');
Route::get('/doctor/id/1', 'DoctorController@single');


