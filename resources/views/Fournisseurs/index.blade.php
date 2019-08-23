@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">
       @if(session()->has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h5> {{session()->get('success')}} </h5>
          </div>
       @endif

       <h3><u><i>La listes des fournisseurs :</i></u></h3>
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


                  <a href="{{ url('fournisseurs/'.$frnsrs->id)}}" class="btn btn-primary">Details</a>
                  <a href="{{ url('fournisseurs/'.$frnsrs->id.'/edit')}}" class="btn btn-info">Modifier</a>
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
