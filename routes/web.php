<?php
use App\Lot;
use App\User;
use App\Medicament;
use App\Fournisseur;

use Illuminate\Support\Facades\Input;
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
Route::get('medi', 'HomeController@medi')->name('medicament');
Route::get('soin', 'HomeController@soin')->name('soins&santé');
Route::get('produit', 'HomeController@produit')->name('produit');

Route::any('/search_User',function(){
    $q = Input::get ( 'search' );
    $medicaments = Medicament::where('nom','LIKE','%'.$q.'%')->orWhere('famille','LIKE','%'.$q.'%')->orWhere('forme','LIKE','%'.$q.'%')->get();
  return view('searchUser')->with(['medicaments' => $medicaments]);
});

Route::any('/search',function(){
    $q = Input::get ( 'search' );

    $users = User::where('name','LIKE','%'.$q.'%')->orWhere('prenom','LIKE','%'.$q.'%')->orWhere('login','LIKE','%'.$q.'%')->get();
    $fournisseurs = Fournisseur::where('nom','LIKE','%'.$q.'%')->orWhere('adresse','LIKE','%'.$q.'%')->get();
    $medicaments = Medicament::where('nom','LIKE','%'.$q.'%')->orWhere('famille','LIKE','%'.$q.'%')->orWhere('forme','LIKE','%'.$q.'%')->get();
    $lots = Lot::where('medoc','LIKE','%'.$q.'%')->get();

    // return view('search')->withDetails($user)->withQuery ( $q );
    return view('search')->with([
        'users' => $users,
        'fournisseurs' => $fournisseurs,
        'medicaments' => $medicaments,
        'lots' => $lots,
       ]);

});

//Gestion mediacaments
/*Route::get('medicaments','MedController@index');
Route::get('medicaments/create','MedController@create');
Route::post('medicaments','MedController@store');
Route::get('medicaments/{id}/edit','MedController@edit');
Route::put('medicaments/{id}','MedController@update');
Route::delete('medicaments/{id}','MedController@destroy');
Route::post('medicaments/{id}','MedController@show');*/
Route::resource('medicaments','MedController');
Route::get('medicaments/search','MedController@search');

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
// Route::get('pharmaciens/{id}','PharmacienController@show');
// Route::put('pharmaciens/{id}','PharmacienController@update');
// Route::delete('pharmaciens/{id}','PharmacienController@destroy');
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

//Lot Routes
Route::get('lot','LotController@index');
Route::get('lot/{id}','LotController@show');

//Notification routes
Route::get('notifread/{id}','NotifController@markAsRead');
Route::get('alerte/{id}','NotifController@displaytNotif');
Route::get('alerte','NotifController@index');

//Statistiques Routes

//Route::get('VenteMontuelle','StatistiqueController@index');
Route::get('VenteMontuelle',function(){
  //$vente=array();
      $vente= DB::table('ventes')
          ->select('lot', DB::raw('sum(qt) as produit'))
          ->groupBy('lot')
          ->get();

      return response()->json(["Test"=>$vente]);
});
