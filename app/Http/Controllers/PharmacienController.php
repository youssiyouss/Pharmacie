<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PharmaRequest;
use Illuminate\Http\UploadedFile;

class PharmacienController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  //lister les pharmaciens
  public function index(){
     if(Auth::user()->isadmin)
       $x = User::all();
     else {
       $x = User::where('id',Auth::user()->id)->get();
     }

     return view('Pharmaciens.index',['phar'=>$x]);

  }
  //afficher le formulaire de creation d'un pharmacien
  public function create(){

    return View('Pharmaciens.create');
  }

  // Afficher Pharmacien
  public function show($id){
    $x = User::find($id);
      return view('Pharmaciens.detail',['phar'=> $x]);

  }

  //enregistrer un pharmacien
  public function store(PharmaRequest $request){
    $x = new User();
    $x->name= $request->input('name');
    $x->prenom = $request->input('prenom');
    $x->tel = $request->input('tel');
    $x->date_nais = $request->input('date_nais');
    $x->email = $request->input('email');
    $x->login = $request->input('login');
    $x->password = Hash::make($request->input('password'));
    $x->isadmin = $request->input('isadmin');
    if($request->hasFile('photo')){ $x->photo =$request->photo->store('image'); }
      $x->save();
    session()->flash('success','Les données  ont été ajoutés avec succés!');
    return redirect('pharmaciens');
  }
  //permet de recuperer un pharmacien et le mettre dans le formulaire
  public function edit($id){
    $x = User::find($id);
    $this->authorize('update',$x);
    return view('Pharmaciens.edit',['phar'=>$x]);
  }
  //modifier un pharmacien
  public function update(PharmaRequest $request , $id){
    $x = User::find($id);
    $x->name = $request->input('name');
    $x->prenom = $request->input('prenom');
    $x->tel = $request->input('tel');
    $x->date_nais = $request->input('date_nais');
    $x->email = $request->input('email');
    $x->login = $request->input('login');
    $x->password = Hash::make($request->input('password'));
    if($request->hasFile('photo')){ $x->photo =$request->photo->store('image'); }
      $x->save();
    session()->flash('success','Les données  ont été modifiés avec succés!');
    return redirect('pharmaciens');
  }
  //supprimer un pharmacien
  public function destroy(Request $request , $id){
    $x = User::find($id);
    $this->authorize('delete',$x);
    $x->delete();
    return redirect('pharmaciens');
  }

}
