@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creation d'un nouveau pharmacien:</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('pharmaciens')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="date_nais" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                            <div class="col-md-6">
                                <input type="Date" class="form-control @error('date_nais') is-invalid @enderror" name="date_nais" value="{{ old('date_nais') }}" required autocomplete="date_nais" autofocus>

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
                                <input type="telephone" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

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
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}">

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required unique autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Comfirmer mot de passe:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="col-md-12">
                                  <input type="checkbox" id="checkbox" style="cursor:pointer;"> Afficher le mot de passe
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">Nom d'utilisateur:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login">

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isadmin" class="col-md-4 col-form-label text-md-right">Statut:</label>

                            <div class="col-md-6">
                                <input type="radio" name="isadmin" value="0" value=" {{ old('isadmin') }}"><b>Non</b>
                                <input type="radio" name="isadmin" value="1" value=" {{ old('isadmin') }}"><b>Oui</b>
                                @error('isadmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-check-circle-o" aria-hidden="true">
                                    {{ __('Enregistrer') }}
                                  </i>
                                </button>
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
