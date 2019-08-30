@extends('layouts.app')

@section('content')
            @if(count($errors))
            <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $msg)
                {{ $msg}}
              @endforeach
            </div>
            @endif

                    <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form p-b-33 p-t-5" >
                        @csrf

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" id="email" type="email" name="email" placeholder="Adresse email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                            <div class="container-login100-form-btn m-t-32">
                                <button type="submit" class="login100-form-btn">
                                    Envoyer lien de reinstallation
                                </button>
                            </div>

                    </form>

@endsection
