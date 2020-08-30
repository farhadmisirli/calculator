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
    return view('welcome');
});

Route::get('calculate/formula1', 'CalculateController@formula1');
Route::get('calculate/formula2', 'CalculateController@formula2');
Route::get('calculate/formula3', 'CalculateController@formula3');
Route::get('calculate/formula4', 'CalculateController@formula4');
Route::get('calculate/formula5', 'CalculateController@formula5');
Route::get('calculate/formula6', 'CalculateController@formula6');
Route::get('calculate/formula7', 'CalculateController@formula7');

Route::get('calculate/formula10', 'CalculateController@formula10');
Route::get('calculate/formula11', 'CalculateController@formula11');
Route::get('calculate/formula12', 'CalculateController@formula12');
Route::get('calculate/formula13', 'CalculateController@formula13');

