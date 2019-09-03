<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }


  public function histoMois(){

    return view('Statistiques.historiqueMensuelle');
  }


  public function histoAnnee(){

    return view('Statistiques.historiqueAnnuelle');
  }
}
