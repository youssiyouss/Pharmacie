@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <head>

      <h1>Fournisseur Numero : {{ $frnsrs->id}}</h1>
      </head>
        <body>
         <table align="center">
          <tr> <td><i><h4><u>id</u></h4></i></td><td>: {{ $frnsrs->id}}</td> </tr>
          <tr> <td><i><h4><u>Nom</u></h4></i></td> <td>: {{ $frnsrs->nom}}</td> </tr>
          <tr> <td><i><h4><u>Adresse</u></h4></i></td><td>: {{ $frnsrs->adresse}}</td></tr>
          <tr> <td><i><h4><u>Numero de Telephone</u></h4></i></td><td> : {{ $frnsrs->tel}} </td>
          <tr> <td><i><h4><u>email</u></h4></i></td><td> : {{ $frnsrs->email}}</td>
          <tr> <td><i><h4><u>Date d'ajout</u></h4></i></td><td> : {{ $frnsrs->created_at}}</td>
          <tr> <td><i><h4><u>Derniere modification</u></h4></i></td><td> :  {{ $frnsrs->updated_at}}</td>

           </tr>

        </table>
      </body>
      </table>
    </div>
  </div>
</div>
@endsection
