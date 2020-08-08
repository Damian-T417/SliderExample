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

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');

//Slider Routes
Route::get('/slider', 'SliderController@view')->name('slider_view');
Route::get('/slider/new', 'SliderController@new')->name('slider_new');
Route::post('/slider/add', 'SliderController@add')->name('slider_add');

Auth::routes();

