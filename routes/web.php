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
Route::get('/users','HomeController@users')->name('users');

// Route::get('fournisseurs/{id}','FournisseurController@show');
Route::get('fournisseurs','FournisseurController@index');
Route::get('fournisseurs/create','FournisseurController@create');
Route::post('fournisseurs','FournisseurController@store');
Route::get('fournisseurs/{id}/edit','FournisseurController@edit');
Route::put('fournisseurs/{id}','FournisseurController@update');
Route::delete('fournisseurs/{id}','FournisseurController@destroy');

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