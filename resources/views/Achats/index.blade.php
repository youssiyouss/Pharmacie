@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Liste des Achats :</h4>

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
         <a href="{{ url('achat/create') }}" class="btn btn-success">Nouveau Achat</a>
       </div>
       <table class="table">
         <head>

           <tr>
             <th>ID</th>
             <th>Date création</th>
             <th>Num fournisseur</th>

           </tr>
         </head>
        <body>
            @foreach($achat as $a)

          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->date }}</td>
            <td>{{ $a->fournisseur }}</td>

            <td>
                <form action="{{ url('achat/'.$a->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cet achat?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ url('achat/'.$a->id.'/detail') }}" class="btn btn-primary">Details</a>
                  <a href="{{ url('achat/'.$a->id.'/edit') }}" class="btn btn-info">Modifier</a>
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
