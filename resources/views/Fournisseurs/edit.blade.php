@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

<<<<<<< HEAD
<<<<<<< HEAD
      <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
        <div class="form-group">
          <label for="">Nom:</label>
          <input type="text" name="nom" class="form-control" value="{{ $frnsrs->nom }}">
=======
=======
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
      <form action="{{ URL('fournisseurs')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Nom:</label>
          <input type="text" name="nom" class="form-control" value="{{ $frnsrs->nom}}">
<<<<<<< HEAD
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
=======
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
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
<<<<<<< HEAD
<<<<<<< HEAD
          <input type="submit" class="form-control btn btn-danger" value="Enregistrer">
=======
          <input type="submit" class="form-control btn btn-danger" value="Modifier">
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
=======
          <input type="submit" class="form-control btn btn-danger" value="Modifier">
>>>>>>> 50df99005c829ee6d8f831471c92379bfa1a56d2
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
