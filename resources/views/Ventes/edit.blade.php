@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ url('vente/'.$v->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Lot:</label>
          <input type="number" name="lot" min="1" class="form-control" value="{{ $v->lot }}">
        </div>
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ $v->date }}">
        </div>
        <div class="form-group">
          <label for="">Quantité:</label>
          <input type="number" name="qt" min="1"  class="form-control" value="{{ $v->qt }}">
        </div>
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
