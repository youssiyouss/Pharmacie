@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

    @foreach($vente as $a)
      <div class="container">
  <h2>Détails Vente:</h2>
  <h5 class="bg-primary">détail de la Vente :</h5>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
       <div class="card-body">

  <table class="table table-borderless" >
    <thead>
      <tr>
        <th></th>
        <th></th>

      </tr>
    </thead>
    <tbody>
      <tr >
        <td>ID Vente</td>
        <td>{{ $a->id }}</td>

      </tr>
      <tr>
        <td>Date Vente</td>
        <td>{{ $a->date }}</td>

      </tr>
      <tr >
        <td>Quantité Vente</td>
        <td>{{ $a->qt }}</td>

     </tr>

      <tr >
        <td>Prix total</td>
        <td>{{ $a->prix_total }}</td>

     </tr>

     <tr >
        <td>Médicament</td>
        <td>{{ $medoc->nom }}</td>

     </tr>

     <tr >
        <td>Prix unitaire</td>
        <td>{{ $medoc->prix }}</td>

     </tr>


      <tr>
        <td><a href="{{ url('vente') }}" class="btn btn-success">Retour</a></td>


      </tr>

    </tbody>
  </table>
</tr>



    @endforeach
    </div>
  </div>
</div>
  </div>
</div>

@endsection
