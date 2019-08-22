<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Achat;
use App\Lot;
use App\Http\Requests\achatRequest;

class AchatController extends Controller
{
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
            return view('Achats.create', ['four' => $four]);
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
        $ach->date = $request->input('date');
        $ach->fournisseur = $request->input('numf');
        $ach->qt_achat = $request->input('qtachat');
        $ach->save();
        $id = $ach->id;
        $lot = new Lot();
        $lot->medoc = $request->input('med');
        $lot->achat = $id;
        $lot->date_fab = $request->input('datefab');
        $lot->prix = $request->input('prix');
        $lot->qt_stock = $request->input('qtachat');
        $lot->save();




        return redirect('achat');

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
            ->select('Achats.*', 'Fournisseurs.nom','Fournisseurs.adresse','Fournisseurs.tel','Fournisseurs.email')
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
        return view('Achats.edit',['a'=>$a]);
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
        $a = new Achat();
        $a->date = $request->input('date');
        $a->fournisseur = $request->input('numf');
        $a->save();

        return redirect('achat');
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
        $a->delete();

        return redirect('achat');
    }
}
