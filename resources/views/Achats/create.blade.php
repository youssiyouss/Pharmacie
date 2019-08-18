@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Nouveau Achat:</h2><br>
      <form action="{{ url('achat') }}" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Numéro du fournisseur:</label>
          <input type="number" name="numf" min="1"  class="form-control" required>
        </div>
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
