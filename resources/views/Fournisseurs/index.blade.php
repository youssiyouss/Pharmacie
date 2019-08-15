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
                <a href="" class="btn btn-primary">Details</a>
                <a href="{{ url('fournisseurs/'.$frnsrs->id.'/edit')}}" class="btn btn-default">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>
          @endforeach
        </body>
       </table>
     </div>
   </div>
 </div>

@endsection
