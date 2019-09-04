<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

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
        return view('medi');
    }
     public function soin()
    {
        return view('soin');
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

}
