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

//Route::get('register','Auth\RegisterController@create');
Route::resource('pharmaciens','PharmacienController');

//vente routes
Route::get('vente','VenteController@index');
Route::get('vente/create','VenteController@create');
Route::post('vente','VenteController@store');
Route::delete('vente/{id}','VenteController@destroy');
Route::get('vente/{id}/edit','VenteController@edit');
Route::put('vente/{id}','VenteController@update');
//Achat Route
Route::get('achat','AchatController@index');
Route::get('achat/create','AchatController@create');
Route::post('achat','AchatController@store');
Route::get('achat/{id}/edit','AchatController@edit');
Route::put('achat/{id}','AchatController@update');
Route::delete('achat/{id}','AchatController@destroy');
Route::get('achat/{id}/detail','AchatController@show');
