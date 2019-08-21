@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Nouveau Achat:</h2><br>
      <form action="{{ url('achat') }}" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group">
          <label for="">Date Achat:</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Numéro du fournisseur:</label>
          <input list="browsers" name="numf" class="form-control" required>

<datalist id="browsers">

@foreach($four as $l)
    <option value="{{ $l->id }}">
    
    @endforeach

</datalist>
              
        </div>
       
       <div class="form-group">
          <label for="">Nom Médicament:</label>
          <input type="text" name="med"  class="form-control" required>
        </div>

        <div class="form-group">
          <label for="">Date de fabrication:</label>
          <input type="date" name="datefab" class="form-control" required>
        </div>
       
       <div class="form-group">
          <label for="">Prix:</label>
          <input type="number" name="prix" min="1"  class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Quatitée Achat:</label>
          <input type="number" name="qtachat" min="1"  class="form-control" required>
        </div>

        <div class="form-group">
          <input type="submit"  class="btn btn-success" value="Valider">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
