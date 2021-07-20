<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function () {return "public test";});

Route::get('/customers', 'App\Http\Controllers\ShowCustomersController');

//Route::get('/services', 'ServicesController@index');
//Route::get('/services/create', 'ServicesController@create');
//Route::post('/services', 'ServicesController@store');
//Route::get('/services/{service}', 'ServicesController@show');
//Route::get('/services/{service}/edit', 'ServicesController@edit');
//Route::put('/services/{service}', 'ServicesController@update');
//Route::delete('/services/{service}', 'ServicesController@destroy');

Route::resource('services', 'App\Http\Controllers\ServicesController');




