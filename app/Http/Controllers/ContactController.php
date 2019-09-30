<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Contact;
use Mail;
use App\mail\sendMail;
use App\Send;
use App\Vente;
use App\Medicament;

class ContactController extends Controller
{
    //Send a message from the contact form to database
    public function contactPost(Request $request){

    	$this->validate($request, [
        'nom' => 'required',
        'prenom' => 'required',
        'tel' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       // Contact::create($request->all());
           $x = new Contact();
           $x->nom = $request->input('nom');
           $x->prenom = $request->input('prenom');
           $x->tel = $request->input('tel');
           $x->email = $request->input('email');
           $x->message = $request->input('message');
           $x->temoin = $request->input('temoin');
             $x->save();
             return back()->with('success', 'Message envoyé!');

    }
    public function temoignages(){
      $msgs =DB::table('contact')
                ->select('nom','prenom','temoin','created_at')
                ->get();
      $m=DB::select("SELECT M.id,M.nom,M.photo,M.prix,V.lot ,SUM(V.qt) AS qt
                     FROM ventes V,lots L,medicaments M
                     WHERE V.lot=L.id
                     AND L.medoc=M.id
                     GROUP BY V.lot,M.id,M.nom,M.photo,M.prix
                     ORDER BY SUM(V.qt) DESC
                     LIMIT 0,6");
      $n=DB::select("SELECT M.id, M.nom, M.photo, M.prix, L.created_at
                      FROM lots L,medicaments M
                      WHERE L.medoc=M.id
                      AND L.medoc=M.id
                      ORDER BY L.created_at DESC
                      LIMIT 0,7");
       return view('acceuil',['tst' => $msgs ,'top'=>$m , 'new'=>$n]);

    }

    public function message(){

    		$msg = DB::table('contact')
    					->select('contact.*')
                        ->whereNull('deleted_at')
    					->paginate(20);

    	    $reads = DB::table('contact')
                    ->where([['read_at', '<>', NULL],['deleted_at', '=', NULL],])
                    ->get();

            $trash = DB::table('contact')
                        ->select('contact.*')
                        ->whereNotNull('deleted_at')
                        ->get();

            $send = DB::table('Sends')->select('Sends.*')->count();

            $customer= DB::table('contact')
                ->inRandomOrder()
                ->paginate(6);

    	return view('Messages.msgListe',['msg'=>$msg, 'reads'=>$reads, 'trash'=>$trash, 'send'=>$send,'customer'=>$customer]);

    }

    //Display the choosen message by ID
    public function display($id){
    	$content = DB::table('contact')
            ->where('id', $id)
            ->get();



        $read = Contact::find($id);

            if ($read->read_at == NULL) {
              DB::table('contact')
            ->where('id', $id)
            ->update(['read_at' => now()]);

            }

        $reads = DB::table('contact')
                    ->where([['read_at', '<>', NULL],['deleted_at', '=', NULL],])
                    ->get();

        $trash = DB::table('contact')
                        ->select('contact.*')
                        ->whereNotNull('deleted_at')
                        ->get();

        $send = DB::table('Sends')->select('Sends.*')->count();

        $customer= DB::table('contact')
                ->inRandomOrder()
                ->paginate(6);



    	return view('Messages.displaymsg', ['content' => $content, 'reads' => $reads, 'trash' => $trash, 'send' => $send,'customer' => $customer]);
    }


    //Delete a message define by his Id
    public function destroy($id)
    {
        $a = Contact::find($id);
        $a->delete();

        return redirect('messages')->with('delete', 'Message supprimé!');;
    }

    //Return the email compose
    public function email(){

        $reads = DB::table('contact')
                    ->where([['read_at', '<>', NULL],['deleted_at', '=', NULL],])
                    ->get();

        $trash = DB::table('contact')
                        ->select('contact.*')
                        ->whereNotNull('deleted_at')
                        ->get();

        $send = DB::table('Sends')->select('Sends.*')->count();

        $customer= DB::table('contact')
                ->inRandomOrder()
                ->paginate(6);

        return view('Messages.sendMail',['reads'=>$reads, 'trash'=>$trash, 'send'=>$send,'customer'=>$customer]);
    }


    //Send email submited & store on Sends table
    public function send(Request $request){

        Mail::send(new sendMail());

        //store on Sends table
        $send = new Send();
        $send->to = $request->input('to');
        $send->subject = $request->input('sub');
        $send->message = $request->input('message');
        $send->day_sended = now();
        $send->time_sended= now();
        $send->save();

        return redirect('messages')->with('success', 'Message Envoyée');

    }





}
