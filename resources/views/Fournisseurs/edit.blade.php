@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}
        <div class="form-group">
          <label for="">Nom:</label>
          <input type="text" name="nom" class="form-control  @if($errors->get('nom')) is-invalid @endif" value="{{ $frnsrs->nom }}">
          @if($errors->get('nom'))
             @foreach($errors->get('nom') as $message)
               <li>{{ $message }}</li>
             @endforeach
          @endif
        </div>
        <div class="form-group">
          <label for="">Adresse:</label>
          <input type="text" name="adresse" class="form-control @if($errors->get('adresse')) is-invalid @endif" value="{{ $frnsrs->adresse}}">
          @if($errors->get('adresse'))
             @foreach($errors->get('adresse') as $message)
               <li>{{ $message }}</li>
             @endforeach
          @endif
        </div>
        <div class="form-group">
          <label for="">Numero Telephone:</label>
          <input type="number" name="tel" class="form-control @if($errors->get('tel')) is-invalid @endif" value="{{ $frnsrs->tel}}">
          @if($errors->get('tel'))
             @foreach($errors->get('tel') as $message)
               <li>{{ $message }}</li>
             @endforeach
          @endif
        </div>
        <div class="form-group">
          <label for="">Email:</label>
          <input type="email" name="email" class="form-control @if($errors->get('email')) is-invalid @endif" value="{{ $frnsrs->email}}">
          @if($errors->get('email'))
             @foreach($errors->get('email') as $message)
               <li>{{ $message }}</li>
             @endforeach
          @endif
        </div>

        <div class="form-group">
          <input type="submit" class="form-control btn btn-danger" value="Enregistrer">

        </div>
      </form>
    </div>
  </div>
</div>

@endsection
