@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Les ventes :</h4>

       <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
         
         @if(Session::has('success'))
                   <div class="alert alert-success">
                     {{ Session::get('success') }}
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
                <form action="{{ url('vente/'.$v->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette vente?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ url('vente/'.$v->id.'/detail') }}" class="btn btn-primary">Details</a>
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
</div>
     </div>
   </div>
 </div>

@endsection
