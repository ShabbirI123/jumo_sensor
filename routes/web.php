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
Route::get('/about', function () {
    return view('about');
});
/*Route::get('/login', function () {
    return view('login');
});*/
Route::get('/',"\App\Http\Controllers\MainController@index");
Route::get('/about',"\App\Http\Controllers\MainController@index");
Route::get('/login', "\App\Http\Controllers\MainController@login");
Route::post('/checklogin', '\App\Http\Controllers\MainController@checklogin');
Route::get('/successlogin', '\App\Http\Controllers\MainController@successlogin');
Route::get('/logout', '\App\Http\Controllers\MainController@logout');


