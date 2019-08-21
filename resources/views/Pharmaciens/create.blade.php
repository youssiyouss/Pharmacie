@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

<form action="{{ url('pharmaciens')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
  <div class="form-group">
      <label for="">Nom:</label>
      <input type="text" name="nom" class="form-control @if($errors->get('nom')) is-invalid @endif"  value=" {{ old('nom') }}">
      @if($errors->get('nom'))
         @foreach($errors->get('nom') as $message)
           <li>{{ $message }}</li>
         @endforeach
      @endif
  </div>

  <div class="form-group">
    <label for="">Prénom:</label>
    <input type="text" name="prenom" class="form-control @if($errors->get('prenom')) is-invalid @endif" value=" {{ old('prenom') }}">
    @if($errors->get('prenom'))
       @foreach($errors->get('prenom') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Numero de téléphone:</label>
    <input type="text" name="tel" pattern="[0-9]+|+[0-9]+" class="form-control @if($errors->get('tel')) is-invalid @endif" value=" {{ old('tel') }}">
    @if($errors->get('tel'))
       @foreach($errors->get('tel') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Date de naissance:</label>
    <input type="date" name="date_nais" min="1960-01-01"max="2019-01-01" class="form-control @if($errors->get('date_nais')) is-invalid @endif" value=" {{ old('date_nais') }}">
    @if($errors->get('date_nais'))
       @foreach($errors->get('date_nais') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Email:</label>
    <input type="email" name="email" class="form-control @if($errors->get('email')) is-invalid @endif" value=" {{ old('email') }}">
    @if($errors->get('email'))
       @foreach($errors->get('email') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Nom utilisateur:</label>
    <input type="text" name="login" class="form-control @if($errors->get('login')) is-invalid @endif" value=" {{ old('login') }}">
    @if($errors->get('login'))
       @foreach($errors->get('login') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Mot de passe:</label>
    <input type="password" name="psw" class="form-control @if($errors->get('psw')) is-invalid @endif" value=" {{ old('psw') }}">
    @if($errors->get('psw'))
       @foreach($errors->get('psw') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
      <label for="">Admin:</label><br>
      <input type="radio" name="isadmin" value="0" checked value=" {{ old('isadmin') }}"><b>Non</b>
      <input type="radio" name="isadmin" value="1" value=" {{ old('isadmin') }}"><b>Oui</b>


  </div>
  <div class="form-group">
    <label for="">Photo de profile</label>
    <input class="form-control" type="file" name="photo">

  </div>

  <div class="form-group">

      <input type="submit" value="Enregistrer"  class="form-control btn btn-primary">
  </div>


</form>

    </div>
  </div>
</div>


@endsection
