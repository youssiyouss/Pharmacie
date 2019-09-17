<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\Http\Requests\FourniRequest;

class FournisseurController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    // lister les fournisseurs
    public function index(){
      $listFournisseurs = Fournisseur::all();
      return view('Fournisseurs.index',['frnsrs'=> $listFournisseurs]);
    }

   //Affichefr un formulaire pour creer un fournisseur
    public function create(){
      return view('Fournisseurs.create');
    }

    // Afficher fournisseur
    public function show($id){
      $x = Fournisseur::find($id);
      return view('Fournisseurs.detail',['frnsrs'=> $x]);
    }

    //Enregistrer un fournisseur
    public function store(FourniRequest $request){
        $x = new Fournisseur();
        $x->nom = $request->input('nom');
        $x->adresse = $request->input('adresse');
        $x->tel = $request->input('tel');
        $x->email = $request->input('email');
          $x->save();
        session()->flash('success','Le fournisseur a été ajouter avec succés!');
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
        session()->flash('success','Le fournisseur a été modifié avec succés!');
      return redirect('fournisseurs');
    }
    //supprimer un fournisseur
    public function destroy(Request $request , $id){
        $x = Fournisseur::find($id);
        $x->delete();
      return redirect('fournisseurs');
    }
}
