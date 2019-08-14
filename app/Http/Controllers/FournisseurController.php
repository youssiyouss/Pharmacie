<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fournisseur;

class FournisseurController extends Controller
{
    // lister les fournisseurs
    public function index(){

    }
    //Affichefr un formulaire pour creer un fournisseur
    public function create(){
        return view('Fournisseurs.create');
    }
    //Enregistrer un fournisseur
    public function store(Request $request){
        $four = new Fournisseur();
        $four->nom = $request->input('nom');
        $four->adresse = $request->input('adresse');
        $four->tel = $request->input('tel');
        $four->email = $request->input('email');
        $four->save();
    }
    //Recuperer un fournisseur puis le metre dans le formulaire
    public function edit(){

    }
    //modifier un fournisseur
    public function update(){

    }

    //supprimer un fournisseur
    public function destroy(){

    }
}
