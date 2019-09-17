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

    public function contact()
    {
        return view('contact');
    }

    public function acceuil()
    {
      return view('acceuil');

    }

    public function about()
    {
       $x = User::all();
      return view('about',['phar'=>$x]);
    }

    public function messages()
    {
      $msgs =DB::table('contact')
                ->select('nom','prenom','message','created_at')
                ->paginate(5);
      $x=DB::select("SELECT M.nom,M.prix,V.lot ,SUM(V.qt) AS qt,(L.qt_stock*L.nbr_medoc_lot) AS qnt_total,(qt*100/(L.qt_stock*L.nbr_medoc_lot)) pourc
                     FROM `ventes` V,`lots` L,`medicaments` M
                     WHERE V.lot=L.id
                     AND L.medoc=M.id
                     GROUP BY V.lot,pourc,M.nom,M.prix,L.qt_stock,qt
                     ORDER BY SUM(V.qt) DESC
                     LIMIT 0,10");

       return view('home',['msg' => $msgs ,'top' => $x ]);
    }

    public function detail($id)
    {
      $medicament = Medicament::find($id);
      return view('detail',['medicament'=>$medicament]);

    }


}
