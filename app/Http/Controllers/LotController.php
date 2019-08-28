<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use Illuminate\Support\Facades\DB;

class LotController extends Controller
{
    public function index(){
    	 $arr['lot'] = Lot::all();
        return view('Lots.index')->with($arr);
    }

    public function show($id){
    	 $vente = DB::table('Ventes')
               ->select('Ventes.*')
            ->where('Ventes.lot','=',$id)
            ->get();
            return view('Lots.display', ['vente' => $vente]);


    }
}
