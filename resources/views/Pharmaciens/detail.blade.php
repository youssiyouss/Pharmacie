@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <head>

      <h1>Pharmacien Numero : {{ $phar->id}}</h1>
      </head>
        <body>
           <table align="center" class="form-group">
           <tr>

              <td>
                <div class="row">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="{{ asset('storage/'.$phar->photo) }}" alt="Card image cap">
                        <div class="card-body">
                          <h6 class="card-title">{{ $phar->nom}} {{ $phar->Prenom}}</h6>
                       </div>
                 </div>

              </div>
            </td>
             <td>
               <tr> <td><i><h4><u>id</u></h4></i></td><td>: {{ $phar->id}}</td> </tr>
               <tr> <td><i><h4><u>Nom</u></h4></i></td> <td>: {{ $phar->nom}}</td> </tr>
               <tr> <td><i><h4><u>Prénom</u></h4></i></td> <td>: {{ $phar->Prenom}}</td> </tr>
               <tr> <td><i><h4><u>Numero de Telephone</u></h4></i></td><td> : {{ $phar->tel}} </td></tr>
               <tr> <td><i><h4><u>Date de naissance</u></h4></i></td><td>: {{ $phar->date_nais}}</td></tr>
               <tr> <td><i><h4><u>email</u></h4></i></td><td> : {{ $phar->email}}</td></tr>
               <tr> <td><i><h4><u>Login</u></h4></i></td><td>: {{ $phar->login}}</td></tr>
               <tr> <td><i><h4><u>Mot de passe</u></h4></i></td><td>: {{ $phar->psw}}</td></tr>
               <tr> <td><i><h4><u>Statut</u></h4></i></td><td>: {{ $phar->isadmin}}</td></tr>
               <tr> <td><i><h4><u>Date d'ajout</u></h4></i></td><td> : {{ $phar->created_at}}</td></tr>
               <tr> <td><i><h4><u>Derniere modification</u></h4></i></td><td> :  {{ $phar->updated_at}}</td></tr>

             </td>
           </tr>
        </table>
      </body>
    </div>
  </div>
</div>
@endsection
