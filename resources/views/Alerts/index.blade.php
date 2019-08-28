@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4 class="alert alert-danger">Alertes :</h4>
       @foreach(auth()->user()->notifications as $notification)

      @if($notification->read_at != NULL)
      
         <a href="{{ url( 'notifread/'.$notification->id ) }}"><div class="border bg-light">
           <table class="table">
              <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{ $notification->data['alerte']['title'] }}  </td>
      <td>{{ $notification->created_at }}</td>
      <td><span><b>Lu à:</b></span> {{ $notification->read_at }}  </td>
    </tr>
    
  </tbody>

           </table>

         </div></a>
       @endif


       @if($notification->read_at == NULL)
      
         <a href="{{ url( 'notifread/'.$notification->id ) }}"><div class="border bg-white">
           <table class="table">
              <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{ $notification->data['alerte']['title'] }}  </td>
      <td>{{ $notification->created_at }}</td>
      <td>  </td>
    </tr>
    
  </tbody>

           </table>

         </div></a>
       @endif






       @endforeach   

        
        
       
     </div>
   </div>
 </div>

@endsection
