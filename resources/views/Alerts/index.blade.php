@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4 class="alert alert-danger">Alertes :</h4>

       <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                               @if(Session::has('danger'))
                   <div class="alert alert-danger">
                     {{ Session::get('danger') }}
                   </div>
                        @endif

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
          @if(auth()->user()->notifications->count()!=0)
          <br>
         <div class="text-center">
         <form action="{{ url('alert') }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer tous?')">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger">Supprimer tous</button>
         </form>
         </div> 
         @endif
          
           @if(auth()->user()->notifications->count()==0)
           <br>
         <div class="text-center">
         <h2 class="alert alert-info">Pas de notifications</h2>
         </div> 
         <br>

           @endif


        </div>
      </div>
    </div>
  </div>
        
       
     </div>
   </div>
 </div>

@endsection
