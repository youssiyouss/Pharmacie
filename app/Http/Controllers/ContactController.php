<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Contact;
use Mail;
use App\mail\sendMail;
use App\Send;

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
       Contact::create($request->all());
       return back()->with('success', 'Message envoyé!');

    }

    //Display the listes of the received messages
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
