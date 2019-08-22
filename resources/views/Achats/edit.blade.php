@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2>Modifier Achat:</h2><br>
      <form action="{{ url('achat/'.$a->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ $a->date }}">
           @if($errors->get('date'))
        @foreach($errors->get('date') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
        </div>
        <div class="form-group">
          <label for="">Numéro du fournisseur:</label>
          <input type="number" name="numf" min="1"  class="form-control" value="{{ $a->fournisseur }}">
          @if($errors->get('numf'))
        @foreach($errors->get('numf') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
        </div>
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
          <a href="{{ url('achat') }}" class="btn btn-danger">Annuler</a>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
