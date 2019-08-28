@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Nouvelle Vente:</h2><br>
      <form action="{{ url('vente') }}" method="POST">
        {{ csrf_field() }}
        
       
        <div class="form-group has-error">
          <label for="">Lot:</label>
<<<<<<< HEAD
          <input list="browsers" name="lot" class="form-control" value="{{ old('lot') }}" required>
=======

          <input list="browsers" name="lot" class="form-control" required>
>>>>>>> master

<datalist id="browsers">

@foreach($lotid as $l)
    <option value="{{ $l->id }}">
    
    @endforeach

</datalist>
<<<<<<< HEAD
        @if($errors->get('lot'))
        @foreach($errors->get('lot') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
              
=======

>>>>>>> master
        </div>
       
       

        <div class="form-group has-error">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
        </div>
<<<<<<< HEAD
       
        <div class="form-group has-error">
          <label for="">Quatitée:</label>
          <input type="number" name="qt" min="1"  class="form-control" value="{{ old('qt') }}" required>
        @if($errors->get('qt'))
        @foreach($errors->get('qt') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
=======
        <div class="form-group">
          <label for="">Quantité:</label>
          <input type="number" name="qt" min="1"  class="form-control" required>
>>>>>>> master
        </div>


        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
