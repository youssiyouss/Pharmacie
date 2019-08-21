@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ url('achat/'.$a->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ $a->date }}">
        </div>
        <div class="form-group">
          <label for="">Numéro du fournisseur:</label>
          <input type="number" name="numf" min="1"  class="form-control" value="{{ $a->fournisseur }}">
        </div>
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
