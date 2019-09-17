<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Achat;
use App\Lot;
use App\Medicament;
use App\Http\Requests\achatRequest;

class AchatController extends Controller
{
      public function __construct(){
        $this->middleware('auth');
      }


      public function ListeAchat($id){
        $achats = DB::table('achats')
            ->select('achats.*')
            ->where('achats.fournisseur','=',$id)
            ->get();

        return view('Fournisseurs.listAchat')->with(['achat' => $achats]);
      }

      public function ListeDetail($id){
        $achat = DB::table('Achats')
            ->join('Fournisseurs', 'fournisseur', '=', 'Fournisseurs.id')
             ->join('Lots', 'Achats.id', '=', 'Lots.achat')
            ->select('Achats.*','Fournisseurs.nom','Fournisseurs.adresse','Fournisseurs.tel','Fournisseurs.email','Lots.id','Lots.medoc','Lots.date_fab','Lots.prix','Lots.qt_stock','Lots.nbr_medoc_lot','Lots.date_per')
            ->where('Achats.id','=',$id)
            ->get();
        return view('Fournisseurs.listDetail')->with(['achat' => $achat]);
      }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['achat'] = Achat::all();
        return view('Achats.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $four = DB::table('Fournisseurs')
            ->select('Fournisseurs.*')
            ->where('deleted_at','=',NULL)
            ->get();
          $med = DB::table('Medicaments')
            ->select('Medicaments.nom')
            ->get();
            return view('Achats.create', ['four' => $four, 'med' => $med]);
        //return view('Achats.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(achatRequest $request)
    {
        $ach = new Achat();
        $ach->date = now();
        $ach->fournisseur = $request->input('numf');
        $ach->qt_achat = $request->input('qtachat');
        $ach->save();
        $id = $ach->id;
        $medi = Medicament::where('nom', '=', $request->input('med'))->first();

        $lot = new Lot();
        $lot->medoc = $medi->id;
        $lot->achat = $id;
        $lot->nbr_medoc_lot = $request->input('indiv');
        $lot->date_fab = $request->input('datefab');
        $lot->date_per = $request->input('dateper');
        $lot->prix = $request->input('prix');
        $lot->qt_stock = $request->input('qtachat')* $request->input('indiv');
        $lot->save();

        return redirect('achat')->with('success', 'Achat effectué!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $achat = DB::table('Achats')
            ->join('Fournisseurs', 'fournisseur', '=', 'Fournisseurs.id')
             ->join('Lots', 'Achats.id', '=', 'Lots.achat')
            ->select('Achats.*', 'Fournisseurs.nom','Fournisseurs.adresse','Fournisseurs.tel','Fournisseurs.email','Lots.id','Lots.date_fab','Lots.prix','Lots.qt_stock','Lots.nbr_medoc_lot','Lots.date_per')
            ->where('Achats.id','=',$id)
            ->get();
            return view('Achats.detail', ['achat' => $achat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Achat::find($id);

        $lots = DB::table('Lots')
               ->select('Lots.*')
               ->where('achat','=',$id)
               ->get();

        $fournis = DB::table('Fournisseurs')
               ->select('Fournisseurs.id')
               ->get();
        $med = DB::table('Medicaments')
               ->select('Medicaments.nom')
               ->get();
        $this->authorize('update',$a);
        return view('Achats.edit',['a'=>$a, 'lots'=>$lots, 'fournis'=>$fournis, 'med'=>$med]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(achatRequest $request, $id)
    {
        $ach = Achat::find($id);
        $ach->date = now();
        $ach->fournisseur = $request->input('numf');
        $ach->qt_achat = $request->input('qtachat');
        $ach->save();

        $qt_stock = $request->input('qtachat')* $request->input('indiv');

        $lot =DB::table('Lots')
              ->where('achat', $id)
              ->update(['medoc' => $request->input('med'), 'nbr_medoc_lot' => $request->input('indiv'),
              'date_fab' => $request->input('datefab'),'date_per' => $request->input('dateper'),'prix' => $request->input('prix'),
              'qt_stock' => $qt_stock ]);

        return redirect('achat')->with('success', 'Achat modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Achat::find($id);
        $this->authorize('delete',$a);

        $a->delete();

        $l = DB::table('Lots')
            ->select('Lots.*')
            ->where('Lots.id','=',$id)
            ->delete();


        return redirect('achat')->with('danger', 'Achat Supprimé!');
    }
}
