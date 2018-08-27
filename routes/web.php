<?php

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

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@store');
Route::post('/addpoints', 'HomeController@addPoints')->name('addpoints');
Route::get('/home/{id}', 'HomeController@edit');
Route::patch('/home/{id}', 'HomeController@update');
Route::delete('/home/{id}', 'HomeController@destroy');
Route::post('/pdf', 'HomeController@pdf')->name('pdfusers');
