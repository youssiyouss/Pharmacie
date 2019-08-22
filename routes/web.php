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

/*Route::get('medicaments','MedController@index');
Route::get('medicaments/create','MedController@create');
Route::post('medicaments','MedController@store');
Route::get('medicaments/{id}/edit','MedController@edit');
Route::put('medicaments/{id}','MedController@update');
Route::delete('medicaments/{id}','MedController@destroy');
Route::post('medicaments/{id}','MedController@show');*/
Route::resource('medicaments','MedController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
