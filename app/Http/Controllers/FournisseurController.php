<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fournisseur;

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


    //Enregistrer un fournisseur
    public function store(Request $request){
<<<<<<< HEAD
<<<<<<< HEAD
        $x = new Fournisseur();
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
          $x->save();
=======
=======
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
        $four = new Fournisseur();
        $four->nom = $request->input('nom');
        $four->adresse = $request->input('adresse');
        $four->tel = $request->input('tel');
        $four->email = $request->input('email');
          $four->save();
<<<<<<< HEAD
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
=======
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
        return redirect('fournisseurs');
    }


    //Recuperer un fournisseur puis le metre dans le formulaire
    public function edit($id){
        $x = Fournisseur::find($id);
        return view('Fournisseurs.edit', ['frnsrs'=> $x]);
    }


    //modifier un fournisseur
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(Request $request , $id){
        $x = Fournisseur::find($id);
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
        $x->save();
      return redirect('fournisseurs');
=======
    public function update(){

>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
=======
    public function update(){

>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
    }

    //supprimer un fournisseur
    public function destroy(){

    }
}
