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

//Gestion fournisseurs
// Route::get('fournisseurs/{id}','FournisseurController@show');
// Route::get('fournisseurs','FournisseurController@index');
// Route::get('fournisseurs/create','FournisseurController@create');
// Route::post('fournisseurs','FournisseurController@store');
// Route::get('fournisseurs/{id}/edit','FournisseurController@edit');
// Route::get('fournisseurs/{id}/show','FournisseurController@show');
// Route::put('fournisseurs/{id}','FournisseurController@update');
// Route::delete('fournisseurs/{id}','FournisseurController@destroy');
Route::resource('fournisseurs','FournisseurController');

//Gestion pharmaciens
// Route::get('pharmaciens','PharmacienController@index');
// Route::get('pharmaciens/create','PharmacienController@create');
// Route::post('pharmaciens','PharmacienController@store');
// Route::get('pharmaciens/{id}/edit','PharmacienController@edit');
// Route::get('pharmaciens/{id}/show','PharmacienController@show');
// Route::put('pharmaciens/{id}','PharmacienController@update');
// Route::delete('pharmaciens/{id}','PharmacienController@destroy');
Route::get('register','Auth\RegisterController@create');
Route::resource('pharmaciens','PharmacienController');
