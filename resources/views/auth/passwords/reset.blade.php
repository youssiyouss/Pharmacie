<!DOCTYPE html>
<html lang="en">
<head>
	<title>PharmaTlem</title>
	<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="/Login_v16/images/icons/pt.png"/>
  <style>
  body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}
  .limiter {
    width: 100%;
    margin: 0 auto;
  }
  .container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;
  }

  .container-login100::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.65);
  }
  .container-login100-form-btn {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .wrap-login100 {
    width: 450px;
    border-radius: 10px;
    overflow: hidden;

    background: transparent;
  }

  .p-b-50 {
    padding-bottom: 50px;
}
.p-t-30 {
    padding-top: 30px;
}
.p-b-41 {
    padding-bottom: 41px;
}
.p-b-33 {
    padding-bottom: 33px;
}
.p-t-5 {
    padding-top: 5px;
}
.login100-form-title {
  font-family: Ubuntu-Bold;
  font-size: 28px;
  color: #fff;
  line-height: 1.2;
  text-align: center;
  text-transform: uppercase;

  display: block;
}

.login100-form-btn {
  font-family: Ubuntu-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 42px;
  border-radius: 21px;

  background: #d41872;
  background: -webkit-linear-gradient(left, #b7e778,  #fa4299,#9068be);
  background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: linear-gradient(left, #a445b2, #d41872, #fa4299);
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 21px;
  background-color: #555555;
  top: 0;
  left: 0;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: transparent;
}

.login100-form-btn:hover:before {
  opacity: 1;
}
.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 1px solid #e6e6e6;
  padding: 29px 0;
}
.login100-form {
    width: 100%;
    border-radius: 10px;
    background-color: #fff;
}
.validate-input {
  position: relative;
}
.input100 {
  font-family: Ubuntu-Regular;
  font-size: 20px;
  color: #555555;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 50px;
  background: transparent;
  padding: 0 10px 0 80px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

/*---------------------------------------------*/
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 0;
  height: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #d41872;
  background: -webkit-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -o-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: -moz-linear-gradient(left, #a445b2, #d41872, #fa4299);
  background: linear-gradient(left, #a445b2, #d41872, #fa4299);
}

.focus-input100::after {
  font-family: Linearicons-Free;
  font-size: 18px;
  color: #999999;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 40px;
  left: 35px;


  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus {
  padding-left: 60px;
}

.input100:focus + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.has-val.input100 {
  padding-left: 60px;
}
form {
    display: block;
    margin-top: 0em;
}


  </style>
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('/Login_v16/images/pills.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
            <img src="/assets/images/pt.png" width="36" height="36" >
            <i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></span>

                        <form method="POST" action="{{ route('password.update') }}"  class="login100-form validate-form p-b-33 p-t-5">
                          @csrf
													@if(count($errors))
													<div class="alert alert-danger" role="alert" style=" color:red;">
														@foreach($errors->all() as $msg)
															{{ $msg}}
														@endforeach
													</div>
													@endif
                          <input type="hidden" name="token" value="{{ $token }}">

                          <div class="wrap-input100 validate-input" data-validate = "Enter email">
                            	<input class="input100" id="email" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autocomplete="email" autofocus >
                            	<span class="focus-input100" data-placeholder="&#xe82a;"></span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Enter email">
                              <input class="input100" id="password" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                              <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Enter email">
                              <input class="input100" id="password-confirm" type="password" name="password_confirmation" placeholder="Comfirmer Mot de passe" required autocomplete="new-password">
                              <span class="focus-input100" data-placeholder="&#xe82a;"></span>
															<label>
																<input type="checkbox" id="checkbox" style="cursor:pointer;">
																	 Afficher le mot de passe
																</label>
                          </div>

                          <div  class="container-login100-form-btn m-t-32">
                              <button type="submit" class="login100-form-btn">
                                  Réinsialiser
                              </button>
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

            </body>
            </html>
