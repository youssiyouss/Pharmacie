<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function VenteMontuelle(){

    return view('Statistiques.VenteMontuelle');
  }


  public function Histo(){

    return view('Statistiques.historique');
  }
}
