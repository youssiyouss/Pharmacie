<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Vente;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['vente'] = Vente::all();
        return view('Ventes.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $lotid = DB::table('Lots')
            ->select('Lots.id')
            ->where('qt_stock','>','0')
            ->get();
            return view('Ventes.create', ['lotid' => $lotid]);
        //return view('Ventes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $v = new Vente();

       $v->lot = $request->input('lot');
       $v->date = $request->input('date');
       $v->qt = $request->input('qt');
       $v->save();
       $qt=$v->qt;

       //Diminuer la quatitée en stock du lot
       DB::table('Lots')->decrement('qt_stock', $qt);
       //redirection
       session()->flash('success','Le fournisseur a été ajouter avec succés!');
       return redirect('vente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $v = Vente::find($id);
        return view('Ventes.edit',['v'=>$v]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vente = Vente::find($id);

        $vente->lot = $request->input('lot');
        $vente->date = $request->input('date');
        $vente->qt = $request->input('qt');
        $vente->save();

        return redirect('vente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $v = Vente::find($id);
        $v->delete();
        return redirect('vente');
    }
}
