@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

    @foreach($achat as $a)
      <div class="container">
  <h2>Détails Achat:</h2>
  <h5 class="bg-primary">détail sur l'Achats le Fournisseur et Lot :</h5>
  <table class="table table-borderless" >
    <thead>
      <tr>
        <th></th>
        <th></th>

      </tr>
    </thead>
    <tbody>
      <tr >
        <td>ID Achat</td>
        <td>{{ $a->id }}</td>

      </tr>
      <tr>
        <td>Date Achat</td>
        <td>{{ $a->date }}</td>

      </tr>
      <tr >
        <td>Quantité Achat</td>
        <td>{{ $a->qt_achat }}</td>

      </tr>

       <tr >
        <td>Quantité au stock du Lot</td>
        <td>{{ $a->qt_stock }}</td>

      </tr>

      <tr >
        <td>Date de fabrication Lot</td>
        <td>{{ $a->date_fab }}</td>

      </tr>

      <tr >
        <td>Prix</td>
        <td>{{ $a->prix }} DA</td>

      </tr>

      <tr>
        <td>Nom Fournisseur</td>
        <td>{{ $a->nom }}</td>

      </tr>

      <tr>
        <td>Adresse du Fournisseur</td>
        <td>{{ $a->adresse }}</td>

      </tr>

      <tr>
        <td>Téléphone du Fournisseur</td>
        <td>{{ $a->tel }}</td>

      </tr>

      <tr>
        <td>Email du Fournisseur</td>
        <td>{{ $a->email }}</td>

      </tr>

      <tr>
        <td><a href="{{ url('achat') }}" class="btn btn-success">Retour</a></td>


      </tr>

    </tbody>
  </table>
</div>

    @endforeach
  </div>
</div>

@endsection
