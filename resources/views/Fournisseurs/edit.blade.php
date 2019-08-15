@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
        <div class="form-group">
          <label for="">Nom:</label>
          <input type="text" name="nom" class="form-control" value="{{ $frnsrs->nom }}">
        </div>
        <div class="form-group">
          <label for="">Adresse:</label>
          <input type="text" name="adresse" class="form-control" value="{{ $frnsrs->adresse}}">
        </div>
        <div class="form-group">
          <label for="">Numero Telephone:</label>
          <input type="number" name="tel" class="form-control" value="{{ $frnsrs->tel}}">
        </div>
        <div class="form-group">
          <label for="">Email:</label>
          <input type="email" name="email" class="form-control" value="{{ $frnsrs->email}}">
        </div>

        <div class="form-group">
          <input type="submit" class="form-control btn btn-danger" value="Enregistrer">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
