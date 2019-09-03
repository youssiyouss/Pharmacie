@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2>Modifier Vente:</h2><br>


         <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

      <form action="{{ url('vente/'.$v->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        
       <div class="form-group has-error">
          <label for="">Lot:</label>
          <input list="browsers" name="lot" class="form-control" value="{{ $v->lot }}" required>

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

        <div class="form-group">
          <label for="">Date:</label>
          <input type="date" name="date" min="1"  class="form-control" value="{{ $v->date }}">
          @if($errors->get('date'))
        @foreach($errors->get('date') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif
        </div>

        <div class="form-group has-error">
          <label for="">Quatitée:</label>
          <input type="number" name="qt" min="1"  class="form-control" value="{{ $v->qt }}" required>
        @if($errors->get('qt'))
        @foreach($errors->get('qt') as $message)
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
    </div>
    
    </div>
  </div>
</div>

@endsection
