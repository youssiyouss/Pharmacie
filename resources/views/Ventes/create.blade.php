@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Nouvelle Vente:</h2><br>
      <form action="{{ URL('vente')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Lot:</label>
          
          <input list="browsers" name="lot" class="form-control" required>

<datalist id="browsers">

@foreach($lotid as $l)
    <option value="{{ $l->id }}">
    @endforeach

</datalist>
  
        </div>
        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Quantité:</label>
          <input type="number" name="qt" min="1"  class="form-control" required>
        </div>
        
       
        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection