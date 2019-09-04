<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    public function contactPost(Request $request){

    	$this->validate($request, [
        'nom' => 'required',
        'prenom' => 'required',
        'tel' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
       Contact::create($request->all());
       return back()->with('success', 'Message envoyé!');

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

    	return view('Messages.msgListe',['msg'=>$msg, 'reads'=>$reads, 'trash'=>$trash]);
    	
    }

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

    	

    	return view('Messages.displaymsg', ['content' => $content]);
    }

     public function destroy($id)
    {
        $a = Contact::find($id);
        $a->delete();
        
        return redirect('messages')->with('delete', 'Message supprimé!');;
    }
}