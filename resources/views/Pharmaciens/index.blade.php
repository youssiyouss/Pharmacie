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

       <h3><u><i>La listes des Pharmaciens :</i></u></h3>
       <div class="pull-right">
         <a href="{{ url('pharmaciens/create')}}" class="btn btn-success">Ajout Pharmacien</a>
       </div>
       <table class="table">
         <head>
           <tr>
             <th>Nom:</th>
             <th>Prenom:</th>
             <th>Numero de Telephone:</th>
             <th>Date de naissance:</th>
             <th>email:</th>
             <th>Statu:</th>

           </tr>
         </head>
        <body>
          @foreach($phar as $phar)

          <tr>
            <td>{{ $phar->nom}}</td>
            <td>{{ $phar->Prenom}}</td>
            <td>{{ $phar->tel}}</td>
            <td>{{ $phar->date_nais}}</td>
            <td>{{ $phar->email}}</td>
            <td>@if($phar->isadmin==true)
                    Admin
                @else
                    Pharmacien
                @endif
              </td>
            <td>
                <form action="{{ url('pharmaciens/'.$phar->id)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ url('pharmaciens/'.$phar->id)}}" class="btn btn-default">Details</a>
                  <a href="{{ url('pharmaciens/'.$phar->id.'/edit')}}" class="btn btn-primary">Modifier</a>
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
