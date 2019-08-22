@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2>Modifier Vente:</h2><br>
      <form action="{{ url('vente/'.$v->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Lot:</label>
          <input type="number" name="lot" min="1" class="form-control" value="{{ $v->lot }}">
           
           @if($errors->get('lot'))
        @foreach($errors->get('lot') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
       
        </div>
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ $v->date }}">
          
           @if($errors->get('date'))
        @foreach($errors->get('date') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
        
        </div>
        <div class="form-group">
          <label for="">Quantité:</label>
          <input type="number" name="qt" min="1"  class="form-control" value="{{ $v->qt }}">
           
           @if($errors->get('qt'))
        @foreach($errors->get('qt') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
        
        </div>
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
          <a href="{{ url('vente') }}" class="btn btn-danger">Annuler</a>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
