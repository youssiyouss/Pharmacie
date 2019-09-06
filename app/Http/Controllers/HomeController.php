<?php

namespace App\Http\Controllers;
use App\User;
use App\Medicament;
use App\Vente;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home');
    }
    public function medi()
    {
      $listeMed = Medicament::all();
      return view('medi',['medicaments' => $listeMed]);

    }
     public function produit()
    {
        return view('produit');
    }
    public function contact()
    {
        return view('contact');
    }

    public function acceuil()
    {
      return view('acceuil');

    }

  

    public function about()
    { $x = User::all();
      return view('about',['phar'=>$x]);
    }

    public function messages()
    {
      $msgs =DB::table('contact')
                ->select('nom','prenom','message','created_at')
                ->get();
       return view('home',['msg' => $msgs]);
     }

}
