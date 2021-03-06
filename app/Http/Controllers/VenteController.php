<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Vente;
use App\Http\Requests\venteRequest;
use App\Lot;
use App\Medicament;

use App\User;
use Notification;
use App\Notifications\InvoicePaid;

class VenteController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['vente'] = DB::table('Ventes')->select('Ventes.*')->paginate(20);
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

        $loti = DB::table('Achats')
             ->join('Lots', 'Achats.id', '=', 'Lots.achat')
            ->select('Lots.id')
            ->whereNull('Achats.deleted_at')
            ->get();
            return view('Ventes.create', ['lotid' => $lotid, 'loti'=>$loti ]);
        //return view('Ventes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(venteRequest $request)
    {
      $max=DB::table('lots')->where('Lots.id','=',$request->input('lot'))->first();
      if($max->qt_stock<$request->input('qt')){
          return back()->with('danger','quantitée non disponible en stock!');
      }

      else{
       $v = new Vente();

      $max= DB::table('Lots')->where('Lots.id','=',$request->input('lot'))->first();
      if ($max->qt_stock<$request->input('qt')) {
          return back()->with('danger', 'quantitée invalide!');
      }

      else{
        $v = new Vente();
       $lott =Lot::where('id', '=', $request->input('lot'))->first();
       $prix_uni = Medicament::where('id', '=', $lott->medoc)->first();


       $v->lot = $request->input('lot');
       $v->date = $request->input('date');
       $v->qt = $request->input('qt');
       $v->prix_total = $request->input('qt') * $prix_uni->prix;
       $v->save();
       $qt=$v->qt;


       //Diminuer la quatitée en stock du lot
       DB::table('Lots')->where('Lots.id','=',$v->lot)->decrement('qt_stock', $qt);


        //Send Notifications
       //Medicaments aux stocks minimum
        $medocs = DB::table('Lots')->select('Lots.*')->where('qt_stock','<=' ,50)->get();

            if ($medocs->count()  != 0) {

                $user = auth()->User()->all();
            $alerte = collect(['title'=>'Médicaments aux stocks minimum ', 'var' =>'1' ,'nombre liste' => $medocs->count(),'url'=>'achat/create']);
            Notification::send($user,new InvoicePaid($alerte));
            }
        //Stocks en rupture
            $medocz = DB::table('Lots')->select('Lots.*')->where('qt_stock','=' ,0)->get();

            if ($medocz->count()  != 0) {

                $user = auth()->User()->all();
            $alerte = collect(['title'=>'Médicaments en ruptures ', 'var' =>'2' ,'nombre liste' => $medocz->count(),'url'=>'achat/create']);
            Notification::send($user,new InvoicePaid($alerte));
            }



       //redirection
       //session()->flash('success','Vente bien effectuée!');
       return redirect('vente')->with('success', 'Vente effectuée!');
       }
      }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vente= DB::table('Ventes')
                ->select('Ventes.*')
                ->where('id','=',$id)
                ->get();
        $vent = Vente::where('id', '=', $id)->first();

        $lot = Lot::where('id', '=', $vent->lot)->first();

        $medoc = Medicament::where('id', '=', $lot->medoc)->first();

        return view('Ventes.detail',['vente' =>$vente, 'medoc' =>$medoc]);
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

         $lotid = DB::table('Lots')
            ->select('Lots.id')
            ->where('qt_stock','>','0')
            ->get();

        return view('Ventes.edit',['v'=>$v,'lotid'=>$lotid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(venteRequest $request, $id)
    {
        $vente = Vente::find($id);

        $vente->lot = $request->input('lot');
        $vente->date = $request->input('date');
        $vente->qt = $request->input('qt');
        $vente->save();

        session()->flash('success','La vente a été modifiée avec succées!');
        return redirect('vente')->with('success', 'Vente Mofifiée!');
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
        return redirect('vente')->with('danger', 'Vente Supprimée!');
    }
}
