@extends('layouts.admin')

@section('content')
<div class="pull-right">
  <a href="{{ url('register')}}" class="btn btn-primary">Créer Compte</a>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">

<form action="{{ url('pharmaciens/'.$phar->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field()}}
  <div class="form-group">
      <label for="">Nom:</label>
      <input type="text" name="nom" class="form-control @if($errors->get('nom')) is-invalid @endif"  value="{{ $phar->nom }}">
      @if($errors->get('nom'))
         @foreach($errors->get('nom') as $message)
           <li>{{ $message }}</li>
         @endforeach
      @endif
  </div>

  <div class="form-group">
    <label for="">Prénom:</label>
    <input type="text" name="prenom" class="form-control @if($errors->get('prenom')) is-invalid @endif" value="{{ $phar-> Prenom}}">
    @if($errors->get('prenom'))
       @foreach($errors->get('prenom') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Numero de téléphone:</label>
    <input type="number" name="tel" class="form-control @if($errors->get('tel')) is-invalid @endif" value="{{ $phar->tel }}">
    @if($errors->get('tel'))
       @foreach($errors->get('tel') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Date de naissance:</label>
    <input type="date" name="date_nais" min="1960-01-01"max="2019-01-01" class="form-control @if($errors->get('date_nais')) is-invalid @endif" value="{{ $phar->date_nais }}">
    @if($errors->get('date_nais'))
       @foreach($errors->get('date_nais') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Email:</label>
    <input type="email" name="email" class="form-control @if($errors->get('email')) is-invalid @endif" value="{{ $phar->email }}">
    @if($errors->get('email'))
       @foreach($errors->get('email') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Nom utilisateur:</label>
    <input type="text" name="login" class="form-control @if($errors->get('login')) is-invalid @endif" value="{{ $phar->login }}">
    @if($errors->get('login'))
       @foreach($errors->get('login') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
    <label for="">Mot de passe:</label>
    <input type="password" name="psw" class="form-control @if($errors->get('psw')) is-invalid @endif" value="{{ $phar->psw }}">
    @if($errors->get('psw'))
       @foreach($errors->get('psw') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
  </div>

  <div class="form-group">
      <label for="">Admin:</label><br>
      <input type="radio" name="isadmin" value="0" @if($phar->isadmin==0) checked @endif><b>Non</b>
      <input type="radio" name="isadmin" value="1" @if($phar->isadmin==1) checked @endif ><b>Oui</b>
      @if($errors->get('isadmin'))
         @foreach($errors->get('isadmin') as $message)
           <li>{{ $message }}</li>
         @endforeach
      @endif
  </div>

  <div class="form-group">
    <label for="">Photo de profile</label>
    <input type="file" name="photo" class="form-control @if($errors->get('photo')) is-invalid @endif" value="{{ $phar->photo }}">
    @if($errors->get('photo'))
       @foreach($errors->get('photo') as $message)
         <li>{{ $message }}</li>
       @endforeach
    @endif
 </div>

  <div class="form-group">

      <input type="submit" value="Modifier"  class="form-control btn btn-danger">
  </div>


</form>

    </div>
  </div>
</div>


@endsection
