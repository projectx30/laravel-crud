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

Route::get('warga','App\Http\Controllers\WargaController@index');
Route::post('warga/create','App\Http\Controllers\WargaController@create');
Route::get('warga/{id}/edit','App\Http\Controllers\WargaController@edit');
Route::post('warga/{id}/update','App\Http\Controllers\WargaController@update');
Route::get('warga/{id}/delete','App\Http\Controllers\WargaController@delete');