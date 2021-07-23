<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShowCustomersController;
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

Route::get('/customers', ShowCustomersController::class);

//Route::get('/services', 'App\Http\Controllers\ServiceController@index');
//Route::get('/services/create', 'App\Http\Controllers\ServiceController@create');
//Route::post('/services', 'App\Http\Controllers\ServiceController@store');
//Route::get('/services/{service}', 'App\Http\Controllers\ServiceController@show');
//Route::get('/services/{service}/edit', 'App\Http\Controllers\ServiceController@edit');
//Route::put('/services/{service}', 'App\Http\Controllers\ServiceController@update');
//Route::delete('/services/{service}', 'App\Http\Controllers\ServiceController@destroy');

Route::resource('services', ServiceController::class);




