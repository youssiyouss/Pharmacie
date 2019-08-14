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

Route::get('fournisseurs','FournisseurController@index');
Route::get('fournisseurs/creer','FournisseurController@create');
Route::post('fournisseurs','FournisseurController@store');
Route::get('fournisseurs/{id}/editer','FournisseurController@edit');
Route::put('fournisseurs/{id}','FournisseurController@update');
Route::delete('fournisseurs/{id}','FournisseurController@destroy');
