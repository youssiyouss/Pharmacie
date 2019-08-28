@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Nouveau Achat:</h2><br>
      <form action="{{ url('achat') }}" method="POST">
        {{ csrf_field() }}
        
        <!--div class="form-group">
          <label for="">Date Achat:</label>
          <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
        </div-->
        <div class="form-group has-error">
          <label for="">Numéro du fournisseur:</label>
          <input list="browsers" name="numf" class="form-control" value="{{ old('numf') }}" required>

<datalist id="browsers">

@foreach($four as $l)
    <option value="{{ $l->id }}">
    
    @endforeach

</datalist>
        @if($errors->get('numf'))
        @foreach($errors->get('numf') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
              
        </div>
       
       <div class="form-group has-warning">
          <label for="">Nom Médicament:</label>
          <input type="text" name="med"  class="form-control" value="{{ old('med') }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Date de fabrication:</label>
          <input type="date" name="datefab" class="form-control" value="{{ old('datefab') }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Date de péremption:</label>
          <input type="date" name="dateper" class="form-control" value="{{ old('dateper') }}" required>
        </div>
       
       <div class="form-group has-error">
          <label for="">Prix:</label>
          <input type="number" name="prix" min="1"  class="form-control" value="{{ old('prix') }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Quantitée individuelle des Lots:</label>
          <input type="number" name="indiv" min="1"  class="form-control" value="{{ old('indiv') }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Quatitée Achat:</label>
          <input type="number" name="qtachat" min="1"  class="form-control" value="{{ old('qtachat') }}" required>
        </div>

        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
