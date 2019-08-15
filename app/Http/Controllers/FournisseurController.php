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
        $x = new Fournisseur();
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
          $x->save();
        return redirect('fournisseurs');
    }


    //Recuperer un fournisseur puis le metre dans le formulaire
    public function edit($id){
        $x = Fournisseur::find($id);
        return view('Fournisseurs.edit', ['frnsrs'=> $x]);
    }


    //modifier un fournisseur
    public function update(Request $request , $id){
        $x = Fournisseur::find($id);
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
        $x->save();
      return redirect('fournisseurs');
    }

    //supprimer un fournisseur
    public function destroy(){

    }
}
