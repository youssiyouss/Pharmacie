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
          <input list="browsers" name="lot" class="form-control" value="{{ old('lot') }}" required>

<datalist id="browsers">

@foreach($lotid as $l)
    <option value="{{ $l->id }}">

    @endforeach

</datalist>
        @if($errors->get('lot'))
        @foreach($errors->get('lot') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif

        </div>



        <div class="form-group has-error">
          <label for="">Date:</label>
          <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
        </div>
        <div class="form-group has-error">
          <label for="">Quatitée:</label>
          <input type="number" name="qt" min="1"  class="form-control" value="{{ old('qt') }}" required>
        @if($errors->get('qt'))
        @foreach($errors->get('qt') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif

        </div>


        <div class="form-group">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-check-circle-o" aria-hidden="true">
                  {{ __('Enregistrer') }}
                </i>
              </button>
              <a href="{{ url('vente') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
          </div>  </div>
      </form>
    </div>
  </div>
</div>

@endsection
