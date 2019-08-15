@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h1>La listes des fournisseurs :</h1>
       <div class="pull-right">
         <a href="{{ url('fournisseurs/create')}}" class="btn btn-success">Ajout Fournisseur</a>
       </div>
       <table class="table">
         <head>
           <tr>
             <th>Nom:</th>
             <th>Adresse:</th>
             <th>Numero de Telephone:</th>
             <th>email:</th>
           </tr>
         </head>
        <body>
          @foreach($frnsrs as $frnsrs)

          <tr>
            <td>{{ $frnsrs->nom}}</td>
            <td>{{ $frnsrs->adresse}}</td>
            <td>{{ $frnsrs->tel}}</td>
            <td>{{ $frnsrs->email}}</td>
            <td>
                <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="" class="btn btn-primary">Details</a>
                  <a href="{{ url('fournisseurs/'.$frnsrs->id.'/edit')}}" class="btn btn-default">Modifier</a>
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
