@extends('layouts.admin')

@section('content')



<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">

      <h2> <i>Vous n'etes pas autorisé pour cette action vous devez avoir les droits Admin !</i></h2>
      <a href="{{ url('pharmaciens')}}"> <h5> <b><u>Retour</u></b></h5></a>
    </div>
  </div>
</div>

@endsection
