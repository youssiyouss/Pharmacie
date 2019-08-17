<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Fournisseur;
=======
use App\Fournisseur;
use App\Http\Requests\FourniRequest;
>>>>>>> GestionPharmaciens

class FournisseurController extends Controller
{
    // lister les fournisseurs
    public function index(){
        $listFournisseurs = Fournisseur::all();
          return view('Fournisseurs.index',['frnsrs'=> $listFournisseurs]);
    }


    //Affichefr un formulaire pour creer un fournisseur
    public function create(){
        return view('Fournisseurs.create');
    }

<<<<<<< HEAD

    //Enregistrer un fournisseur
    public function store(Request $request){
=======
    //Afficher fournisseur
    public function show($id){
      $x = Fournisseur::find($id);
      return view('Fournisseurs.detail',['frnsrs'=> $x]);
    }
    //Enregistrer un fournisseur
    public function store(FourniRequest $request){
>>>>>>> GestionPharmaciens
        $x = new Fournisseur();
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
          $x->save();
<<<<<<< HEAD
=======
        session()->flash('success','Le fournisseur a été ajouter avec succés!');
>>>>>>> GestionPharmaciens
        return redirect('fournisseurs');
    }


    //Recuperer un fournisseur puis le metre dans le formulaire
    public function edit($id){
        $x = Fournisseur::find($id);
        return view('Fournisseurs.edit', ['frnsrs'=> $x]);
    }


    //modifier un fournisseur
<<<<<<< HEAD
    public function update(Request $request , $id){
=======
    public function update(FourniRequest $request , $id){
>>>>>>> GestionPharmaciens
        $x = Fournisseur::find($id);
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
        $x->save();
<<<<<<< HEAD
=======
        session()->flash('success','Le fournisseur a été modifié avec succés!');
>>>>>>> GestionPharmaciens
      return redirect('fournisseurs');
    }
    //supprimer un fournisseur
    public function destroy(Request $request , $id){
        $x = Fournisseur::find($id);
        $x->delete();
      return redirect('fournisseurs');
    }
}
