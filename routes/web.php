<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::get('/home' , 'App\Http\Controllers\HomeController@home')->name('home');
Route::get('/about' , 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/contact' , 'App\Http\Controllers\HomeController@contact')->name('contact');

Route::resource('/posts' , 'App\Http\Controllers\PostController');


