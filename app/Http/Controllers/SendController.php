<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Contact;
use Mail;
use App\mail\sendMail;
use App\Send;

class SendController extends Controller
{
    //Return view of sended messages 
    public function sendIndex(){

        $msg= DB::table('Sends')->select('Sends.*')->paginate(20);

        $reads = DB::table('contact')
                    ->where([['read_at', '<>', NULL],['deleted_at', '=', NULL],])
                    ->get();

        $trash = DB::table('contact')
                        ->select('contact.*')
                        ->whereNotNull('deleted_at')
                        ->get();

        $customer= DB::table('contact')
                ->inRandomOrder()
                ->paginate(6);

        return view('Messages.sendBox',['msg'=>$msg, 'reads'=>$reads, 'trash'=>$trash, 'customer'=>$customer]);
    }
    
    //Display sended message define by ID
    public function display($id){
    	$content = DB::table('Sends')
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

    	

    	return view('Messages.displaySendMsg', ['content' => $content, 'reads' => $reads, 'trash' => $trash, 'send' => $send,'customer' => $customer]);
    }


    //Delete a sended message define by his Id
    public function destroy($id)
    {
        $a = Send::find($id);
        $a->delete();
        
        return redirect('messages')->with('delete', 'Message supprimé!');;
    }
}
