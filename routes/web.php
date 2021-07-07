<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadFile;
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

Route::get('/',"\App\Http\Controllers\MainController@index");
Route::get('/about',"\App\Http\Controllers\MainController@about");
Route::get('/login', "\App\Http\Controllers\MainController@login");
Route::post('/checklogin', '\App\Http\Controllers\UserAuth@checklogin');
Route::get('/home', '\App\Http\Controllers\MainController@home');
Route::get('/logout', '\App\Http\Controllers\MainController@logout');

Route::get('jumo_values', [DownloadFile::class,'getData']);

