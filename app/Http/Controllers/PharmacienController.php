<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacien;
use App\Http\Requests\PharmaRequest;
use Illuminate\Http\UploadedFile;

class PharmacienController extends Controller
{
  //lister les pharmaciens
  public function index(){
    $x = Pharmacien::all();
    return view('Pharmaciens.index',['phar'=>$x]);

  }
  //afficher le formulaire de creation d'un pharmacien
  public function create(){
    return View('Pharmaciens.create');
  }

  // Afficher Pharmacien
  public function show($id){
    $x = Pharmacien::find($id);
    return view('Pharmaciens.detail',['phar'=> $x]);
  }

  //enregistrer un pharmacien
  public function store(PharmaRequest $request){
    $x = new Pharmacien();
    $x->nom= $request->input('nom');
    $x->prenom = $request->input('prenom');
    $x->tel = $request->input('tel');
    $x->date_nais = $request->input('date_nais');
    $x->email = $request->input('email');
    $x->login = $request->input('login');
    $x->psw = $request->input('psw');
    $x->isadmin = $request->input('isadmin');
    if($request->hasFile('photo')){ $x->photo =$request->photo->store('image'); }
      $x->save();
    session()->flash('success','Les données  ont été ajoutés avec succés!');
    return redirect('pharmaciens');
  }
  //permet de recuperer un pharmacien et le mettre dans le formulaire
  public function edit($id){
    $x = Pharmacien::find($id);
    $this->authorize('update',$x);
    return view('Pharmaciens.edit',['phar'=>$x]);
  }
  //modifier un pharmacien
  public function update(PharmaRequest $request , $id){
    $x = Pharmacien::find($id);
    $x->nom = $request->input('nom');
    $x->prenom = $request->input('prenom');
    $x->tel = $request->input('tel');
    $x->date_nais = $request->input('date_nais');
    $x->email = $request->input('email');
    $x->login = $request->input('login');
    $x->psw = $request->input('psw');
    $x->isadmin = $request->input('isadmin');
    if($request->hasFile('photo')){ $x->photo =$request->photo->store('image'); }
      $x->save();
    session()->flash('success','Les données  ont été modifiés avec succés!');
    return redirect('pharmaciens');
  }
  //supprimer un pharmacien
  public function destroy(Request $request , $id){
    $x = Pharmacien::find($id);
    $x->delete();
    return redirect('pharmaciens');
  }

}
