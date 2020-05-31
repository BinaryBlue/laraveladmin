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

Route::get('/coderunner/{program}/{param1}/{param2}','CodeRunner@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/balance/add', 'BalanceController@add');
Route::get('/balance/withdraw', 'BalanceController@withdraw');
Route::get('/balance/balance_history', 'BalanceController@balance_history');
Route::get('/balance/withdraw_history', 'BalanceController@withdraw_history');


Route::get('/investment/add', 'InvestmentController@add');
Route::get('/investment/active', 'InvestmentController@active');


