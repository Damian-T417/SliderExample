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
Route::post('/slider/new', 'SliderController@new')->name('slider_add');

Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider_edit');
Route::post('/slider/edit/{id}', 'SliderController@edit')->name('slider_change');

Route::delete('/slider/delete/{id}', 'SliderController@delete')->name('slider_delete');

Auth::routes();

