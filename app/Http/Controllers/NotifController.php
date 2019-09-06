<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Notification;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\DB;

class NotifController extends Controller
{
	//Marke as read a notification
    public function markAsRead($id){
    	$url=auth()->user()->notifications->find($id);
    	if ($url->read_at == NULL) {
    		auth()->user()->unreadNotifications->find($id)->markAsRead();
    	}
    	
    	
    	
    	return redirect('alerte/'.$id);

    }


    //Display notification details
    public function displaytNotif($id){
    	$url=auth()->user()->readNotifications->find($id);
    	if (($url->data['alerte']['var']) == '1') {
    		$medi=DB::table('Lots')->select('Lots.*')->where('qt_stock','<' ,50)->get();
    	}

    	if (($url->data['alerte']['var']) == '2') {
    		$medi=DB::table('Lots')->select('Lots.*')->where('qt_stock','=' ,0)->get();
    	}
        $date= $url->created_at;
    	return view('Alerts.display',['medi'=>$medi, 'date'=>$date]);

    }

    // Return Alertes Page
    public function index(){

    	return view('Alerts.index');
    }
      

    public function destroyAll(){
        DB::table('notifications')->delete();

        return view('Alerts.index')->with('danger', 'Notifications Supprimées!');
    }

}
