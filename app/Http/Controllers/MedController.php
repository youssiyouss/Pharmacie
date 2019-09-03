<?php

namespace App\Http\Controllers;
use auth;
use Illuminate\Http\Request;
use App\Medicament;
use App\Http\Requests\medRequest;
use Illuminate\Http\UploadedFile;
class MedController extends Controller
{

    //lister les medicament
   public function index(){
    	//$listeMed = medicament::where('user_id',auth::user()->id)->get();
    	$listeMed = Medicament::all();
    	return view('medicament.index',['medicaments' => $listeMed]);

    }
    //afficherle formulaire de creation des medicament
    public function create(){
    	return view('medicament.create');
    }
    //enregistrer un medicament
    public function store(medRequest $request){
    $medicament = new Medicament();
    $medicament->nom = $request->input('nom');
    $medicament->prix = $request->input('prix');
    $medicament->dosage = $request->input('dosage');
    $medicament->forme = $request->input('forme');
    $medicament->famille = $request->input('famille');
    $medicament->resume = $request->input('resume');
    $medicament->mode = $request->input('mode');
    $medicament->composition = $request->input('composition');
    $medicament->plus = $request->input('plus');

    //$medicament->user_id = auth::user()->id;

   if($request->hasFile('photo')){
    	 $medicament->photo = $request->photo->store('image');

    }

    $medicament->save();

    session()->flash('success', 'le medicament a bien ete entrer');

    return redirect('medicaments');
    	}
    //recuperer un medicament puis l'inserer dans un formulaire
    public function edit($id){

    	$medicament = Medicament::find($id);
    	return view('medicament.edit',['medicament' => $medicament]);

    }
    //modifier un medicament
    public function update(medRequest $request, $id){

    	$medicament = Medicament::find($id);

    	$medicament->nom = $request->input('nom');
      $medicament->prix = $request->input('prix');
    	$medicament->dosage = $request->input('dosage');
    	$medicament->forme = $request->input('forme');
    	$medicament->famille = $request->input('famille');
      $medicament->resume = $request->input('resume');
    	$medicament->mode = $request->input('mode');
    	$medicament->composition = $request->input('composition');
    	$medicament->plus = $request->input('plus');

			if($request->hasFile('photo')){
    	 	$medicament->photo = $request->photo->store('image');
			}
			$medicament->save();
    	session()->flash('success', 'la modification a bien ete effectuer');
    	return redirect('medicaments');

    }

    //afficher les details de chaque medicament
    public function show( $id){
        $x = Medicament::find($id);
    	return view('medicament.show',['medicament' => $x]);
		}
		
    //supprimer un medicament
    public function destroy(Request $request, $id){

    	$medicament = Medicament::find($id);
    	$medicament->delete();
    	session()->flash('success', 'le medicament est supprimer de la liste');
    	return redirect('medicaments');

    }
}
