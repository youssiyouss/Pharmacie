@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ URL('fournisseurs')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Nom:</label>
          <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Adresse:</label>
          <input type="text" name="adresse" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Numero Telephone:</label>
          <input type="number" name="tel" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Email:</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <input type="submit" class="form-control" value="Créer Fournisseur">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
