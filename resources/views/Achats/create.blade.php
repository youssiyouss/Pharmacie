@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Nouveau Achat:</h2><br>

    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

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

         <input list="brows" name="med" class="form-control" value="{{ old('med') }}" required>

<datalist id="brows">

@foreach($med as $m)
    <option value="{{ $m->nom }}">

    @endforeach

</datalist>
        @if($errors->get('med'))
        @foreach($errors->get('med') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif


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
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-circle-o" aria-hidden="true">
                  {{ __('Enregistrer') }}
                </i>
              </button>
              <a href="{{ url('achat') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
          </div>
        </div>
      </form>

</div>
</div>
</div>
</div>

    </div>
  </div>
</div>

@endsection
