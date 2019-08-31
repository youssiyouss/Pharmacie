@extends('layouts.app')

@section('content')
            @if(session()->has('success'))
               <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                     <h5> {{session()->get('success')}} </h5>
               </div>
            @endif
            
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
                            <input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                            <div class="container-login100-form-btn m-t-32">
                                <button type="submit" class="login100-form-btn">
                                    Envoyer lien de réinistialisation
                                </button>
                            </div>

                    </form>

@endsection
