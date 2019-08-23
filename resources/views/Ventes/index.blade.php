@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Les ventes :</h4>
          @if(session()->has('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                  <h5> {{session()->get('success')}} </h5>
            </div>
         @endif
       <div class="pull-right">
         <a href="{{ url('vente/create') }}" class="btn btn-success">Nouvelle vente</a>
       </div>
       <table class="table">
         <head>

           <tr>
             <th>ID</th>
             <th>Lot</th>
             <th>Date</th>
             <th>Quatitée</th>
           </tr>
         </head>
        <body>
           @foreach($vente as $v)

          <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->lot }}</td>
            <td>{{ $v->date }}</td>
            <td>{{ $v->qt }}</td>
            <td>
                <form action="{{ url('vente/'.$v->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="#" class="btn btn-primary">Details</a>
                  <a href="{{ url('vente/'.$v->id.'/edit') }}" class="btn btn-info">Modifier</a>
                  <button type="submit" class="btn btn-danger">Supprimer</button>

                </form>
           </td>
          </tr>
         @endforeach
        </body>
       </table>
     </div>
   </div>
 </div>

@endsection
