@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

    @foreach($achat as $a)
      <div class="container">

  <h5 class="bg-primary">détail sur l'Achats le Fournisseur et Lot :</h5>
  
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

      <tr >
        <td>Date de peremption Lot</td>
        <td>{{ $a->date_per }}</td>

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
</tr>



    @endforeach
    </div>
  </div>
</div>
  </div>
</div>

@endsection
