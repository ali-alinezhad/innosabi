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

Route::get('/slider/assignment', 'SliderController@index')->name('slider.assignment');


Route::get('/highlight/assignment', 'HighlightController@index')->name('highlight.assignment');


Route::get('/proxy/assignment', 'ProxyController@index')->name('proxy.assignment');
