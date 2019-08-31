@extends('layouts.app')

@section('content')
                @if(count($errors))
                <div class="alert alert-danger" role="alert">
                  @foreach($errors->all() as $msg)
                    {{ $msg}}
                  @endforeach
                </div>
                @endif
              <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5" >
                 @csrf
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
      						<input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" autofocus autocomplete="email" required>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                  <span class="focus-input100" data-placeholder="&#xe82a;"></span>
      					</div>

      					<div class="wrap-input100 validate-input" data-validate="Enter password">
      						<input class="input100" id="password" type="password" name="password" placeholder="Mot de passe" required >
                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                  @enderror

      						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
      					</div>
                  <label>
                    <input type="checkbox" id="checkbox" style="cursor:pointer;">
                    <a class="alert-link" href="#">
                         Afficher le mot de passe
                    </a>
                  </label>

      					<div class="container-login100-form-btn m-t-32">
      						<button type="submit"  class="login100-form-btn">
      							Login
      						</button>
            		</div>
              </form>
              <div align="right" >
                @if (Route::has('password.request'))
                       <a class="alert-link" href="{{ route('password.request') }}">
                               {{ __('Forgot Your Password?') }}
                       </a>
                @endif


              	<script src="../Login_v16/vendor/jquery/jquery.min.js"></script>
                <script type="text/javascript">
                  	$(document).ready(function() {
                  		var checkbox = $("#checkbox");
                  		var password = $("#password");
                  		checkbox.click(function() {
                  			if(checkbox.prop("checked")) {
                  				password.attr("type", "text");
                  			} else {
                  				password.attr("type", "password");
                  			}
                  		});
                  	});
                  </script>
              </div>

@endsection
