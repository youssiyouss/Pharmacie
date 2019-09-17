@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h2>Modifier Achat:</h2><br>


         <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

      <form action="{{ url('achat/'.$a->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

       <div class="form-group has-error">
          <label for="">Numéro du fournisseur:</label>
          <input list="browsers" name="numf" class="form-control" value="{{ $a->fournisseur }}" required>

<datalist id="browsers">

@foreach($fournis as $l)
    <option value="{{ $l->id }}">

    @endforeach

</datalist>
        @if($errors->get('numf'))
        @foreach($errors->get('numf') as $message)
          <li class="alert alert-danger">{{ $message }}</li>
        @endforeach
        @endif

        </div>


          @foreach($lots as $l)

          <div class="form-group has-warning">
          <label for="">Nom Médicament:</label>

         <input list="brows" name="med" class="form-control" value="{{ $l->medoc }}" required>

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
          <input type="date" name="datefab" class="form-control" value="{{ $l->date_fab }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Date de péremption:</label>
          <input type="date" name="dateper" class="form-control" value="{{ $l->date_per }}" required>
        </div>

       <div class="form-group has-error">
          <label for="">Prix:</label>
          <input type="number" name="prix" min="1"  class="form-control" value="{{ $l->prix }}" required>
        </div>

        <div class="form-group has-error">
          <label for="">Quantitée individuelle des Lots:</label>
          <input type="number" name="indiv" min="1"  class="form-control" value="{{ $l->nbr_medoc_lot }}" required>
        </div>
        @endforeach

        <div class="form-group has-error">
          <label for="">Quatitée Achat:</label>
          <input type="number" name="qtachat" min="1"  class="form-control" value="{{ $a->qt_achat }}" required>
        </div>


        <div class="form-group">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-success "><i class="fa fa-thumbs-o-up" aria-hidden="true"> Enregistrer</i></button>
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
