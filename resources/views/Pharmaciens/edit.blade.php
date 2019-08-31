@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" align="center">Modification pharmacien:
          <a href="{{ url('pharmaciens')}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;">Retour</i></a>
        </div>

        <div class="card-body">

          <form action="{{ url('pharmaciens/'.$phar->id)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field()}}
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Nom:</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $phar->name }}">

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ $phar->Prenom }}" required>

                      @error('prenom')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div> <div class="form-group row">
                  <label for="date_nais" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                  <div class="col-md-6">
                      <input type="Date" class="form-control @error('date_nais') is-invalid @enderror" name="date_nais" value="{{ $phar->date_nais  }}" required>

                      @error('date_nais')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="tel" class="col-md-4 col-form-label text-md-right">Numéro de telephone:</label>

                  <div class="col-md-6">
                      <input type="telephone" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ $phar->tel }}" required>

                      @error('tel')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
               <div class="form-group row">
                  <label for="photo" class="col-md-4 col-form-label text-md-right">Photo de profile:</label>

                  <div class="col-md-6">
                      <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ $phar->photo }}">

                      @error('photo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>


              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $phar->email }}">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe: </label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                      <div class="col-md-12">
                        <input type="checkbox" id="checkbox" style="cursor:pointer;"> Afficher le mot de passe
                        </div>
                  </div>

              </div>

              <div class="form-group row">
                  <label for="login" class="col-md-4 col-form-label text-md-right">Nom d'utilisateur:</label>

                  <div class="col-md-6">
                      <input  type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ $phar->login }}">

                      @error('login')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              @can('isAdmin',Auth::user())
              <div class="form-group row">
                  <label for="isadmin" class="col-md-4 col-form-label text-md-right">Statut:</label>

                  <div class="col-md-6">
                    <input type="radio" name="isadmin" value="0" @if($phar->isadmin==0) checked @endif><b>Non</b>
                    <input type="radio" name="isadmin" value="1" @if($phar->isadmin==1) checked @endif ><b>Oui</b>
                      @error('isadmin')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              @endcan
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success "><i class="fa fa-thumbs-o-up" aria-hidden="true"> Enregistrer</i></button>
                    <a href="{{ url('pharmaciens') }}" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"> Annuler</i></a>
                </div>
            </div>
              </form>
              <script src="/Login_v16/vendor/jquery/jquery.min.js"></script>
              <script type="text/javascript">
                  $(document).ready(function() {
                    var checkbox = $("#checkbox");
                    var password = $("#password");
                    var passwordd = $("#password-confirm");
                    checkbox.click(function() {
                      if(checkbox.prop("checked")) {
                        password.attr("type", "text");
                        passwordd.attr("type", "text");
                      } else {
                        password.attr("type", "password");
                        passwordd.attr("type", "password");
                      }
                    });
                  });
                </script>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
